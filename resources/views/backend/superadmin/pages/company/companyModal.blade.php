<!-- Modal -->
<div class="modal fade modal-info text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel130" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel130">Trade License</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              @if($company->trade_license != null)
              <div class="">
                <iframe src="{{asset("storage/company-documents/$company->trade_license")}}" width="100%" height="600" title="Trade License"></iframe>
              </div>
              @endif
            </div>
        </div>
    </div>
</div>
