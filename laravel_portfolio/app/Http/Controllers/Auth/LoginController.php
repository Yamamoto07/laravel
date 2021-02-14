<?php

namespace App\Http\Controllers\Auth;

use App\Models\User; //追加
use Illuminate\Support\Facades\Auth; //追加
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

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

    // ゲストユーザー用のユーザーIDを定数として定義
    private const GUEST_USER_ID = 1;

    // ゲストログイン処理
    public function guestLogin()
    {
        // id=1のゲストユーザー情報がDBに存在すれば、ゲストログインする
	if (Auth::loginUsingId(self::GUEST_USER_ID)) {
	    $user = Auth::user();
            $items = DB::table('food')->get();
	    $param = ['items' => $items, 'user' => $user];
	    return view('index.index', $param, ['message' => 'ゲストログイン中']);
	} else {
	    $msg = 'ログインに失敗しました。';
	}

	return view('index.auth', ['message' => $msg]);
    }

   // ゲストログアウト処理
   public function guestLogout()
   {
       Auth::logout();
       return redirect();
   }
}
