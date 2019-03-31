<!doctype html>
<html lang="en">
    <head>
        @include('layout.head')
    </head>
    <body>
      <div class="main-container">
        @include('layout.nav')
        @yield('content')
      </div>
    </body>
    @include('layout.footer')
    @include('layout.footer-scripts')
</html>
