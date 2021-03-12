<?php

namespace App\Http\Controllers\Web\General;

use App\Http\Controllers\Admin\WebSite\ProductController;
use App\Http\Controllers\Web\BaseController;
use App\Models\Auth\Role;
use App\Models\Website\Cart;
use App\Models\Website\Donation;
use App\Models\Website\GetTouch;
use App\Models\Website\Help;
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
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
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
    private $sliderRepository, $view_data, $postRepository,$categoryRepository,$productRepository,$cartRepository;
    private $roleRepository;
    private $userRepository;
    private $request;

    public function __construct(SliderRepository $sliderRepository,
                                PostRepository $postRepository,
                                RoleRepository $roleRepository,
                                UserRepository $userRepository,
                                Request $request,CategoryRepository $categoryRepository,ProductRepository $productRepository,CartRepository $cartRepository)
    {
        $this->sliderRepository = $sliderRepository;
        $this->postRepository = $postRepository;
        $this->roleRepository = $roleRepository;
        $this->userRepository = $userRepository;
        $this->categoryRepository= $categoryRepository;
        $this->productRepository= $productRepository;
        $this->cartRepository=$cartRepository;
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
        $this->view_data['categories'] = $this->categoryRepository->getAll();
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'web/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':
                    $this->view_data['banners'] = $this->postRepository->findBy('type', 'homepage_banner', '=',false,2);
                    $this->view_data['categories'] = $this->categoryRepository->getAll();
                    $this->view_data['products'] = $this->productRepository->getAll();
                     $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=',false,4);
                    $this->view_data['blog']=$this->postRepository->findById(5);
                    break;
                case 'catalog':
                    $this->view_data['categories'] = $this->categoryRepository->getAll();
                    $this->view_data['products'] =Product::paginate(6);
                    break;

                case 'productlist':
                    $this->view_data['products'] =Product::paginate(6);
                    break;
                case 'about':
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    $this->view_data['testimonials'] = $this->postRepository->findById(4);

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
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    break;
                case 'productDetails':
                $this->view_data['company_info'] = $this->postRepository->findById(2);
                $this->view_data['testimonials'] = $this->postRepository->findBy('type', 'testimonial', '=');
                $this->view_data['services'] = $this->postRepository->findBy('type', 'services', '=', false, 6);
                $this->view_data['Subscribe'] = $this->postRepository->findById(9);
                break;
                case 'cart':
                    $this->view_data['cart'] = $this->cartRepository->getAll()->where('user_id','=',Auth::user()->id);
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

     public function productDetails($id=null, Request $request){
         $this->view_data['authUser']=Auth::User();
        $this->view_data['pageContent'] = $this->postRepository->findBySlug('/productDetails/'.$id, false);
         $this->view_data['product'] = $this->productRepository->findById($id);
         $this->view_data['related_product']=$this->productRepository->findBy('category',$this->view_data['product']->category,'=',false,6)
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
    public function addtocart(Request $request, $id){

        $mac_address = exec('getmac');
        $mac = strtok($mac_address, ' ');

        $available_quantity = Product::find($request->id)->quantity;
        $cart_info = Cart::where('mac', $mac)->where('product_id', $request->id)->first();

        //2nd part coding-2222222222
        if($cart_info)
        {
            //here old_cart_quantity holo cart table a oi product ta already koyta quantity add kora ache
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
            if($cart_info)
            {
                Cart::where('mac', $mac)->where('product_id', $request->id)->increment('quantity', $request->quantity);
            }
            else
            {
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
        }
        else
        {
            $short_amount = $request->quantity - $available_quantity;
            session()->flash('danger', 'not available quantity, shortage amount is '.$short_amount);
            return redirect()->back();
        }
        session()->flash('success', 'User added successfully');
        return redirect()->back();
    }

}
