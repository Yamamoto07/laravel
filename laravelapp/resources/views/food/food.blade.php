@extends('layouts.default')

@section('title', 'food')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
    @if (Auth::check())
    <p>USER：{{$user->name . ' (' . $user->email . ')'}}</p>
    @else
    <p>※ログインしていません。(<a href="/login">ログイン</a>|
        <a href="/register">登録</a>)</p>
    @endif
    <table>
    <tr><th>名前</th><th>数量</th><th>賞味期限</th></tr>
        @foreach ($items as $item)
        <tr>
             <td>{{$item->name}}</td>
             <td>{{$item->quantity}}{{$item->unit}}</td>
             <td>{{$item->limit}}</td>
	</tr>
	@endforeach
    </table>
    {{$items->links()}}
@endsection

@section('footer')
copyright 2021 yamamoto
@endsection
