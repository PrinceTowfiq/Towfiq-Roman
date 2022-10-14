<!DOCTYPE html>
<html lang="en">

@include('web.layouts.head')

<body>

  @include('web.layouts.nav')

  @yield('content')

  <!-- ======= Footer ======= -->
  @include('web.layouts.footer')

</body>

</html>