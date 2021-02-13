<html>
<head>
   <title>@yield('title')</title>
   <link href="{{asset('css/app.css')}}" rel="stylesheet">
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
