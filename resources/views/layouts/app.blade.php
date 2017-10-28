<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials._head')
</head>
<body class="body-background">

  @include('partials.nav._main-nav')

    <div id="app">
        @yield('content')
    </div>

</body>
  <!-- Scripts -->
  @include('partials._scripts')
</html>
