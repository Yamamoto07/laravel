<html>
<head>
  <title>@yield('title')</title>
  <link href="{{asset('/asset/css/app.css')}}" rel="stylesheet">
  <link rel="stylesheet"
       href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body>
  <div class="top">
  <h1>@yield('title')</h1>
  @section('menubar')
  <h2 class="meutitle">メニュー</h2>
  </div>
  <ul>
       <li>@show</li>
  </ul>
  <hr size="1">
  <div class="content">
  @yield('content')
  </div>
  <div class="footer">
  @yield('footer')
  </div>
</body>
</html>
