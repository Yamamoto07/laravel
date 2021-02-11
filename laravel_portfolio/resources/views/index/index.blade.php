@extends('layouts.app')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>controller value<br>'message' = {{$message}}</p>
    <p>viewcomposer value<br>'view_message' = {{$view_message}}</p>
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
