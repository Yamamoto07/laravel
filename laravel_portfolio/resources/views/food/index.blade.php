@extends('layouts.foodapp')

@section('title', 'Food.index')

@section('menubar')
    @parent
@endsection

@section('content')
    <!--<form action="/food/edit" method="get"> -->
<h1>食材一覧</h1>
    <table align="center" >
    <tr><th>食材名</th><th>数量</th><th>その他</th></tr>
    @foreach ($items as $item)
        <tr>
             <td>{{$item->name}}</td>
	     <td>{{$item->quantity}}{{$item->unit}}</td>
	     <td><a href="{{route('food_edit')}}?id={{$item->id}}">変更</a>
                 <a href="{{route('food_delete')}}?id={{$item->id}}">削除</a></td>

        </tr>
    @endforeach
    </table>
    {{$items->links()}}
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
