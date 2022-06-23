<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('backend.superadmin.partials.header')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->


    @include('backend.superadmin.partials.navbar')
      @include('backend.superadmin.partials.search')

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    @include('backend.superadmin.partials.sidebar')

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('superadmin_content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
      @include('backend.superadmin.partials.footer')
    <!-- END: Footer-->


    @include('backend.superadmin.partials.scripts')
</body>
<!-- END: Body-->

</html>
