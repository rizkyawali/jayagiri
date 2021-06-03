<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ url('assets/frontend/images/logo-nav.png') }}" type="image/x-icon">
    <title>Jayagiri - @yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

  </head>
  <body>

    @include('includes.navbar-alternate')
    @yield('content')
    @include('includes.footer')

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>
