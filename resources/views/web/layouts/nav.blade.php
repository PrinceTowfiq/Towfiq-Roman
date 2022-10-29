  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background: rgba(0, 0, 0, 0.8);">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{route('index')}}">CECL<span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="web/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{ Route::is('index')  ? 'active' : '' }}" href="{{route('index')}}#features">Virtual Tour</a></li>
          <li><a class="nav-link scrollto {{ Route::is('memberForm')  ? 'active' : ''}}" href="{{route('memberForm')}}">Contact Form</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
