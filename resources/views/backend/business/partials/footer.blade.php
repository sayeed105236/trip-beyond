<footer class="footer footer-static footer-light">
  <?php
  $settings= App\Models\Backend\SystemSettings::first();

   ?>
    @if($settings->footer_copyright != null )
      <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">{{$settings->footer_copyright}}<a class="ml-25" href="#" target="_blank"></a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block"></span></p>
      @else
    <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    @endif
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
