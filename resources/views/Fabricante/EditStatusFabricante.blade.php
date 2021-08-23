 <div onClick="reload()" class="modal fade col-xl-12" id="myModal{{ $fabricante->id }}" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">

                 <h4 class="modal-title" id="myModalLabel">Status da fabricante</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 @if ($fabricante->active === 0)
                 <h4 class="text-center">Deseja ativar a fabricante de
                     {{ $fabricante->name }}?</h4>
                 @else
                 <h4 class="text-justify">Deseja desativar a fabricante de
                     {{ $fabricante->name }}?</h4>
                 @endif
                 <div class="row justify-content-center mt-4">
                     @if ($fabricante->active === 0)
                     <a href="{{ route('fabricante.update', [$fabricante->id]) }}"
                         class="btn btn-success font-weight-bold col-7 none">Ativar</a>
                     @else
                     <a href="{{ route('fabricante.update', [$fabricante->id]) }}"
                         class="btn btn-danger font-weight-bold col-7 none">Desativar</a>
                     @endif
                 </div>
             </div>
         </div>
     </div>
 </div>