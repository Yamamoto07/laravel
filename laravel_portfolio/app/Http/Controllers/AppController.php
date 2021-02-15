<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index(request $request)
    {
	$user = Auth::user();
	$items = DB::table('food');
	// $user,$itemsを配列$paramに格納してviewに渡す。
	$param = ['items' => $items, 'user' => $user];
        return view('index.index', $param, ['message' => 'Hello!']);
    }

    public function post(request $request)
    {
        return view('index.index', ['items' => $items]);
    }

    public function getAuth(Request $request)
    {
	 $param = ['message' => 'ログインしてください。'];
	 return view('index.auth', $param);
    }

    public function postAuth(Request $request)
    {
	$email = $request->email;
	$password = $request->password;;
	if (Auth::attempt(['email' => $email,
		  'password' => $password])) {
            $user = Auth::user();
	    $items = DB::table('food')->get();
	    $param = ['items' => $items, 'user' => $user];
	    return view('index.index', $param, ['message' => 'ログイン中']);
	} else {
            $msg = 'メールアドレスとパスワードを入力してください。';
	}
	return view('index.auth', ['message' => $msg]);
    }
}
