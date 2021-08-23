    <!-- Modal -->
    <div id="myModal{{$quote['id']}}" class="modal fade" role="dialog">
        <div class="modal-dialog" class="modal-title" role="document">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Status Cotação</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="text-bold" style="font-size: 20px;color: #454444;">
                                Deal:
                            </p>
                            <p style="font-size: 20px;color: #454444;">{{$quote['id']}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-bold" style="font-size: 20px;color: #454444;">
                                Cliente:
                            </p>
                            <p style="font-size: 20px;color: #454444;">{{$quote['client_name']}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-bold" style="font-size: 20px;color: #454444;">
                                Valor da cotação:
                            </p>
                            <p style="font-size: 20px;color: #454444;">
                                R$ {{ number_format($quote['value_quote'], 2, ',', '.')}}
                            </p>
                        </div>
                        <form class="form" method="POST" action="{{ route('statusorder', $quote['id']) }}">
                            <div class="col-sm-6">
                                <p class="text-bold" style="font-size: 20px;color: #454444;">
                                    Valor final:
                                </p>
                                <p style="font-size: 20px;color: #454444;">
                                    @if(!$quote['final_value'])
                                    <input type="text" class="form-control"
                                        value="{{ number_format($quote['value_quote'], 2, ',', '.')}}"
                                        onKeyUp="mascaraMoeda(this, event)" name="final_value" />
                                    @else
                                    <input type="text" class="form-control" value="{{$quote['final_value']}}"
                                        onKeyUp="mascaraMoeda(this, event)" name="final_value" />
                                    @endif
                                </p>
                            </div>

                            <div class="col-sm-6">
                                <p class="text-bold" style="font-size: 20px;color: #454444;">
                                    Data de Cadastro:
                                </p>
                                <p style="font-size: 20px;color: #454444;">
                                    {{ \Carbon\Carbon::parse($quote['created_at'])->format('d/m/Y')}}
                                </p>

                            </div>
                            <div class="col-sm-6">
                                <p class="text-bold" style="font-size: 20px;color: #454444;">
                                    Data de Finalização:
                                </p>
                                <input type="date" class="form-control" name="dta_end" id="dta_end"
                                    value="{{$quote['final_date']}}" />
                            </div>
                            @csrf
                            <label for="status" style="font-size: 20px;color: #454444;">Status da Cotação</label>
                            <select type="text" id="status" name="status" class="form-control"
                                placeholder="Informe o tipo">
                                @if($quote['status_order'] === 'Ganho')
                                <option value="Ganho" selected>Ganho</option>
                                <option value="Cancelado">Cancelado</option>
                                <option value="Revisão">Revisão</option>
                                @endif
                                @if($quote['status_order'] === 'Cancelado')
                                <option value="Ganho">Ganho</option>
                                <option value="Cancelado" selected>Cancelado</option>
                                <option value="Revisão">Revisão</option>
                                @endif
                                @if($quote['status_order'] === 'Revisão')
                                <option value="Ganho">Ganho</option>
                                <option value="Cancelado">Cancelado</option>
                                <option value="Revisão" selected>Revisão</option>
                                @endif
                            </select>
                    </div>
                    <div class="modal-footer row justify-content-center">
                        <button type="submit" class="btn btn-danger font-weight-bold col-sm-8 none">
                            ATUALIZAR
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>