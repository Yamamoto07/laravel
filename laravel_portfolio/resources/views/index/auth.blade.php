@extends('layouts.foodapp')

@section('title', 'ユーザ認証')

@section('content')
<div id="login-error">
</div>
   <form id="login-form" action="auth" method="post">
   @csrf
   <div id="login-page">
     <div id="login-page-header">
       <p>ログイン</p>
     </div>
     <div id="login-email">
       <p>メールアドレス</p>
       <input type="text" name="email">
     </div>
     <div id="login-password">
       <p>パスワード</p>
       <input type="password" name="password">
     </div>
     <div class="login-botton">
       <button class="btn btn-primary">
         <a href="#" class="text-white">
           ログイン
         </a>
       </button>
       <button class="btn btn-success">
         <a href="{{route('login_guest')}}" class="text-white">
           ゲストログイン
         </a>
       </button>
     </div>
     <a class="login-register" href="#">ユーザー登録はこちら</a>
   </div>
   </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
