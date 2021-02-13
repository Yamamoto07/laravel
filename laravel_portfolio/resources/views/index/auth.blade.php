@extends('layouts.foodapp')

@section('title', 'ユーザ認証')

@section('menubar')
   @parent
   ユーザー認証ページ
@endsection

@section('content')
<p>{{$message}}</p>
   <form action="/index/auth" method="post">
   <table>
      @csrf
      <tr><th>メールアドレス: </th><td><input type="text"
	     name="email"></td></tr>
      <tr><th>パスワード: </th><td><input type="password"
             name="password"></td></tr>
      <tr><th></th><td><input type="submit"
             value="送信"></td></tr>
   </table>
   <button class="btn btn-success">
      <a href="{{route('login.guest')}}" class="text-white">
         ゲストログイン
      </a>
   </button>
   </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
