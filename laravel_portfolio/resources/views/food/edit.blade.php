@extends('layouts.foodapp')

@section('title', '食材変更')

@section('content')
    <div class="backpage">
      <a href="./">戻る</a>
    </div>
    <h4>@yield('title')</h4>
    @if (count($errors) > 0)
    <div class="error-message">
        <p class="error-alert">ERROR</p>
        <p>入力に問題があります。再入力してください。</p>
    </div>
    @endif
    <form action="/food/edit" method="post">
    <table align="center">
        @csrf <!-- HTMLを直接記載するときは、@csrfを記載する。 -->
	<input type="hidden" name="id" value="{{$form->id}}">
        @error('name')
        <p class="error-message">・{{$message}}</p>
        @enderror
	<tr><th>食材名: </th><td><input type="text" name="name"
	    value="{{$form->name}}"</td></tr>
        @error('quantity')
	<p class="error-message">・{{$message}}</p>
        @enderror
	<tr><th>量： </th><td><input type="number" name="quantity"
	    value="{{$form->quantity}}"></td></tr>
        @error('unit')
	<p class="error-message">・{{$message}}</p>
        @enderror
	<tr><th>単位: </th><td><input type="text" name="unit"
            value="{{$form->unit}}"></td></tr>
        <tr><th></th><td><input type="submit" class="btn btn-success"
            value="変更"></td></tr>
    </table>
    </form>

@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
