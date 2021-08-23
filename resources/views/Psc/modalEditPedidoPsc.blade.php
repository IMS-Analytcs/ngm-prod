<div class="modal fade col-sm-12" id="ModalEditPedidoPsc{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="myModalLabel">Editar Pedido PSC</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('psc.edit', $item->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="lead" class="mt-1">Deal</label>
                            <input type="number" id="lead" name="lead" class="form-control"
                                placeholder="identificação Deal" required value="{{$editpsc->lead}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="pre_venda" class="mt-1">Pré-Venda</label>
                            <input type="text" id="pre_venda" name="pre_venda" class="form-control"
                                value="{{Auth::user()->name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="email" class="mt-1">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{Auth::user()->email}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="motivo" class="mt-1">Motivo</label>
                            <select id="motivo" name="motivo" class="form-control" required>
                                @if($item->motivo === 'Preço especial')
                                <option value="Preço especial" selected>Preço especial</option>
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
                                @endif
                                @if($item->motivo === 'Escopo não cadastrado')
                                <option value="Preço especial">Preço especial</option>
                                <option value="Escopo não cadastrado" selected>
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
                                @endif
                                @if($item->motivo === 'Dúvidas / Erros de sistema')
                                <option value="Preço especial">Preço especial</option>
                                <option value="Escopo não cadastrado">
                                    Escopo não cadastrado
                                </option>
                                <option value="Dúvidas / Erros de sistema" selected>
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
                                @endif
                                @if($item->motivo === 'PN não encontrado')
                                <option value="Preço especial">Preço especial</option>
                                <option value="Escopo não cadastrado">
                                    Escopo não cadastrado
                                </option>
                                <option value="Dúvidas / Erros de sistema">
                                    Dúvidas / Erros de sistema
                                </option>
                                <option value="PN não encontrado" selected>
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
                                @endif
                                @if($item->motivo === 'Serviço customizado')
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
                                <option value="Serviço customizado" selected>
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
                                @endif
                                @if($item->motivo === 'POC')
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
                                <option value="POC" selected>
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
                                @endif
                                @if($item->motivo === 'Apoio de profissional')
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
                                <option value="Apoio de profissional" selected>
                                    Apoio de profissional
                                </option>
                                <option value="Data especial">
                                    Data especial
                                </option>
                                <option value="Edital">
                                    Edital
                                </option>
                                @endif
                                @if($item->motivo === 'Data especial')
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
                                <option value="Data especial" selected>
                                    Data especial
                                </option>
                                <option value="Edital">
                                    Edital
                                </option>
                                @endif
                                @if($item->motivo === 'Edital')
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
                                <option value="Data especial" selected>
                                    Data especial
                                </option>
                                <option value="Edital">
                                    Edital
                                </option>
                                @endif
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="data_final" class="mt-1">Data de previsão para fechamento</label>
                            <input type="datetime-local" id="data_final" name="data_final" class="form-control"
                                value="{{str_replace(' ','T',date(date('Y-m-d H:i', strtotime($item->data_final))))}}">
                        </div>
                        <div class="col-sm-4">
                            <label for="concorrente" class="mt-1">Concorrentes</label>
                            <input type="text" id="concorrente" name="concorrente" class="form-control"
                                placeholder="Com quem estamos concorrendo" value="{{$item->concorrente}}">
                        </div>
                        <div class="col-sm-12">
                            <label for="escopo" class="mt-1">Escopo Requerido</label>
                            <textarea class="form-control p-1" id="escopo" name="escopo" style="resize: none"
                                placeholder="Descreva o escopo da solicitação do PSC">{{$item->escopo}}</textarea>
                        </div>
                        <div class="col-sm-12">
                            <label for="justificativa" class="mt-1">Justificativa</label>
                            <textarea class="form-control p-1" id="justificativa" name="justificativa"
                                style="resize: none"
                                placeholder="Descreva a jusitificativa da solicitação deste PSC">{{$item->justificativa}}</textarea>
                        </div>
                        <input type="number" hidden name="quote_id" value="{{$editpsc->id}}">
                    </div>
                    <div class="row justify-content-center mt-4 psc-footer">
                        <div class="col-sm-6 text-center enviar mt-2">
                            <button type="submit" class="btn btn-danger font-weight-bold pl-5 pr-5">
                                EDITAR PSC
                            </button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>