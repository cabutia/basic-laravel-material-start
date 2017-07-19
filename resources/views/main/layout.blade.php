<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  @include('main.head')
  <body>
    @yield('content')
    @include('main.general-scripts')
    @yield('general-scripts')
  </body>
</html>
