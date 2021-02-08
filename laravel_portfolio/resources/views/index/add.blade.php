@extends('layouts.app');

@section('title', 'Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="/index/add" method="post">
    <table>
    @csrf
    <tr><th>name: </th><td><input type="text" name="name">
        </td></tr>
    <tr><th>quantity: </th><td><input type="text" name="quantity">
        </td></tr>
    <tr><th>unit: </th><td><input type="text" name="unit">
        </td></tr>
    </table>
    </form>
    
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
