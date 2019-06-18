<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	function authenticated(Request $request, $user)
    {
		/* funkcje tutaj się znajdujące służą do pobierania ostatniego czasu logowania się użytkownika oraz jego adresu IP */
        $user->last_visit = Carbon::now()->toDateTimeString();
        $user->last_login_ip = $request->getClientIp(); // może nie działać bo działamy na lokalhoście
        $user->save();
    }
	
	public function logout(Request $request) 
	{
			Auth::logout();
			return redirect('/login');
	}
}
