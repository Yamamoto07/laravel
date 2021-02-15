@extends('layouts.foodapp')

@section('title', '食材削除')

@section('content')
    <div class="backpage">
      <a href="./">戻る</a>
    </div>
    <h4>@yield('title')</h5>
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
	     <tr><th></th><td><p class="delete-message">本当に削除しますか?</p>
		  <input type="submit" value="削除"></td>
             </tr>
    </table>
    </form>

@endsection

@section('footer')
copyright 2021 yamamoto.
@endsection
