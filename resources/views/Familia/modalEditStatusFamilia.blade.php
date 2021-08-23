<div onClick="reload()" class="modal fade col-xl-12" id="myModalstatus{{$Familia->idFamilia}}" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Status da Familia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                @if($Familia->status == 0 )
                <h4 class="text-center">Deseja ativar a Familia de {{$Familia->familia}}?</h4>
                @else
                <h4 class="text-justify">Deseja desativar a Familia de {{$Familia->familia}}?</h4>
                @endif
                <div class="row justify-content-center mt-4">
                    @if($Familia->status == 0 )
                    <a href="{{route('Familia.update', [$Familia->idFamilia])}}"
                        class="btn btn-success font-weight-bold col-7 none">Ativar</a>
                    @else
                    <a href="{{route('Familia.update', [$Familia->idFamilia])}}"
                        class="btn btn-danger font-weight-bold col-7 none">Desativar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>