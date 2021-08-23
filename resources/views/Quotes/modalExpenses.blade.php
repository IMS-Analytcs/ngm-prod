<div class="modal fade col-sm-12" id="ModalDespesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">

        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Lista de Despesas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Despesa</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Adicionar</th>
                        </tr>
                    </thead>
                    <tbody id="listExpenses" name="listExpenses">
                        {{-- Carrega com Jquery --}}
                    </tbody>
                </table>
                <div class="row justify-content-center mt-4 psc-footer">
                    <div class="col-sm-12 text-center">
                        <a href='#' class="btn btn-danger font-weight-bold pl-5 pr-5">ADICIONAR NA COTAÇÃO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
