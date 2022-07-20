<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('backend.business.partials.header')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->


    @include('backend.business.partials.navbar')
      @include('backend.business.partials.search')

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    @include('backend.business.partials.sidebar')

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('business_content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
      @include('backend.business.partials.footer')
    <!-- END: Footer-->


    @include('backend.business.partials.scripts')
</body>
<!-- END: Body-->

</html>
