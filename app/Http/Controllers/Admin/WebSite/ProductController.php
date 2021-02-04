<?php


namespace App\Http\Controllers\Admin\WebSite;



use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use App\Modules\Backend\Website\Product\Requests\CreateProductRequest;
use App\Modules\Backend\Website\Product\Requests\UpdateProductRequest;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends BaseController
{
    private $productRepository, $log ,$categoryRepository;
    private $commonRoute='dashboard.product';
    private $commonView='web-site.product.';
    private $commonMessage='Product';
    private $viewData;
    public function __construct(Log $log, ProductRepository $productRepository , CategoryRepository $categoryRepository)
    {

        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
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
        $this->authorize('read', $this->productRepository->getModel());
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        switch ($role)
        {
            case 'administrator':
                $product = $this->productRepository->getAll();
                break;
            case 'customer':
                $product = $this->productRepository->findByDataTable('user_id',Auth::user()['id'],'=');
                break;

        }
        if(\request()->ajax()) {
            return DataTables::of($product)
                ->addColumn('action', function ($products) {
                    $data = $products;
                    $name = 'dashboard.product';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('product_image', function ($product) {
                    $url=asset($product->getImage());
                    return '<img src='.$url.' border="0" width="40"  />';
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->rawColumns(['product_image', 'action'])
                ->make(true);

        }
        return $this->view('web-site.product.index',$this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->viewData['category']=$this->categoryRepository->getAll();
        return $this->view('web-site.product.create',$this->viewData);
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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=$this->categoryRepository->getAll();
        $product = $this->productRepository->findById($id);
        return $this->view('web-site.product.edit', compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $updateProductRequest, $id)
    {
        $slug=$this->productRepository->findById($id)['slug'];
        $data = $updateProductRequest->all();
        $data['image']=$data['product_image'];
        try {
            $post = $this->productRepository->update($data, $id);
            if($post == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Content updated successfully');
            return redirect()->route('dashboard.product.index');
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
