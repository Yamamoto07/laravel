@extends('layouts.foodapp')

@section('title', 'Food.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <p>ERROR</p>
        <p>入力に問題があります。再入力してください。</p> 
    </div>
    @endif
    <form action="/food/add" method="post">
    <table align="center">
        @csrf
        @error('name')
        <p>・{{$message}}</p>
        @enderror
        <tr><th>食材名: </th><td><input type="text" name="name"
            value="{{old('name')}}"></td></tr>
	@error('quantity')
        <p>・{{$message}}</p>
        @enderror
        <tr><th>量: </th><td><input type="number" name="quantity"
            value="{{old('quantity')}}"></td></tr>
        @error('unit')
	<p>・{{$message}}</p>
        @enderror
        <tr><th>単位: </th><td><input type="text" name="unit"
	    value="{{old('unit')}}"></td></tr>
        <tr><th></th><td><input type="submit"
            value="追加"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
