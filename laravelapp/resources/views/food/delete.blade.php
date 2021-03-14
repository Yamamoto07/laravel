@extends('layouts.default')

@section('title', '食材削除')

@section('content')
    <div id="btn-back">
        <button type="button" id="btn-back" class="btn btn-secondary">
            <a href="./" class="text-white">←食材一覧に戻る</a>
        </button>
    </div>
    <h1>食材削除</h1>
    @if (count($errors) > 0)
    <div class="error-messages">
          <ul>
               @foreach ($errors->all() as $error)
                   <li>・{{$error}}<br></li>
               @endforeach
          </ul>
    </div>
    @endif
    <form action="{{route('food_delete')}}" method="post">
    <table align="center">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
             <tr><th>食材名</th><td>{{$form->name}}</td></tr>
             <tr><th>数量</th><td>{{$form->quantity}}{{$form->unit}}</td></tr>
	     <tr><th>賞味期限</th><td>{{$form->limit}}</td></tr>
	     <tr><th></th><td><p class="delete-message">本当に削除しますか?
                 <br>削除すると復元できません。</p>
	<input type="submit" value="削除" class="btn btn-danger"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
