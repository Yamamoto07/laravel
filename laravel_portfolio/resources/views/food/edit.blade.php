@extends('layouts.app')

@section('title', 'Food.Edit')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <p>ERROR</p>
        <p>入力に問題があります。再入力してください。</p>
    </div>
    @endif
    <form action="/food/edit" method="post">
    <table>
        @csrf <!-- HTMLを直接記載するときは、@csrfを記載する。 -->
	<input type="hidden" name="id" value="{{$form->id}}">
        @error('name')
        <p>・{{$message}}</p>
        @enderror
	<tr><th>食材名: </th><td><input type="text" name="name"
	    value="{{$form->name}}"</td></tr>
        @error('quantity')
	<p>・{{$message}}</p>
        @enderror
	<tr><th>量： </th><td><input type="number" name="quantity"
	    value="{{$form->quantity}}"></td></tr>
        @error('unit')
	<p>・{{$message}}</p>
        @enderror
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
