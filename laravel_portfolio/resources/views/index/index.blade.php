@extends('layouts.app')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table align="center">
    <tr><th>Name</th><th>Quantity</th><th>Unit</th></tr>
    @foreach ($items as $item)
         <tr>
              <td>{{$item->name}}</td>
              <td>{{$item->quantity}}</td>
              <td>{{$item->unit}}</td>
         </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
