<?php


namespace App\Http\Controllers\Admin\WebSite;


use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Order\Repositories\OrderRepository;
use App\Modules\Backend\Website\Order\Requests\UpdateOrderRequest;
use App\Modules\Backend\Website\OrderItem\Repositories\OrderItemRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use App\Modules\Backend\Website\Product\Requests\CreateProductRequest;
use App\Modules\Backend\Website\Product\Requests\UpdateProductRequest;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends BaseController
{
    private $productRepository, $log ,$orderRepository, $orderItemRepository;
    private $commonRoute='dashboard.order';
    private $commonView='web-site.orders.';
    private $commonMessage='Order';
    private $viewData;
    public function __construct(Log $log, ProductRepository $productRepository , OrderRepository $orderRepository, OrderItemRepository $orderItemRepository)
    {

        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
        $this->orderItemRepository = $orderItemRepository;
        $this->log = $log;
        $this->viewData['commonRoute']=$this->commonRoute;
        $this->viewData['commonView']=$this->commonView;
        $this->viewData['commonMessage']=$this->commonMessage;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('read', $this->orderRepository->getModel());
        $order = $this->orderRepository->getAll();
        if(\request()->ajax()) {
            return DataTables::of($order)
                ->addColumn('action', function ($products) {
                    $data = $products;
                    $name = 'dashboard.order';
                    $watch = true;
                    return $this->view('partials.common.action', compact('data', 'name', 'watch'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web-site.orders.index',$this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->viewData['role'] = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        $this->viewData['category']=$this->categoryRepository->getAll();
        return $this->view('web-site.orders.create',$this->viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $createProductRequest)
    {
        $data = $createProductRequest->all();
        $data['user_id']=Auth::user()['id'];
        $data['image']=$data['product_image'];
        try {
            $post = $this->productRepository->create($data);
            if($post == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Content created successfully');
            return redirect()->route('dashboard.product.index');
        }
        catch (\Exception $e) {
            $this->log->error('Content create : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($orderNumber)
    {
        $order = $this->orderRepository->findById($orderNumber);
        $orderlist=$this->orderItemRepository->findBy('order_id', $order->id, '=',false);
        foreach ($orderlist as $orders) {
            $product = $this->productRepository->findBy('id', $orders->product_id, '=', false);
        }
        return $this->view('web-site.orders.show', compact('order','orderlist','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        $order = $this->orderRepository->findById($id);
        return $this->view('web-site.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $updateOrderRequest, $id)
    {
        $data = $updateOrderRequest->all();
        try {
            $order = $this->orderRepository->update($data, $id);
            if($order == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Content updated successfully');
            return redirect()->route('dashboard.order.index');
        }
        catch (\Exception $e) {
            $this->log->error('Content update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', $this->productRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->productRepository->hardDelete($id);
            else
                $this->productRepository->delete($id);
            session()->flash('success', 'Content deleted successfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            $this->log->error('Content delete : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
