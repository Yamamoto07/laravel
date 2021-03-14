@extends('layouts.default')

@section('title', '食材追加')

@section('content')
   <div id="btn-back">
       <button type="button" id="btn-back" class="btn btn-secondary">
	   <a href="./" class="text-white">←食材一覧に戻る</a>
       </button>
   </div>
   <h1>食材追加</h1>
   @if (count($errors) > 0)
   <div class="error-messages">
         <ul>
              @foreach ($errors->all() as $error)
                  </li>・{{$error}}<br></li>
              @endforeach
         </ul>
   </div>
   @endif
   <form action="{{route('food_add')}}" method="post">
   <table align="center">
      @csrf
      <tr><th>食材名</th><td><input type="text" name="name"
          value="{{old('name')}}"></td></tr>
      <tr><th>数量</th><td><input type="text" name="quantity"
          value="{{old('quantity')}}"></td></tr>
      <tr><th>単位</th><td><input type="text" name="unit"
          value="{{old('unit')}}"></td></tr>
      <tr><th>賞味期限<br>(記入例：2021/3/5)</th><td><input type="text"
          name="limit" value="{{old('limit')}}"></td></tr>
      <tr><th></th><td><input type="submit" value="追加"
          class="btn btn-primary"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
<hr>
copyright 2021 yamamoto.
@endsection
