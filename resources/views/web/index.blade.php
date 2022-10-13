@extends('web.app')

@section('content')
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
            <h1>Welcome to CECL <span></span></h1>
            <h2>Please fill up give Information form </h2>
        </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
            <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href=""> Registration </a></h3>
            </div>
        </div>
        <div class="col-xl-2 col-md-4">
            <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="#features"> Virtual Tour</a></h3>
            </div>
        </div>
        
        </div>
        
        
        
        </div>

    </div>
    </section><!-- End Hero -->

    <main id="main">

    <!-- ======= Form Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('web/img/about.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
            </p>
            <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>
            </div>
        </div>

        </div>
    </section><!-- End FormSection -->

    

    <!-- ======= Virtual Tour  Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

        <div style="position:relative; height:0; padding-top:56.25%"><iframe style="position:absolute; top:0; left:0; width:100%; height:100%;" src="http://codershub.codes/VT/c/cecl/" name="TOUR NAME" width="100%" height="100%" frameborder="0" allowfullscreen="true" allow="fullscreen; accelerometer; gyroscope; magnetometer; vr"></iframe></div>


        </div>
    </section><!-- End Virtual Tour Section -->

    
    </main><!-- End #main -->
@endsection

