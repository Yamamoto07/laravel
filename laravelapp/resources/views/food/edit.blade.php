@extends('layouts.app')

@section('title', 'Edit')

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
   <form action="/food/edit" method="post">
   <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>名前：</th><td><input type="text" name="name"
            value="{{$form->name}}"></td></tr>
        <tr><th>数量：</th><td><input type="number" name="quantity"
            value="{{$form->quantity}}"></td></tr>
        <tr><th>単位：</th><td><input type="text" name="unit"
            value="{{$form->unit}}"></td></tr>
	<tr><th>賞味期限：</th><td><input type="text" name="limit"
            value="{{$form->limit}}"></td></tr>
        <tr><th></th><td><input type="submit"
　　　　　　value="変更"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
