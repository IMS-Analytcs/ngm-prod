<button type="button" class="btn btn-danger col-12 font-weight-bold mb-4" data-toggle="modal" data-target="#myModal">
    <h4 class="mt-2 font-weight-bold">
    <i class="fas fa-sitemap" style='font-size:28px'></i>
    Cadastrar Novo Grupo</h4>
</button>
<!-- Modal Adicionar fabricantes -->
<div class="modal fade col-sm-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Novo Grupo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>Detalhes</h4>
                <form method="POST" class="form">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="col-sm-12 form-group">
                            <label id="campo_cidade">Selecione o fabricante</label>
                            <select  id="typemanufacturer" class="form-control" name="manufacturer_id"></select>
                        </div>

                        <div class="col-sm-12 form-group">
                            <label for="namefabricante">Nome do Grupo</label>
                            <input placeholder="Nome da fabricante" required type="text" id="namefabricante" name="name" class="form-control">
                        </div>

                        <div class="col-sm-12 form-group">
                            <label id="campo_cidade">Descrição</label>
                            <textarea class="form-control" name="description" id="description" rows="3" name="" id=""></textarea>
                        </div>

                    </div>
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-danger font-weight-bold col-7">Cadastrar Grupo</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
