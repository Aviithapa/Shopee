<?php


namespace App\Http\Controllers\Admin\WebSite;


use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Category\Requests\CreateCategoryRequest;
use App\Modules\Backend\Website\Category\Requests\UpdateCategoryRequest;
use App\Modules\Backend\Website\Semester\Repositories\SemesterRepository;
use App\Modules\Backend\Website\Semester\Requests\CreateSemesterRequest;
use App\Modules\Backend\Website\Semester\Requests\UpdateSemesterRequest;
use Illuminate\Contracts\Logging\Log;
use Yajra\DataTables\Facades\DataTables;

class SemesterController extends BaseController
{
    private $categoryRepository, $log;
    /**
     * CategoryController constructor.
     * @param SemesterRepository $semesterRepository
     * @param Log $log
     */
    public function __construct(Log $log,SemesterRepository $semesterRepository )
    {
        $this->semesterRepository = $semesterRepository;
        $this->log = $log;
        parent::__construct();
    }


    public function index()
    {
        $this->authorize('read', $this->semesterRepository->getAll());
        if(\request()->ajax()) {
            $posts = $this->semesterRepository->getAll();
            return DataTables::of($posts)
                ->addColumn('action', function ($post) {
                    $data = $post;
                    $name = 'dashboard.semester';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web-site.semester.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $this->semesterRepository->getModel());
        return $this->view('web-site.semester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSemesterRequest $createSemesterRequest)
    {
        $this->authorize('create', $this->semesterRepository->getModel());
        $data = $createSemesterRequest->all();
        try {
            $post = $this->semesterRepository->create($data);
            if($post == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Semester added successfully');
            return redirect()->route('dashboard.semester.index');
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
        $this->authorize('update', $this->semesterRepository->getModel());
        $semester = $this->semesterRepository->findById($id);
        return $this->view('web-site.semester.edit', compact('semester'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSemesterRequest $updateSemesterRequest, $id)
    {
        $this->authorize('update', $this->semesterRepository->getModel());
        $data = $updateSemesterRequest->all();
        try {
            $category = $this->semesterRepository->update($data, $id);
            if($category == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Semester updated successfully');
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
        $this->authorize('delete', $this->semesterRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->semesterRepository->hardDelete($id);
            else
                $this->semesterRepository->delete($id);
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
