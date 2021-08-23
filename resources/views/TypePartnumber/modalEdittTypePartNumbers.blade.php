<div onClick="reload()" class="modal fade col-xl-12" id="myModal{{ $TypePartNumber->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Status do Tipo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                @if ($TypePartNumber->ativo === 0)
                    <h4 class="text-center">Deseja ativar a despesa: {{ $TypePartNumber->type }}?</h4>
                @else
                    <h4 class="text-justify">Deseja desativar a despesa: {{ $TypePartNumber->type }}?</h4>
                @endif
                <div class="row justify-content-center mt-4">
                    @if ($TypePartNumber->ativo === 0)
                        <a href="{{ URL('PartnumberType/'.$TypePartNumber->id.'./status')  }}"
                            class="btn btn-danger font-weight-bold col-7 none">Ativar</a>
                    @else
                        <a href="{{ URL('PartnumberType/'.$TypePartNumber->id.'/status')  }}"
                            class="btn btn-danger font-weight-bold col-7 none">Desativar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
