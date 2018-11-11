<!doctype html>
<html lang="en">

<head>
@include('partials.head')
</head>
  
  <body>
  <link rel="stylesheet" type="text/css" href="style.css">
@include('partials.nav')
<div class="container">

@include('partials.messages')

@yield("content")

@include('partials.footer')
    </div>

@include('partials.javascript')

    <!-- Optional JavaScript -->
  @yield('script')
  </body>
</html>