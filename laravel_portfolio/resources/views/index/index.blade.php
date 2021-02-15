@extends('layouts.foodapp')

@section('title', '食材一覧')

@section('content')
    <p class="user-name">ユーザー＝{{$message}}</p>
    <h2>@yield('title')</h2>
    <table id="food-index" align="center">
    <tr><th>名前</th><th>数量</th></tr>
    @foreach ($items as $item)
         <tr>
              <td>{{$item->name}}</td>
              <td>{{$item->quantity}}{{$item->unit}}</td>
         </tr>
    @endforeach
    </table>
    <button class="btn btn-success">
      <a href="/food" class="text-white">編集画面へ</a>
    </button>  
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
