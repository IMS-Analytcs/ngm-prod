    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
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
                            <p style="font-size: 20px;color: #454444;" id="deal_value" name="deal_value">
                                {{-- Carrega com Jquery --}}
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-bold" style="font-size: 20px;color: #454444;">
                                Cliente:
                            </p>
                            <p style="font-size: 20px;color: #454444;" id="client_value" name="client_value">
                                {{-- Carrega com Jquery --}}
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-bold" style="font-size: 20px;color: #454444;">
                                Valor:
                            </p>
                            <p style="font-size: 20px;color: #454444;" id="quote_value" name="quote_value">
                                {{-- Carrega com Jquery --}}
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-bold" style="font-size: 20px;color: #454444;">
                                Data de Cadastro:
                            </p>
                            <p style="font-size: 20px;color: #454444;" id="date_value" name="date_value">
                                {{-- Carrega com Jquery --}}
                            </p>
                        </div>
                    </div>
                    {{-- <form class="form" method="POST" action="#"> --}}

                    <form class="form" method="POST" name="formStatus" id="formStatus"  action="#">
                        @csrf
                        <label for="status" style="font-size: 20px;color: #454444;">Status da Cotação</label>
                        <select type="text" id="status" name="status" class="form-control" placeholder="Informe o tipo">

                            {{-- Defini valor selcionado com Jquery --}}
                            <option selected> </option>
                            <option value="aguardando">Aguardando</option>
                            <option value="andamento">Em andamento</option>
                            <option value="aguardando_PSC">Agurandando PSC</option>
                            <option value="aprovado">Aprovado</option>
                            <option value="cancelada">Cancelado</option>

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
