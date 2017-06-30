<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('partials/_head')

  <body>
    <div class="container-fluid">
      <div class="row">
        @include('partials/_nav')
        @yield('contents')
      </div>
    </div>
    @include('partials/_js')
  </body>
</html>
