<?php


namespace App\Http\Controllers\Admin\WebSite;

use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Website\Faculty\Repositories\FacultyRepository;
use App\Modules\Backend\Website\Faculty\Requests\CreateFacultyRequest;
use App\Modules\Backend\Website\Faculty\Requests\UpdateFacultyRequest;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class FacultyController extends BaseController
{
    private $facultyRepository, $log;
    /**
     * CategoryController constructor.
     * @param FacultyRepository $facultyRepository
     * @param Log $log
     */
    public function __construct(Log $log,FacultyRepository $facultyRepository )
    {
        $this->facultyRepository = $facultyRepository;
        $this->log = $log;
        parent::__construct();
    }


    public function index()
    {
        $this->authorize('read', $this->facultyRepository->getAll());
        if(\request()->ajax()) {
            $posts = $this->facultyRepository->getAll();
            return DataTables::of($posts)
                ->addColumn('action', function ($post) {
                    $data = $post;
                    $name = 'dashboard.faculty';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web-site.faculty.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $this->facultyRepository->getModel());
        return $this->view('web-site.faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFacultyRequest $createFacultyRequest)
    {
        $this->authorize('create', $this->facultyRepository->getModel());
        $data = $createFacultyRequest->all();
        try {
            $post = $this->facultyRepository->create($data);
            if($post == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Faculty added successfully');
            return redirect()->route('dashboard.faculty.index');
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
        $this->authorize('update', $this->facultyRepository->getModel());
        $faculty = $this->facultyRepository->findById($id);
        return $this->view('web-site.faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacultyRequest $updateFacultyRequest, $id)
    {
        $this->authorize('update', $this->facultyRepository->getModel());
        $data = $updateFacultyRequest->all();
        try {
            $faculty = $this->facultyRepository->update($data, $id);
            if($faculty == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Faculty updated successfully');
            return redirect()->route('dashboard.faculty.index');
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
        $this->authorize('delete', $this->facultyRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->facultyRepository->hardDelete($id);
            else
                $this->facultyRepository->delete($id);
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
