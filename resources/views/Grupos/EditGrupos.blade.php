  <div class="modal fade col-sm-12" id="myModaledit{{$grupo->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title" id="myModalLabel">Atualizar Grupo</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <h4>Editar</h4>
                                    <form method="POST" class="form" id="edit-form" action="group-editar/{{$grupo->id}}">
                                        <input name="_method" type="hidden" value="PUT">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <label id="campo_cidade">Selecione o fabricante</label>
                                                <select  id="typemanufacturer" class="form-control" name="manufacturer_id">

                                                    @php
                                                    // $tipo = \App\Models\Manufacturer::find($fabricante->id)->typemanufacturer;
                                                    $fabricantes = \App\Models\Manufacturer::all();
                                                    $selected = '';
                                                    foreach ($fabricantes as $fabricante) {
                                                         $fabid = $fabricante->id;
                                                        if($fabricante->manufacturer_id==$fabid){
                                                            $selected = 'selected';
                                                        }
                                                            echo "<option value='".$fabricante->id."' ".$selected.">$fabricante->name</option>";
                                                            $selected = '';
                                                    }
                                                    // if($fabricante->typemanufacturer_id==$tipoid)
                                                @endphp

                                                </select>
                                            </div>

                                            <div class="col-sm-12 form-group">
                                                <label for="namefabricante">Nome do Grupo</label>
                                                <input placeholder="Nome da fabricante" required type="text" value="{{$grupo->name}}" id="namefabricante" name="name" class="form-control">
                                            </div>

                                            <div class="col-sm-12 form-group">
                                                <label id="campo_cidade">Descrição</label>
                                                <textarea class="form-control" name="description" id="description" rows="3" name="" id="">{{$grupo->description}}</textarea>
                                            </div>

                                        </div>
                                        <div class="row justify-content-center mt-4">
                                            <button type="submit" class="btn btn-danger font-weight-bold col-7">Editar Grupo</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
        </div>
