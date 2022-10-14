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
            <h3><a href="{{route('memberForm')}}"> Conenct Form </a></h3>
            </div>
        </div>
        <div class="col-xl-2 col-md-4">
            <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="{{route('index')}}#features"> Virtual Tour</a></h3>
            </div>
        </div>
        
        </div>
        
        
        
        </div>

    </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Virtual Tour  Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div style="position:relative; height:0; padding-top:56.25%"><iframe style="position:absolute; top:0; left:0; width:100%; height:100%;" src="https://codershub.codes/VT/c/cecl/" name="TOUR NAME" width="100%" height="100%" frameborder="0" allowfullscreen="true" allow="fullscreen; accelerometer; gyroscope; magnetometer; vr"></iframe></div>
            </div>
        </section><!-- End Virtual Tour Section -->
    
    </main><!-- End #main -->
@endsection

