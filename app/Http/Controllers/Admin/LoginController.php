<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function postAdminLogin (Request $request) {


        // echo "hhisss";
        // exit;


        $credential = ['email' => $request->email, 'password' => $request->password];

        //validator

        if (Auth()->guard('admin')->attempt($credential)) {
            $name = "Valravn";
            Mail::to('misajeed58@gmail.com')->send(new MyEmail($name));
            return view('/admin/admin-home');
        }
        else {
            return redirect('/admin')
                    ->withErrors(['errors', 'Admin Credential do not match'])
                    ->withInput();
        }
    }
}
