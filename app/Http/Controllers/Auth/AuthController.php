<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;



class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;
    protected $user;


    public function __construct(User $user){



        $this->user = $user;
        $this->beforeFilter('csrf', ['on'=>['post']]);
        $this->beforeFilter('guest', ['except'=>['getLogout']]);
    }


    public function getRegister(){
        return view('registro.registro');
    }

    public function postRegister(RegisterRequest $request){
        // custom code goes here
        $this->auth->login($this->user);
        return redirect('/series');

    }

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        if($this->auth->attempt($request->only('email','password'))){
            return redirect('/series');
        }
        return redirect('/login')->withErrors(['email'=>'Las credenciales utilizadas son incorrectas.']);

    }

    public function getLogout()
    {
        $this->auth->logout();
        return redirect('/');
    }



}
