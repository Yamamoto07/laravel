@extends('layouts.app')

@section('title', 'food')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
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
