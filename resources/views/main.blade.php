<!doctype html>
<html @lang('en')>
<head>
 @include('partials/_head')
 @include('partials/_css')
</head>

<body id="page-top" >
    

<div >
  @yield('content')
</div>

  @include('partials/_footer')
  @include('partials/_script')

@yield('script')
 </body>
</html>
