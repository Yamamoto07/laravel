@extends('layouts.default')

@section('title', 'Add')

@section('menubar')
   @parent
   新規作成ページ
@endsection

@section('content')
   @if (count($errors) > 0)
   <div>
         <ul>
              @foreach ($errors->all() as $error)
                  </li>・{{$error}}<br></li>
              @endforeach
         </ul>
   </div>
   @endif
   <form action="/food/add" method="post">
   <table>
      @csrf
      <tr><th>名前：</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

      <tr><th>数量：</th><td><input type="text" name="quantity" value="{{old('quantity')}}"></td></tr>
      <tr><th>単位：</th><td><input type="text" name="unit" value="{{old('unit')}}"></td></tr>
      <tr><th>賞味期限：</th><td><input type="text" name="limit" value="{{old('limit')}}"></td></tr>
      <tr><th></th><td><input type="submit" value="追加"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
