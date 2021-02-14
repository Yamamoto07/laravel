<!DOCTYPE HTML>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
 <title>@yield('title')</title>
   <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div id="header">
     <div id="header-wrapper">
       @if (Auth::check())
       <div id="header-logo">
         <a href="/index">Portfolio</a>
       </div>
       <div id="header-menu">

       <a href="{{route('logout')}}" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         ログアウト
       </a>
       <form id="logout-form" action={{route('logout')}} method="post" style="display: none;">
       @csrf
       </div>
       @else
       <div id="header-logo">
         <a href="#">Portfolio</a>
       </div>
       <div id="header-menu">
         <a href="#">ユーザー登録</a>
         <a href="#">ログイン</a>
       </div>
       @endif
     </div>
   @yield('header')
   </div>
   <div class="content">
     @yield('content')
   </div>
   <hr>
   <div class="footer">
   @yield('footer')
   </div>
   <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
