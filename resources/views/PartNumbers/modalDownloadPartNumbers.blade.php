<div class="modal fade" id="myModalDownload{{ $PartNumbers->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Download SOW</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Deseja fazer o download ?</h4>
                <br>
                <div class="row justify-content-between text-center">
                    <div class="col-sm-6">
                        @if($PartNumbers->updated_sow == 0)
                        <a href="{{ route('partNumbers.pdf', $PartNumbers->id) }}"
                            class="btn btn-danger btn-lg font-weight-bold">
                            SIM
                        </a>
                        @endif
                        @if($PartNumbers->updated_sow == 1)
                        <a href="{{ route('partNumbers.downloadFile', $PartNumbers->id) }}"
                            class="btn btn-danger btn-lg font-weight-bold">
                            SIM
                        </a>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-secondary btn-lg font-weight-bold" data-dismiss="modal">
                            NÃO
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>