<!doctype html>
<html lang="en">
    <head>
        @include('layout.head')
    </head>
    <body>
      @include('layout.nav')
      <div class="main-container">
        @yield('content')
      </div>
    </body>
    @include('layout.footer')
    @include('layout.footer-scripts')
</html>
