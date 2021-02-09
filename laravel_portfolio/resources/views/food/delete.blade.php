@extends('layouts.app')

@section('title', 'Food.Delete')

@section('menubar')
    @parent
    削除ページ
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
    <form action="{{route('food_delete')}}" method="post">
    <table align="center">
    @csrf <!-- HTMLを直接記載するときは、@csrfを記載する。 -->
        <input type="hidden" name="id" value="{{$form->id}}">
	     <tr><th>食材名: </th><td>{{$form->name}}</td></tr>
             <tr><th>数量： </th><td>{{$form->quantity}}{{$form->unit}}</td></tr>
	     <tr><th></th><td><p>本当に削除しますか?</p>
		  <input type="submit" value="はい"></td>
		  <a href="./">戻る</a>
             </tr>
    </table>
    </form>

@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
