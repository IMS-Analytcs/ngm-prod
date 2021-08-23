<div class="modal fade col-sm-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <style>
                    .msg-despesa{
                        display: none;
                    }
                    .form-check {
                        padding-left: 1.70rem;
                    }
                </style>
                <h4 class="modal-title h2 font-weight-bold" id="myModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="btn msg-despesa btn-success mb-4" style="min-width: 120px"></div>
                <h4>Detalhes da despesa</h4>
                <form class="form" id="add-form" method="POST">
                    @csrf

                    <div class="row h5">
                        <div hidden class="col-sm-12">
                            <label for="fid">ID</label>
                            <input type="text" class="form-control" name="id" id="fid">
                        </div>

                        <div class="col-sm-12 form-group">
                            <label for="nameExpenses">Nome da despesa</label>
                            <input type="text" id="nameExpenses" name="nameExpenses" class="form-control">

                        </div>
                        @php
                            $allexpensesCategory = \App\Models\expensesCategory::All();
                        @endphp

                        <div class="col-sm-6 form-group">
                            <label for="category">Categoria</label>
                            <select id="categoryexpenses" name="category" class="form-control">
                                @foreach ($allexpensesCategory as $item)
                                    <option value="{{ $item->id }}">{{ $item->category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="value">Valor</label>
                            <div class="row justify-content-start align-items-center">
                                <span class="mr-1 font-weight-bold">R$</span>
                                <input type="text" id="valueexpenses" name="value" onKeyUp="mascaraMoeda(this, event)"
                                    class="form-control col-sm-11">
                            </div>
                        </div>

                        <div class="col-sm-12 form-group">
                            <label id="campo_localidade">Localidade da despesa (destino)</label>
                        </div>
                        <div class="col-sm-12 form-group form-check">
                            <input type="checkbox" class="form-check-input" id="nacional_expense" name="nacional_expense">
                            <label class="form-check-label" for="nacional_expense" style="font-weight: 500px">Despesa Nacional</label>
                          </div>

                        <div class="col-sm-4 form-group">
                            <label id="campo_estado">Estado</label>
                            <select id="estado" name="state" class="stateexpenses form-control">
                            
                            </select>
                        </div>
                        <div class="col-sm-8 form-group">
                            <label id="campo_cidade">Município</label>
                            <select id="cidade" class="cityexpenses form-control" name="city"></select>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-danger col-7">
                            <h4 class="text-btn font-weight-bold mt-2">
                            </h4>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

