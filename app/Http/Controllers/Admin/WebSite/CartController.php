<?php


namespace App\Http\Controllers\Admin\WebSite;


use App\Http\Controllers\Web\BaseController;
use App\Modules\Backend\Website\Cart\Repositories\CartRepository;
use Illuminate\Contracts\Logging\Log;

class CartController extends BaseController
{
    private $cartRepository, $log;
    /**
     * CategoryController constructor.
     * @param CartController $cartRepository
     * @param Log $log
     */
    public function __construct(Log $log,CartRepository $cartRepository )
    {
        $this->cartRepository = $cartRepository;
        $this->log = $log;
        parent::__construct();
    }


    public function index()
    {
        if(\request()->ajax()) {
            $cart = $this->cartRepository->getAll()->where('user_id','=',Auth::user()->id);
            return DataTables::of($cart)
                ->addColumn('action', function ($cart) {
                    $data = $cart;
                    $name = 'cart';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web.pages.cart');
    }

    public function destroy($id)
    {
        dd($id);
        try {
            if(isset($request->hard_delete))
                $this->cartRepository->hardDelete($id);
            else
                $this->cartRepository->delete($id);
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
