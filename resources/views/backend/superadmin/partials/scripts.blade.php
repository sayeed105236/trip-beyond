<!-- BEGIN: Vendor JS-->
<script src="{{URL::asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{URL::asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{URL::asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{URL::asset('app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{URL::asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script>
$(document).ready( function () {
$('#myTable').DataTable();
} );
</script>


<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

</script>

<script>
    $(document).ready(function() {
    $('#content').summernote();
    });
    $(document).ready(function() {
    $('#content1').summernote();
    });
    $(document).ready(function() {
    $('#content2').summernote();
    });
    $(document).ready(function() {
    $('#content3').summernote();
    });
</script>
@stack('scripts')

