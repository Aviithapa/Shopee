<?php


namespace App\Http\Controllers\Admin\WebSite;


use App\Http\Controllers\Admin\BaseController;
use App\Models\Website\Category;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Category\Requests\CreateCategoryRequest;
use App\Modules\Backend\Website\Category\Requests\UpdateCategoryRequest;
use Illuminate\Contracts\Logging\Log;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends BaseController
{
    private $categoryRepository, $log;
    /**
     * CategoryController constructor.
     * @param CategoryRepository $categoryRepository
     * @param Log $log
     */
    public function __construct(Log $log,CategoryRepository $categoryRepository )
    {
        $this->categoryRepository = $categoryRepository;
        $this->log = $log;
        parent::__construct();
    }


    public function index()
    {
        $this->authorize('read', $this->categoryRepository->getAll());
        if(\request()->ajax()) {
            $posts = $this->categoryRepository->getAll();
            return DataTables::of($posts)
                ->addColumn('action', function ($post) {
                    $data = $post;
                    $name = 'dashboard.category';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web-site.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $this->categoryRepository->getModel());
        return $this->view('web-site.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $createCategoryRequest)
    {
        $this->authorize('create', $this->categoryRepository->getModel());
        $data = $createCategoryRequest->all();
        try {
            $post = $this->categoryRepository->create($data);
            if($post == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Category created successfully');
            return redirect()->route('dashboard.category.index');
        }
        catch (\Exception $e) {
            $this->log->error('Content create : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
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
        $this->authorize('update', $this->categoryRepository->getModel());
        $category = $this->categoryRepository->findById($id);
        return $this->view('web-site.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $updateCategoryRequest, $id)
    {
        $this->authorize('update', $this->categoryRepository->getModel());
        $slug=$this->categoryRepository->findById($id)['slug'];
        $data = $updateCategoryRequest->all();
        try {
            $category = $this->categoryRepository->update($data, $id);
            if($category == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Content updated successfully');
            return redirect()->route('dashboard.category.index');
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
        $this->authorize('delete', $this->categoryRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->categoryRepository->hardDelete($id);
            else
                $this->categoryRepository->delete($id);
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
