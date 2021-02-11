@extends('layouts.app')

@section('title', 'Food.index')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <!--<form action="/food/edit" method="get"> -->

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
    </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
