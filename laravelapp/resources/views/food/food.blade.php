@extends('layouts.default')

@section('title', '食材一覧')

@section('content')
    <h1>食材一覧</h1>
    <p id="user-name">ユーザー名：{{$user->name . ' (' . $user->email . ')'}}</p>
    <button id="btn-add" class="btn btn-primary">
        <a href="{{route('food_add')}}" class="text-white">食材追加</a>
    </button>
    <table align="center">
    <tr><th>食材名</th><th>数量</th><th>賞味期限</th><th>その他</th></tr>
        @foreach ($items as $item)
        <tr>
             <td>{{$item->name}}</td>
             <td>{{$item->quantity}}{{$item->unit}}</td>
	     <td>{{$item->limit}}</td>
             <td><a href="{{route('food_edit')}}?id={{$item->id}}" class="btn btn-success">変更</a>
                 <a href="{{route('food_delete')}}?id={{$item->id}}" class="btn btn-danger">削除</a></td>
	</tr>
	@endforeach
    </table>
    {{$items->links()}}
@endsection

@section('footer')
<hr>
copyright 2021 yamamoto.
@endsection
