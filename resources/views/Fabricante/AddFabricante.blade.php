<button type="button" class="btn btn-danger col-12 font-weight-bold mb-4" data-toggle="modal" data-target="#myModal">
    <h4 class="mt-2 font-weight-bold">
        <i class="fas fa-sitemap" style='font-size:28px'></i>
        Cadastrar Novo Fabricante
    </h4>
</button>
<!-- Modal Adicionar fabricantes -->
<div class="modal fade col-sm-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Novo fabricante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>Detalhes do fabricante</h4>
                <form method="POST" class="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="namefabricante">Nome do fabricante</label>
                            <input placeholder="Nome da fabricante" required type="text" id="namefabricante" name="name"
                                class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="category">Abreviação</label>
                            <input placeholder="Abreviação do fabricante" required type="text" id="abbreviation"
                                name="abbreviation" class="form-control">
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="category">Nível de Parceria</label>
                            <input placeholder="Parceria do fabricante" required type="text" id="partnership_level"
                                name="partnership_level" class="form-control">
                        </div>

                        <div class="col-sm-12 form-group">
                            <label id="campo_cidade">Tipo de fabricante</label>
                            <select id="typemanufacturer_id" class="form-control" name="typemanufacturer_id">

                                @foreach ($tiposFabricante as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-sm-12 form-group">
                            <label id="campo_cidade">Detalhamento</label>
                            <textarea class="form-control" name="detailing" id="detailing" rows="3" name=""
                                id=""></textarea>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label>Início de contrato</label>
                            <div class="input-group date">
                                <input type="date" class="form-control" id="contract_start" name="contract_start">
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label>Fim de contrato</label>
                            <div class="input-group date">
                                <input type="date" class="form-control" id="contract_end" name="contract_end">
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-danger font-weight-bold col-7">Cadastrar
                            Fabricante</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
