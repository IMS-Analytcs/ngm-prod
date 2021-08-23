<div class="modal fade col-sm-12" id="myModaledit{{ $fabricante->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Atualizar fabricante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>Detalhes do fabricante</h4>
                <form method="POST" class="form" id="edit-form" action="{{URL('fabricantes/'.$fabricante->id)}}">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="namefabricante">Nome do fabricante</label>
                            <input value="{{ $fabricante->name }}" placeholder="Nome da fabricante" required type="text"
                                id="namefabricante" name="name" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="category">Abreviação</label>
                            <input value="{{ $fabricante->abbreviation }}" placeholder="Abreviação do fabricante"
                                required type="text" id="abbreviation" name="abbreviation" class="form-control">
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="category">Nível de Parceria</label>
                            <input value="{{ $fabricante->partnership_level }}" placeholder="Parceria do fabricante"
                                required type="text" id="partnership_level" name="partnership_level"
                                class="form-control">
                        </div>

                        <div class="col-sm-12 form-group">
                            <label id="campo_cidade">Tipo de fabricante</label>

                            <select id="" class="form-control" name="typemanufacturer_id">
                                @foreach ($tiposFabricante as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->name }}
                                </option>
                                @endforeach

                            </select>



                        </div>

                        <div class="col-sm-12 form-group">
                            <label id="campo_cidade">Detalhamento</label>
                            <textarea class="form-control" name="detailing" id="detailing" rows="3" name=""
                                id="">{{ $fabricante->detailing }}</textarea>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label>Início de contrato</label>
                            <div class="input-group date">
                                <input value="{{ $fabricante->contract_start }}" type="date" class="form-control"
                                    id="contract_start" name="contract_start">
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label>Fim de contrato</label>
                            <div class="input-group date">
                                <input value="{{ $fabricante->contract_end }}" type="date" class="form-control"
                                    id="contract_end" name="contract_end">
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-danger font-weight-bold col-7">Editar
                            Fabricante</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>