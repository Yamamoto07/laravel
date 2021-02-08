@extends('layouts.app')

@section('title', 'Food.Add')

@sextion('menubar')
    @parent
    新規作成ページ
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
    <form action="/food/add" method="post">
    <table>
        @csrf
        <tr><th>name: </th><td><input type="text" name="name"
            value="{{old('name')}}"></td></tr>
        <tr><th>quantity: </th><td><input type="number" name="quantity"
            value="{{old('quantity')}}"></td></tr>
        <tr><th>unit: </th><td><input type="text" name="unit"
            value="{{old('unit')}}"></td></tr>
        <tr><th></th><td><input type="submit"
            value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
