<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <title>@yield('title')</title>
     <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
</head>
<body>
     <h1>@yield('title')</h1>
     @section('menubar')
     <h2 class="menutitle">メニュー</h2>
     <ul>
          <li>@show</li>
     </ul>
     <hr>
     <div class="content">
     @yield('content')
     </div>
     <div class="footer">
     @yield('footer')
     </div>
</body>
</html>
