@extends('layouts.foodapp')

@section('title', '食材編集')

@section('menubar')
    @parent
@endsection

@section('content')
    <div class="backpage">
      <a href="/index">戻る</a>
    </div>
    <h1>@yield('title')</h1>
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
    <button id="btn-add" class="btn btn-success">
      <a href="./add" class="text-white">
        食材追加
      </a>
    </button>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
