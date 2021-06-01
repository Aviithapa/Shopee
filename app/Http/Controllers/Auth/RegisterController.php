<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\MailController;
use App\Models\Auth\Role;
use App\Models\Auth\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register/success';

    /**
     * RegisterController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Show the application registration form.
     *
     * @param $role
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm($role)
    {
        $authUser=Auth::User();
        return view('auth.register', compact('role','authUser'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,deleted_at',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Auth\User
     */
    protected function create(array $data)
    {
        $role = Role::where('name', $data['role'])->first();
        $data['password_reference'] = $data['password'];
        $data['password'] = bcrypt($data['password']);
        $user =  User::create($data);
        $user->attachRole($role);
        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerNew($role, Request $request)
    {
        $this->validator($request->all())->validate();
        $data = $request->all();
        $data['role'] = $role;
        $data['verification_code'] =sha1(time());
        event(new Registered($user = $this->create($data)));

        if($user != null){
            MailController::sendSignupEmail($data["name"], $data['email'], $data['verification_code']);
            return redirect()->back()->with(session()->flash('alert-success', 'Your account has been created. Please check email for verification link.'));
        }

        return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong!'));
    }

    public function verifyUser(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if($user != null){
            $user->status = 'active';
            $user->save();
            return redirect()->route('login')->with(session()->flash('alert-success', 'Your account is verified. Please login!'));
        }

        return redirect()->route('login')->with(session()->flash('alert-danger', 'Invalid verification code!'));
    }

    public function success()
    {
        return redirect()->intended('/');
    }
}
