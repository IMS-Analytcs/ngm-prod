<div class="modal fade col-sm-12" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Nova Familia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <form method="POST" class="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="name">Nome da Familia</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Informe a familia">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="manufecturer">Fabricante</label>
                            <select type="text" id="manufecturer" name="manufecturer" class="form-control">
                                <option disabled selected>Selecione o Fabricante</option>
                                @foreach ($allFabricantes as $fabricante)
                                <option value="{{$fabricante->id}}">{{$fabricante->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="group">Selecione Grupo</label>
                            <select type="text" id="group" name="group" class="form-control">
                                <option disabled selected>Selecione o Grupo</option>
                                @foreach ($allGroups as $Groups)
                                <option value="{{$Groups->id}}">{{$Groups->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-6">
                        <button type="submit" class="btn btn-danger font-weight-bold col-7">Cadastrar Familia</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>