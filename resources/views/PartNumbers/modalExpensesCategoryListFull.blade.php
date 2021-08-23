<div class="modal fade col-sm-12" id="myModalCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 id="myModalLabel">Lista de Categorias de Despesas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome da Categoria</th>
                            <th scope="col">Adicionar</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $allexpensesCategory = \App\Models\expensesCategory::All();
                        @endphp
                        @forelse ( $allexpensesCategory as $all )
                        <tr>
                            <td>{{$all->category}}</td>
                            <td>
                            <a href="#" title="Adicionar na cotação" onClick="selectPart({{$all->id}});">
                            <i class="fas fa-check text-green"></i>
                            </a>
                            </td>
                        </tr>
                        @empty
                        <p>Nenhum registro cadastrado!</p>
                        @endforelse

                    </tbody>
                </table>
                <div class="row justify-content-center mt-4 psc-footer">
                    <div class="col-sm-12 text-center">
                        <a href='#' class="btn btn-danger font-weight-bold pl-5 pr-5">ADICIONAR CATEGORIA DE
                            DESPESAS</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
