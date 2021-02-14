@extends('layouts.foodapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    @if (Auth::check())
    <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
    <p>ログイン<a href="#">ログイン</a>
    <p>登録<a href="#">登録</a></p>
    @else
    <p>※ログインしていません。(<a href="{{route('login_guest')}}">ログイン</a>|
        <a href="#">ユーザー登録</a>)</p>
    @endif
    <p>controller value<br>'message' = {{$message}}</p>
    <p>viewcomposer value<br>'view_message' = {{$view_message}}</p>
    <table align="center">
    <tr><th>Name</th><th>Quantity</th><th>Unit</th></tr>
    @foreach ($items as $item)
         <tr>
              <td>{{$item->name}}</td>
              <td>{{$item->quantity}}</td>
              <td>{{$item->unit}}</td>
         </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
