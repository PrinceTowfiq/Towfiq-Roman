
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.layouts.header')

    </head>

    <body>

        <!-- Top Bar Start -->
        @include('admin.layouts.topbar')

        <!-- Top Bar End -->

        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                @include('admin.layouts.sidebar')
                <!-- end left-sidenav-->
                <div class="page-content">
                    @include('admin.layouts.alert')

                    <!-- Page Content-->
                    @yield('content')
                    <footer class="footer text-center text-sm-left">
                        &copy; 
                        {{ date('Y')}}
                        CodersHub <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by CodersHub</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

        @include('admin.layouts.footer')

    </body>
</html>