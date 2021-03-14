@extends('layouts.default')

@section('title', '食材編集')

@section('content')
   <div id="btn-back">
       <button type="button" id="btn-back" class="btn btn-secondary">
           <a href="./" class="text-white">←食材一覧に戻る</a>
       </button>
   </div>
   <h1>食材編集</h1>
   @if (count($errors) > 0)
   <div class="error-messages">
         <ul>
              @foreach ($errors->all() as $error)
                  <li>・{{$error}}<br></li>
              @endforeach
         </ul>
   </div>
   @endif
   <form action="{{route('food_edit')}}" method="post">
   <table align="center">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>食材名</th><td><input type="text" name="name"
            value="{{$form->name}}"></td></tr>
        <tr><th>数量</th><td><input type="number" name="quantity"
            value="{{$form->quantity}}"></td></tr>
        <tr><th>単位</th><td><input type="text" name="unit"
            value="{{$form->unit}}"></td></tr>
	<tr><th>賞味期限<br>(記入例：2021/3/5)</th><td><input type="text" name="limit"
            value="{{$form->limit}}"></td></tr>
	<tr><th></th><td><input type="submit" value="変更"
            class="btn btn-success"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
<hr>
copyright 2021 yamamoto.
@endsection
