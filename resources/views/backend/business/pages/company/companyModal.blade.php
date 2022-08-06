<!-- Modal -->
<div class="modal fade modal-info text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel130" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              @foreach($doctypes as $doctype)
              @if($doctype->id==$document->type)
              <h5 class="modal-title" id="myModalLabel130">{{$doctype->type}}</h5>
              @endif
              @endforeach
              @if($document->is_verified==0)
              <h5 class="modal-title" id="myModalLabel130"><b> (Not Verified)</b></h5>
              @else
              <h5 class="modal-title" id="myModalLabel130"><b> (Verified)</b></h5>
              @endif
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @if($document->document != null)
              <div class="">
                <iframe src="{{asset("storage/company-documents/$document->document")}}" width="100%" height="600" title="Trade License"></iframe>
              </div>
              @endif
            </div>
        </div>
    </div>
</div>
