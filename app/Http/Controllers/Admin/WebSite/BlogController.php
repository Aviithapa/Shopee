<?php


namespace App\Http\Controllers\Admin\WebSite;


use App\Http\Controllers\Admin\BaseController;
use App\Models\Website\Post;
use App\Modules\Backend\Website\Blog\Repositories\BlogRepository;
use App\Modules\Backend\Website\Blog\Requests\CreateBlogRequest;
use App\Modules\Backend\Website\Blog\Requests\UpdateBlogRequest;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use Illuminate\Contracts\Logging\Log;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends BaseController
{
    private $postRepository, $log, $productRepository, $blogRepository;
    public function __construct(Log $log, PostRepository $postRepository ,
                                ProductRepository $productRepository,
                                BlogRepository $blogRepository)
    {
        $this->postRepository = $postRepository;
        $this->productRepository=$productRepository;
        $this->blogRepository = $blogRepository;
        $this->log = $log;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('read', $this->blogRepository->getModel());
        if(\request()->ajax()) {
            $blog = $this->blogRepository->getAll();
            return DataTables::of($blog)
                ->editColumn('action', function ($blog) {
                    $data = $blog;
                    $name = 'dashboard.blog';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'));
                })
                ->editColumn('blogger_pic', function ($blog) {
                    $url=asset($blog->getBloggerImage());
                    return '<img src='.$url.' border="0" width="40"  />';
//                        return '<img src="'.asset($news->getImage()).'" border="0" width="40" class="img-rounded" align="center" />';
                })
                ->editColumn('id', 'ID: {{$id}}')
//                    ->rawColumns(['banner_image'])
                ->rawColumns(['blogger_pic', 'action'])
                ->make(true);

        }
        return $this->view('web-site.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $this->blogRepository->getModel());
        $product=$this->productRepository->getAll();
        return $this->view('web-site.blog.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $createBlogRequest)
    {

        $this->authorize('create', $this->blogRepository->getModel());
        $data = $createBlogRequest->all();
        $product_name=$this->productRepository->findById($createBlogRequest->product_id);
        $data['book_name']=$product_name->name;
        $data['image']=$data['blogger_pic'];
        try {
            $news = $this->blogRepository->create($data);
            if($news == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Blog created successfully');
            return redirect()->route('dashboard.blog.index');
        }
        catch (\Exception $e) {
            $this->log->error('News create : '.$e->getMessage());
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
        $this->authorize('update', $this->blogRepository->getModel());
        $news = $this->blogRepository->findById($id);
        $product = $this->productRepository->getAll();
        return $this->view('web-site.blog.edit', compact('news','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $updateBlogRequest, $id)
    {
        $this->authorize('update', $this->blogRepository->getModel());
        $data = $updateBlogRequest->all();
        $product_name=$this->productRepository->findById($updateBlogRequest->product_id);
        $data['book_name']=$product_name->name;
        $data['image']=$data['blogger_pic'];
        try {
            $news = $this->blogRepository->update($data, $id);
            if($news == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Blog updated successfully');
            return redirect()->route('dashboard.blog.index');
        }
        catch (\Exception $e) {
            $this->log->error('Blog update : '.$e->getMessage());
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
        $this->authorize('delete', $this->blogRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->blogRepository->hardDelete($id);
            else
                $this->blogRepository->delete($id);
            session()->flash('success', 'Blog deleted successfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            $this->log->error('Blog delete : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
