@extends('layouts.app')

@section('title', 'Food.Edit')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('food_update')}}" method="post">
    <table>
    @csrf <!-- HTMLを直接記載するときは、@csrfを記載する。 -->
        <input type="hidden" name="id" value="{{$form->id}}">
	<tr><th>食材名: </th><td><input type="text" name="name"
            value="{{$form->name}}"</td></tr>
	<tr><th>量： </th><td><input type="number" name="quantity"
            value="{{$form->quantity}}"></td></tr>
	<tr><th>単位: </th><td><input type="text" name="unit"
            value="{{$form->unit}}"></td></tr>
        <tr><th></th><td><input type="submit"
            value="変更"></td></tr>
        <a href="./">戻る</a>
    </table>
    </form>

@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
