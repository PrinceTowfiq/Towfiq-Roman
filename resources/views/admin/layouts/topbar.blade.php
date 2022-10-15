<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">

       <!-- LOGO -->
       <div class="topbar-left">
           <a href="{{ route('admin.home')}}" class="logo">
               {{-- <span>
                   <img src="{{asset('admin/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
               </span>
               <span>
                   <img src="{{asset('admin/images/logo-dark.png')}}" alt="logo-large" class="logo-lg">
               </span> --}}
              <h3>
                CECL Admin
              </h3>
           </a>
       </div>

       <ul class="list-unstyled topbar-nav float-right mb-0">

           <li class="dropdown">
               <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                   <img src="{{asset('web/img/apple-touch-icon.png')}}" alt="profile-user" class="rounded-circle" /> 
                   <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                   <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                   <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="{{ route('logout') }}" 
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                       <i class="dripicons-exit text-muted mr-2"></i> 
                       {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
               </div>
           </li>
       </ul>

       <ul class="list-unstyled topbar-nav mb-0">
               
           <li>
               <button class="button-menu-mobile nav-link waves-effect waves-light">
                   <i class="mdi mdi-menu nav-icon"></i>
               </button>
           </li>

           {{-- <li class="hide-phone app-search">
               <form role="search" class="">
                   <input type="text" placeholder="Search..." class="form-control">
                   <a href=""><i class="fas fa-search"></i></a>
               </form>
           </li> --}}
           
       </ul>

   </nav>
   <!-- end navbar-->
</div>

<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">                    
            <img src="{{asset('web/img/apple-touch-icon.png')}}" alt="user" class="rounded-circle img-thumbnail mb-1">
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body">
                <h5 class="text-light">{{ Auth::user()->name }} </h5>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                        <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            class=""><i class="mdi mdi-power text-danger"></i></a>
                            
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>
                </ul>
            </div>                    
        </div>
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right align-item-center mt-2">
                        {{-- <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button> --}}
                    </div>
                    <h4 class="page-title mb-2"><i class="mdi mdi-google-pages mr-2"></i>Starter</h4>  
                    <div class="">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>                                      
                </div><!--end page title box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
    </div><!--end page-wrapper-img-inner-->
</div><!--end page-wrapper-img-->