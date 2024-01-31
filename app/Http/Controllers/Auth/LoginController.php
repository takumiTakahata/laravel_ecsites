<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {

    // }

    protected function authenticated(Request $request, $user)
    {
        if ($user->admin_flag == 1) {
            return redirect()->route('admin.index'); // 管理者の場合のリダイレクト先
        } else {
            return redirect('/'); // 一般ユーザーの場合のリダイレクト先
        }
        $this->middleware('guest')->except('logout');
    }
}
