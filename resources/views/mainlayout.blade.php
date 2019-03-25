<!doctype html>
<html lang="en">
    <head>
        @include('layout.head')
    </head>
    <body>
      <div class="main-container">
        @include('layout.nav')
        @yield('content')
        @include('layout.footer')
        @include('layout.footer-scripts')
      </div>
    </body>
</html>
