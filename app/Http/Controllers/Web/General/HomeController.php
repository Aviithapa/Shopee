<?php

namespace App\Http\Controllers\Web\General;

use App\Http\Controllers\Admin\WebSite\FacultyController;
use App\Http\Controllers\Admin\WebSite\ProductController;
use App\Http\Controllers\Web\BaseController;
use App\Models\Auth\Role;
use App\Models\Website\Cart;
use App\Models\Website\Contact;
use App\Models\Website\Donation;
use App\Models\Website\GetTouch;
use App\Models\Website\Help;
use App\Models\Website\Order;
use App\Models\Website\OrderItem;
use App\Models\Website\Product;
use App\Models\Website\StoreRequestQuote;
use App\Modules\Backend\Authentication\Role\Repositories\RoleRepository;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Countries\Country\Repositories\CountryRepository;
use App\Modules\Backend\Disciplines\Discipline\Repositories\DisciplineRepository;
use App\Modules\Backend\Levels\Level\Repositories\LevelRepository;
use App\Modules\Backend\Schools\School\Repositories\SchoolRepository;
use App\Modules\Backend\Schools\SchoolProgram\Repositories\SchoolProgramRepository;
use App\Modules\Backend\Website\Cart\Repositories\CartRepository;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Donation\Repositories\DonationRepository;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use App\Modules\Backend\Website\Faculty\Repositories\FacultyRepository;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use App\Modules\Backend\Website\Semester\Repositories\SemesterRepository;
use App\Modules\Frontend\Website\Slider\Repositories\SliderRepository;
use App\Save;
use http\Exception\UnexpectedValueException;
use http\Message\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use PhpParser\Node\Expr\PostDec;
use Auth;
use Session;
use Models;


class HomeController extends BaseController
{
    private $sliderRepository, $view_data, $postRepository,$semesterRepository,$productRepository,$cartRepository,$facultyRepository;
    private $roleRepository;
    private $userRepository;
    private $request;

    public function __construct(SliderRepository $sliderRepository,
                                PostRepository $postRepository,
                                RoleRepository $roleRepository,
                                UserRepository $userRepository,
                                Request $request,FacultyRepository $facultyRepository,SemesterRepository $semesterRepository,  ProductRepository $productRepository,CartRepository $cartRepository)
    {
        $this->sliderRepository = $sliderRepository;
        $this->postRepository = $postRepository;
        $this->roleRepository = $roleRepository;
        $this->userRepository = $userRepository;
        $this->facultyRepository= $facultyRepository;
        $this->productRepository= $productRepository;
        $this->cartRepository=$cartRepository;
        $this->semesterRepository=$semesterRepository;
        $this->request = $request;

        parent::__construct();
    }

    public function index()
    {
        return view('web.pages.index');
    }

    public function resetPasswordWithCode($code)
    {
        $isUser = false;
        if ($code === '' && $code === null) {
            $isUser = false;
        }
        $user = $this->userRepository->findByFirst('password_change_code', $code, '=');
        if ($user) {
            $isUser = true;
        }

        return view('auth.changePassword', compact('user', 'isUser', 'code'));

    }

    public function resetPasswordStore()
    {
        try {
            $user = $this->userRepository->findByFirst('password_change_code', $this->request->code, '=');
            $data['password'] = bcrypt($this->request->password);
            $userData = $this->userRepository->update($data, $user->id);
//            $this->sendResetLinkEmail($request);
            session()->flash('success', 'New password has been save successfully.Please login with your credentials');
            return redirect()->route('login');

        } catch (\Exception $e) {
//            $this->log->error('User update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }


    }


    public function slug($slug = null, Request $request)
    {
        $slug = $slug ? $slug : 'index';
        $this->view_data['pageContent'] = $this->postRepository->findBySlug($slug, false);
        $this->view_data['authUser']=Auth::User();
//        $this->view_data['categories'] = $this->categoryRepository->getModel();
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'web/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':
                    $this->view_data['banners'] = $this->postRepository->findBy('type', 'homepage_banner', '=',false,2);
                    $this->view_data['banner'] = $this->postRepository->findById(123);
                    $this->view_data['add'] = $this->postRepository->findById(125);
                    $this->view_data['add1'] = $this->postRepository->findById(126);
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    $this->view_data['products'] =Product::paginate(6);
                    $this->view_data['loksewa'] =$this->productRepository->findBy('category','loksewa-examination','=',true,6);
                    $this->view_data['coursebook'] =$this->productRepository->findBy('category','coursebook','=',true,6);
                    $this->view_data['questionbankandsolution'] =$this->productRepository->findBy('category','question-bank-and-solution','=',true,6);
                    $this->view_data['question'] = $this->postRepository->findById(135);
                    $this->view_data['course'] = $this->postRepository->findById(136);
                    $this->view_data['entrance'] = $this->postRepository->findById(137);
                    $this->view_data['second'] = $this->postRepository->findById(138);
                     break;
                case 'catalog':
                    $this->view_data['products'] =Product::paginate(6);
                    $this->view_data['faculty'] =$this->facultyRepository->getAll();
                    $this->view_data['semester'] =$this->semesterRepository->getAll();
                    break;
                case 'productlist':
                    $this->view_data['products'] =Product::paginate(6);
                    break;
                case 'about':
                    $this->view_data['question'] = $this->postRepository->findById(135);
                    $this->view_data['course'] = $this->postRepository->findById(136);
                    $this->view_data['entrance'] = $this->postRepository->findById(137);
                    $this->view_data['second'] = $this->postRepository->findById(138);
                    $this->view_data['aboutBanner'] = $this->postRepository->findById(127);
                    $this->view_data['dipesh'] = $this->postRepository->findById(130);
                    $this->view_data['abhishek'] = $this->postRepository->findById(131);
                    $this->view_data['hemanti'] = $this->postRepository->findById(132);
                    $this->view_data['tilak'] = $this->postRepository->findById(133);
                    $this->view_data['binaya'] = $this->postRepository->findById(134);
                    break;
                case 'events':
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    break;
                case 'blog':
                    $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=',false,4);
                    $this->view_data['blog']=$this->postRepository->findById(5);
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    break;
                case 'contact':
                    $this->view_data['contactBanner'] = $this->postRepository->findById(128);
                    break;
                case 'privacy':
                    $this->view_data['privacy'] = $this->postRepository->findById(129);
                    break;
                case 'termsandcondition':
                    break;
                case 'secondhandbookcatalog':
                    $this->view_data['books'] =$this->productRepository->findBy('category','second-hand-book','=',true,18);
                    break;
                case 'productDetails':
                $this->view_data['company_info'] = $this->postRepository->findById(2);
                $this->view_data['testimonials'] = $this->postRepository->findBy('type', 'testimonial', '=');
                $this->view_data['services'] = $this->postRepository->findBy('type', 'services', '=', false, 6);
                $this->view_data['Subscribe'] = $this->postRepository->findById(9);
                break;

                case 'donation':
                    $this->view_data['Subscribe'] = $this->postRepository->findById(9);

                    break;
            }
                    return view('web.pages.' . $slug, $this->view_data);
        }
        // 3. No page exist (404)
        return view('web.pages.404', $this->view_data);

    }
    public function UniversityCatalog($slug=null, Request $request){
        $slug = $slug ? $slug : 'TU';
        $this->view_data['faculty'] =$this->facultyRepository->getAll();
        $this->view_data['semester'] =$this->semesterRepository->getAll();
        $this->view_data['products']=$this->productRepository->findBy('University',$slug,'=',true,12);
        return view('web.pages.catalog.universityCatalog' , $this->view_data);
    }
    public function publicationCatalog($slug=null, Request $request){
        $slug = $slug ? $slug : 'asmita';
        $this->view_data['faculty'] =$this->facultyRepository->getAll();
        $this->view_data['semester'] =$this->semesterRepository->getAll();
        $this->view_data['products']=$this->productRepository->findBy('publication',$slug,'=',true,12);
        return view('web.pages.catalog.faculty' , $this->view_data);
    }
    public function semesterCatalog($slug=null, Request $request){
        $slug = $slug ? $slug : 'First Semester';
        $this->view_data['faculty'] =$this->facultyRepository->getAll();
        $this->view_data['semester'] =$this->semesterRepository->getAll();
        $this->view_data['products']=$this->productRepository->findBy('semester',$slug,'=',true,12);
        return view('web.pages.catalog.semester' , $this->view_data);
    }
    public function facultyCatalog($slug=null, Request $request){
        $slug = $slug ? $slug : 'BBA';
        $this->view_data['faculty'] =$this->facultyRepository->getAll();
        $this->view_data['semester'] =$this->semesterRepository->getAll();
        $this->view_data['products']=$this->productRepository->findBy('faculty',$slug,'=',true,12);
        return view('web.pages.catalog.faculty' , $this->view_data);
    }

     public function productDetails($id=null, Request $request){
         $this->view_data['authUser']=Auth::User();
        $this->view_data['pageContent'] = $this->postRepository->findBySlug('/productDetails/'.$id, false);
         $this->view_data['product'] = $this->productRepository->findById($id);
         $this->view_data['related_product']=$this->productRepository->findBy('faculty',$this->view_data['product']->faculty,'=',false,6)
         ->where('id',"!=",$this->view_data['product']->id);
        return view('web.pages.productDetails' , $this->view_data);

    }
    public function singleProduct($slug = null, Request $request){
        $slug = $slug ? $slug : 'hello';
        $this->view_data['pageContent'] = $this->postRepository->findBySlug('/single-blog/'.$slug, false);
        $this->view_data['blog'] = $this->postRepository->findBy('slug', $slug, '=', false, 6);
        $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=', false, 3);
        return view('web.pages.single-blog' , $this->view_data);

    }
    public function donation($id,Request $request){
        $this->view_data['id']=$id;
        return view('web.pages.donation',$this->view_data);
    }
    public function Help(Request $request){
        try {
            $help = new Help();
            $help->name = $request->name;
            $help->phone = $request->phone;
            $help->email = $request->email;
            $help->problem = $request->problem;
            $help->message = $request->message;
            $help->save();
            session()->flash('success',"We will Contact you soon");
            return  redirect('/');


        }catch (\UnexpectedValueException $e){

        }
    }
    public function Order(Request $request){
        try{
            $data=new Order();
            $data->name=$request->name;
            $data->address=$request->address;
            $data->collage_name=$request->collage_name;
            $data->collage_address=$request->collage_address;
            $data->phone_number=$request->phone_number;
            $data->email=auth()->user()->email;
            $data['user_id']=auth()->user()->id;
            $data['grand_total']=getCartTotalPrice();
            $data['item_count']=getTotalQuanity();
            $data['status'] = "received";
            $data->save();
            dd("you are here");
            if ($data) {

                $items = Cart::all();

                foreach ($items as $item)
                {
                    $orderItem = new OrderItem([
                        'order_id'      => $data['id'],
                        'product_id'    =>  $item->product_id,
                        'quantity'      =>  $item->quantity,
                        'price'         =>  "10"
                    ]);

                    $data->items()->save($orderItem);

                    session()->flash('success', 'User added successfully');
                    return view('web.pages.success',compact('events'));
                }
            }

        }catch (\Exception $ex){

        }
    }
    public function User(Request $request,$id=null){
        try {
            $data=$request->all();
            $role = Role::where('name', 'donor')->first();
            $data['type']='donor';
            $data['password'] = bcrypt($data['phoneNumber']);
            $user=$this->userRepository->create($data);
            $user->attachRole($role);

            $donation=$request->all();
            $donation['user_id']=$user['id'];
            $this->donationRepository->create($donation);
            $events=$this->eventRepository->findById($id);
            if($user == false)
            {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'User added successfully');
            return view('web.pages.success',compact('events'));

        }catch (\UnexpectedValueException $e){

        }
    }

    public function cart(){
        $this->view_data['cart'] = $this->cartRepository->getAll()->where('user_id','=',Auth::user()->id);
        return view('web.pages.cart' , $this->view_data);
    }
    public function addtocart(Request $request, $id){
        $mac_address = exec('getmac');
        $mac = strtok($mac_address, ' ');
        $available_quantity = Product::find($request->id)->quantity;
        $cart_info = Cart::where('mac', $mac)->where('product_id', $request->id)->first();

        if($cart_info)
        {
            //here old_cart_quantity holo cart table  product ta already house of books quantity add hos ache
            $old_cart_quantity = $cart_info->quantity;
        }
        else
        {
            $old_cart_quantity = 0;
        }


        //3rd part of coding-33333333333
        if($available_quantity >= ($request->quantity + $old_cart_quantity))
        {
            //first part coding-111111111111
                $data=new Cart();
                $mac_address = exec('getmac');
                $mac = strtok($mac_address, ' ');
                $user= Auth::user()->id;
                $product=$this->productRepository->findById($id);
                $data->product_name=$product->name;
                $data->product_price=$product->price;
                $data->product_id=$product->id;
                $data->quantity="1";
                $data->user_id=$user;
                $data->mac=$mac;
                $data->save();
        }
        else
        {
            $short_amount = $request->quantity - $available_quantity;
            session()->flash('danger', 'not available quantity, shortage amount is '.$short_amount);
            return redirect()->back();
        };
        return redirect()->back()->with('success','Product Added to Cart');
    }

    public function Contact(Request $req){
        try {
            $contact = new Contact();
            $contact->name = $req->name;
            $contact->email = $req->email;
            $contact->phoneNumber = $req->phoneNumber;
            $contact->address = $req->address;
            $contact->message = $req->message;
            $contact->save();
            return view('web.pages.contact');

        } catch (UnexpectedValueException $e) {
            dd($e);
        }

    }

//    public function sendContactMail($isfeedbacksends){
//        try {
//            $to_name = "House of Books";
//            $to_email = "houseofbooksnepal@gmail.com";
//            $from_name = $isfeedbacksends['name'];
//            $feedback_message = $isfeedbacksends['message'];
//            $from_email = $isfeedbacksends['email'];
//
//            $data = array('name' => $from_name, "body" => $feedback_message);
//dd($);
//            Mail::send('emails.feedback-email', $data, function ($message) use ($from_email, $to_name, $to_email, $from_name) {
//                $message->to($to_email, $to_name)->subject('Feedback From');
//                $message->from($from_email, $from_name);
//            });
//        }catch(\Exception $e){
//            session()->flash('danger','Oops! Somethings went wrong');
//            return redirect()->back();
//        }
//
//    }
}
