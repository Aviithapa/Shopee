<?php


namespace App\Http\Controllers\Admin\WebSite;


use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Contact\Repositories\ContactRepository;
use App\Modules\Backend\Website\Contact\Requests\UpdateContactRequest;
use App\Modules\Backend\Website\Product\Requests\CreateProductRequest;
use App\Modules\Backend\Website\Product\Requests\UpdateProductRequest;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends BaseController
{private  $log, $categoryRepository;
    private $commonView='web-site.contact.';
    private $commonMessage='Contact ';
    private $commonName='Contact ';
    private $commonRoute='dashboard.contact';
    private $viewData;

    /**
     * PermissionController constructor.
     * @param Log $log
     * @param ContactRepository $contactRepository
     */

    public function __construct(Log $log, ContactRepository $contactRepository)
    {
        $this->log = $log;
        $this->viewData['commonRoute']=$this->commonRoute;
        $this->viewData['commonView']='admin.'.$this->commonView;
        $this->viewData['commonName']=$this->commonName;
        $this->viewData['commonMessage']=$this->commonMessage;
        $this->contactRepository=$contactRepository;
        parent::__construct();
    }

    /**
     * View all entities
     * @return mixed
     */
    public function index()
    {
        if(\request()->ajax()) {
            $users = $this->contactRepository->getAll();
            return DataTables::of($users)
                ->addColumn('action', function ($user) {
                    $data = $user;
                    $name = 'dashboard.contact';
                    $show= true;
                    return $this->view('partials.common.action', compact('data', 'name', 'show'))->render();
                })

                ->editColumn('id', 'ID: {{$id}}')
                ->rawColumns(['voucher', 'action'])
                ->make(true);

        }

        return $this->view($this->commonView.'index',$this->viewData);
    }


    public function edit($id)
    {
        $feedback = $this->contactRepository->findById($id);
        return $this->view($this->commonView.'edit',$this->viewData,compact('feedback'));
    }


    public function update(UpdateContactRequest $updateContactRequest, $id)
    {

        $this->authorize('update', $this->contactRepository->getModel());
        try {
            $menu = $this->contactRepository->update($updateContactRequest->all(),$id);
            $isfeedbacksends=$this->contactRepository->getModel()->where('id','=',$id)->first();

            if($menu == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            return $this->sendFeedbackMail($isfeedbacksends);

        }
        catch (\Exception $e) {
            $this->log->error('Feedback has been send : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }
    public function sendFeedbackMail($isfeedbacksends){
        try {
            $to_name = "Abhishek";
            $to_email = $user['email'];
            $from_name = $isfeedbacksends['name'];

            $feedback_message = $isfeedbacksends['message'];
            $from_email = $isfeedbacksends['email'];

            $data = array('name' => $from_name, "body" => $feedback_message);

            Mail::send('emails.feedback-email', $data, function ($message) use ($from_email, $to_name, $to_email, $from_name) {
                $message->to($to_email, $to_name)->subject('Feedback From');
                $message->from($from_email, $from_name);
            });
            session()->flash('success', 'Mail has been send.');
            return redirect()->route($this->commonRoute . '.index');
        }catch(\Exception $e){
            $this->log->error('Mail has not send :'.$e->getMessage());
            session()->flash('danger','Oops! Somethings went wrong');
            return redirect()->back();
        }

    }


}
