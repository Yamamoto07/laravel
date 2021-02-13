@extends('layouts.foodapp')

@section('title', 'Food.find')

@section('menubar')
    @parent
    <a href="#">検索ページ</a>
@endsection

@section('content')
    <form action="/food/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
    @if (isset($item))
    <table align="center">
    <tr><th>Name</th><th>Quantity</th><th>unit</th></tr>
        <tr>
             <td>{{$item->name}}</td>
             <td>{{$item->quantity}}{{$item->unit}}</td>
        <tr>
    </table>
    @endif
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
