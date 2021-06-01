<?php


namespace App\Http\Controllers\Admin\WebSite;



use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Faculty\Repositories\FacultyRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use App\Modules\Backend\Website\Product\Requests\CreateProductRequest;
use App\Modules\Backend\Website\Product\Requests\UpdateProductRequest;
use App\Modules\Backend\Website\Semester\Repositories\SemesterRepository;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends BaseController
{
    private $productRepository, $log ,$facultyRepository, $semesterRepository, $categoryRepository, $userRepository;
    private $commonRoute='dashboard.product';
    private $commonView='web-site.product.';
    private $commonMessage='Product';
    private $viewData;
    public function __construct(Log $log, ProductRepository $productRepository ,
                                FacultyRepository $facultyRepository,
                                SemesterRepository $semesterRepository,
                                UserRepository $userRepository,
                                CategoryRepository $categoryRepository)
    {

        $this->productRepository = $productRepository;
        $this->facultyRepository = $facultyRepository;
        $this->semesterRepository = $semesterRepository;
        $this->categoryRepository=$categoryRepository;
        $this->userRepository=$userRepository;
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
        if ($role === "administrator") {
            $product = $this->productRepository->getAll();
            if (\request()->ajax()) {
                return DataTables::of($product)
                    ->addColumn('action', function ($products) {
                        $data = $products;
                        $name = 'dashboard.product';
                        $view = false;
                        return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                    })
                    ->editColumn('product_image', function ($product) {
                        $url = asset($product->getImage());
                        return '<img src=' . $url . ' border="0" width="40"  />';
                    })
                    ->editColumn('id', 'ID: {{$id}}')
                    ->rawColumns(['product_image', 'action'])
                    ->make(true);

            }
            $this->viewData['role'] = $role;
            $this->viewData['categories'] = $this->facultyRepository->getAll();
            return $this->view('web-site.product.index', $this->viewData);
        }else{
            return redirect()->route('dashboard.products.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        if ($role === "administrator") {
            $this->viewData['role'] = Auth::user()->mainRole() ? Auth::user()->mainRole()->name : 'default';
            $this->viewData['faculty'] = $this->facultyRepository->getAll();
            $this->viewData['semester'] = $this->semesterRepository->getAll();
            $this->viewData['category'] = $this->categoryRepository->getAll();
            return $this->view('web-site.product.create', $this->viewData);
        }else{
            return redirect()->route('dashboard.products.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $createProductRequest)
    {
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        if ($role === "administrator") {
            $data = $createProductRequest->all();
            $data['user_id'] = Auth::user()['id'];
            $data['image'] = $data['product_image'];
            try {
                $post = $this->productRepository->create($data);
                if ($post == false) {
                    session()->flash('danger', 'Oops! Something went wrong.');
                    return redirect()->back()->withInput();
                }
                session()->flash('success', 'Content created successfully');
                return redirect()->route('dashboard.product.index');
            } catch (\Exception $e) {
                $this->log->error('Content create : ' . $e->getMessage());
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
        }
        else{
            return redirect()->route('dashboard.products.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('read', $this->productRepository->getModel());
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        if ($role === "administrator") {
            $product = $this->productRepository->findById($id);
            $user = $this->userRepository->findById($product->user_id);
            return $this->view('web-site.product.show', compact('product', 'user'));
        }
        else{
            return redirect()->route('dashboard.products.index');
        }
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
        if ($role === "administrator") {
            $faculty = $this->facultyRepository->getAll();
            $semester = $this->semesterRepository->getAll();
            $product = $this->productRepository->findById($id);
            $category = $this->categoryRepository->getAll();
            return $this->view('web-site.product.edit', compact('product', 'faculty', 'semester', 'role', 'category'));
        }
        else{
            return redirect()->route('dashboard.products.index');
        }
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
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        if ($role === "administrator") {
            $slug = $this->productRepository->findById($id)['slug'];
            $data = $updateProductRequest->all();
            $data['image'] = $data['product_image'];
            try {
                $post = $this->productRepository->update($data, $id);
                if ($post == false) {
                    session()->flash('danger', 'Oops! Something went wrong.');
                    return redirect()->back()->withInput();
                }
                session()->flash('success', 'Content updated successfully');
                return redirect()->route('dashboard.product.index');
            } catch (\Exception $e) {
                $this->log->error('Content update : ' . $e->getMessage());
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
        }
        else{
            return redirect()->route('dashboard.products.index');
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
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        if ($role === "administrator") {
            try {
                if (isset($request->hard_delete))
                    $this->productRepository->hardDelete($id);
                else
                    $this->productRepository->delete($id);
                session()->flash('success', 'Content deleted successfully');
                return redirect()->back();
            } catch (\Exception $e) {
                $this->log->error('Content delete : ' . $e->getMessage());
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back();
            }
        }else{
            return redirect()->route('dashboard.products.index');
        }
    }

    public function approve(Request $request, $id)
    {
        $this->authorize('update',$this->productRepository->getModel());
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        if ($role === "administrator") {
            $data = $request->only('status');
            try {

                $event = $this->productRepository->update($data, $id);
                if ($event == false) {
                    session()->flash('danger', 'Oops! Something went wrong.');
                    return redirect()->back()->withInput();
                }
                session()->flash('success', 'Events have been added Sucessfully');
                return redirect()->back();
            } catch (\Exception $e) {
                $this->log->error('User update : ' . $e->getMessage());
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back();
            }
        }else{
            return redirect()->route('dashboard.products.index');
        }

    }
}
