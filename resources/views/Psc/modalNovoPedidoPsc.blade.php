<div class="modal fade col-sm-12" id="ModalNovoPedidoPsc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="myModalLabel">Novo Pedido PSC</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('psc.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="lead" class="mt-1">Deal</label>
                            <input type="number" id="lead" name="lead" class="form-control"
                                placeholder="identificação Deal" required value="{{ $editpsc->lead }}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="pre_venda" class="mt-1">Pré-Venda</label>
                            <input type="text" id="pre_venda" name="pre_venda" class="form-control"
                                value="{{ isset(Auth::user()->name) ? isset(Auth::user()->name) : 'develop' }}"
                                readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="email" class="mt-1">Email</label>
                            <input type="text" id="email" name="email" class="form-control"
                                value="{{ isset(Auth::user()->username) ? Auth::user()->username : 'develop' }}"
                                readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="motivo" class="mt-1">Motivo</label>
                            <select id="motivo" name="motivo" class="form-control">
                                <option value="" selected disabled>
                                    Informe o motivo
                                </option>
                                <option value="Identificação lead">
                                    Identificação lead
                                </option>
                                <option value="Preço especial">Preço especial</option>
                                <option value="Escopo não cadastrado">
                                    Escopo não cadastrado
                                </option>
                                <option value="Dúvidas / Erros de sistema">
                                    Dúvidas / Erros de sistema
                                </option>
                                <option value="PN não encontrado">
                                    PN não encontrado
                                </option>
                                <option value="Serviço customizado">
                                    Serviço customizado
                                </option>
                                <option value="POC">
                                    POC
                                </option>
                                <option value="Apoio de profissional">
                                    Apoio de profissional
                                </option>
                                <option value="Data especial">
                                    Data especial
                                </option>
                                <option value="Edital">
                                    Edital
                                </option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="data_final" class="mt-1">Data de previsão para fechamento</label>
                            <input type="datetime-local" id="datafinal" name="data_final" class="form-control"
                                value="{{ str_replace(' ', 'T', date('Y-m-d H:i', strtotime('+2 days'))) }}">
                        </div>
                        <div class="col-sm-4">
                            <label for="concorrente" class="mt-1">Concorrentes</label>
                            <input type="text" id="concorrente" name="concorrente" class="form-control"
                                placeholder="Com quem estamos concorrendo">
                        </div>
                        <div class="col-sm-12">
                            <label for="escopo" class="mt-1">Escopo Requerido</label>
                            <textarea class="form-control p-1" id="escopo" name="escopo" style="resize: none"
                                placeholder="Descreva o escopo da solicitação do PSC"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <label for="justificativa" class="mt-1">Justificativa</label>
                            <textarea class="form-control p-1" id="justificativa" name="justificativa"
                                style="resize: none"
                                placeholder="Descreva a jusitificativa da solicitação deste PSC"></textarea>
                        </div>
                        <input type="number" hidden name="quote_id" value="{{ $editpsc->id }}">
                    </div>
                    <div class="row justify-content-center mt-4 psc-footer">
                        <div class="col-sm-6 text-center enviar mt-2">
                            <button type="submit" class="btn btn-danger font-weight-bold pl-5 pr-5">
                                SOLICITAR PSC
                            </button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
