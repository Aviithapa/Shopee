<?php


namespace App\Http\Controllers\Web\General;


use App\Http\Controllers\Web\BaseController;
use App\Models\Website\Cart;
use App\Models\Website\Order;
use App\Models\Website\OrderItem;
use App\Modules\Backend\Website\Order\Repositories\OrderRepository;
use App\Modules\Backend\Website\OrderItem\Repositories\OrderItemRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use Illuminate\Http\Request;

class EsewaController extends BaseController
{
    private $orderRepository;
    private $orderItemRepository;
    private $productRepository;

    public function __construct(OrderRepository $orderRepository,
                                OrderItemRepository $orderItemRepository,
                                Request $request,  ProductRepository $productRepository)
    {

        $this->productRepository= $productRepository;
        $this->orderRepository=$orderRepository;
        $this->orderItemRepository = $orderItemRepository;
        $this->request = $request;

        parent::__construct();
    }

    public function success(Request $request)
    {
            $datas=new Order();
            $datas->name=auth()->user()->name;
            $datas->address=auth()->user()->address ;
            $datas->payment_method="ESEWA";
            $datas->phone_number=auth()->user()->phone_number;
            $datas->email=auth()->user()->email;
            $datas['user_id']=auth()->user()->id;
            $datas['grand_total']=getCartTotalPrice();
            $datas['item_count']=getTotalQuanity();
            $datas['status'] = "received";
            $datas->save();
            if ($datas) {
                $items =Cart::all()->where('user_id','=',auth()->user()->id);
                foreach ($items as $item)
                {
                    $orderItem = new OrderItem([
                        'order_id'      => $datas['id'],
                        'product_id'    =>  $item->product_id,
                        'quantity'      =>  $item->quantity,
                        'price'         =>  $item->product_price
                    ]);
                    $datas->items()->save($orderItem);
                }
                $url = "https://uat.esewa.com.np/epay/transrec";
                $data =[
                    'amt'=> $datas['grand_total'],
                    'rid'=> $request->refId,
                    'pid'=> $request->oid,
                    'scd'=> 'EPAYTEST'
                    ];

                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                curl_close($curl);

                $response_code = $this->get_xml_node_value('response_code',$response );

                if( trim($response_code) === "Success") {
                    $datas["payment_status"]="payed";
                    $datas->save();
                }
                $items=Cart::all()->where('user_id','=',auth()->user()->id);
                foreach ($items as $item)
                {
                    Cart::destroy($item->id);
                }
            }
        $order=$this->orderRepository->findById($datas->id);
        $orderlist=$this->orderItemRepository->findBy('order_id', $datas->id, '=');
        foreach ($orderlist as $orders) {
            $product = $this->productRepository->findBy('id', $orders->product_id, '=');
        }
        return view('web.pages.orderConfirmation',compact('order','orderlist','product'));
    }

    public function fail(Request $request)
    {
        return redirect()->route('payment.response')->with('error_message', ' You have cancelled your transaction .');
    }

    public function get_xml_node_value($node, $xml) {
        if ($xml == false) {
            return false;
        }
        $found = preg_match('#<'.$node.'(?:\s+[^>]+)?>(.*?)'.
            '</'.$node.'>#s', $xml, $matches);
        if ($found != false) {

            return $matches[1];

        }

        return false;
    }

    public function payment_response()
    {
        return view('response-page');
    }
}
