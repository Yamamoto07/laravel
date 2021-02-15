@extends('layouts.foodapp')

@section('title', '食材追加')

@section('content')
    <div class="backpage">
      <a href="./">戻る</a>
    </div>
    <h3>@yield('title')</h3>
    @if (count($errors) > 0)
    <div class="error-message">
	<p class="error-alert">ERROR</p>
        <p>入力に問題があります。再入力してください。</p> 
    </div>
    @endif
    <form action="/food/add" method="post">
    <table align="center">
        @csrf
        @error('name')
        <p class="error-message">・{{$message}}</p>
        @enderror
        <tr><th>食材名: </th><td><input type="text" name="name"
            value="{{old('name')}}"></td></tr>
	@error('quantity')
        <p class="error-message">・{{$message}}</p>
        @enderror
        <tr><th>量: </th><td><input type="number" name="quantity"
            value="{{old('quantity')}}"></td></tr>
        @error('unit')
	<p class="error-message">・{{$message}}</p>
        @enderror
        <tr><th>単位: </th><td><input type="text" name="unit"
	    value="{{old('unit')}}"></td></tr>
        <tr><th></th><td><input type="submit" class="btn btn-success"
            value="追加"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
