<div class="modal fade col-sm-12" id="myModaledit{{ $TypePartNumber->id  }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>Detalhes da BU</h4>


                    <form method="POST"  action={{ URL("/PartnumberType"."/".$TypePartNumber->id) }} class="form">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="type">Tipo</label>
                                <input type="text" value={{ $TypePartNumber->type }} id="type" name="type" class="form-control" placeholder="Informe o nome">
                            </div>                        
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="description">Descrição</label>
                                <input type="text" id="description" name="description" class="form-control"
                                    placeholder="Informe uma descrição" value="{{ $TypePartNumber->description  }}">
                            </div>
                        </div>

                        <div class="row justify-content-center mt-6">
                            <button type="submit" class="btn btn-danger font-weight-bold col-7">Atualizar tipo PartNumber</button>
                    </form>
                
                {{-- <form method="POST" action={{ URL("/BUs"."/".$Bu->id) }} class="form">
                    @csrf

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="nameBu">Nome da BU</label>
                            <input type="text" id="nameBu" name="nameBu" value="{{ $Bu->name }}"
                                class="form-control" placeholder="Informe o nome">
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="type">Tipo</label>
                            <select type="text" id="type" name="type" class="form-control"
                                placeholder="Informe o tipo">

                                <option disabled selected>Informe o tipo</option>
                                @foreach ($allBuType as $BuType)
                                    @if ($BuType->type == $Bu->type)
                                        <option selected value="{{ $BuType->id }}">{{ $BuType->type }}</option>
                                    @else
                                        <option value="{{ $BuType->id }}">{{ $BuType->type }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="description">Descrição</label>
                            <input type="text" value="{{ $Bu->description }}" id="description" name="description"
                                class="form-control" placeholder="Informe uma descrição">
                        </div>
                    </div>

                    <div class="row justify-content-center mt-6">
                        <button type="submit" class="btn btn-danger font-weight-bold col-7">Atualizar BU</button>
                </form> --}}
            </div>
        </div>
    </div>
</div>
</div>
