<!DOCTYPE html>
<html>
    <head>
        @include('dashboard.layouts.partials.head')
    </head>

    <body class="hold-transition fixed skin-green sidebar-mini">

    <!-- Site wrapper -->
        <div class="wrapper">




        <!--header section-->
        @include('dashboard.layouts.partials.main-header')


        @include('dashboard.layouts.partials.main-sidebar')

        @yield('main-content')

         @include('dashboard.layouts.partials.main-footer')

          @include('dashboard.layouts.partials.control-sidebar')


        </div>
    <!-- Site wrapper -->

    @include('dashboard.layouts.partials.script')
    @include('dashboard.includes.custom-script')

    @stack('scripts')




    </body>

</html>