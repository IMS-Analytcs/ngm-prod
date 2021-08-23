<div class="modal fade col-sm-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Lista de PartNumbers</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">PartNumbers</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Adicionar</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $allPartNumbers = \App\Models\PartNumbers::All();
                        @endphp
                        @forelse ( $allPartNumbers as $all )
                            <tr>
                                <td>{{ $all->nameParNumber }}</td>
                                {{-- <td>{{ $all->sow }}</td> --}}
                                <td>{{ $all->typePartNumber }}</td>
                                <td>R$ {{ number_format($all->valor, 2, ',', '.') }}</td>
                                <td><a href="#" title="Adicionar na cotação" onclick="selectPart({{ $all->id }})" >
                                <i class="fas fa-check text-green"></i></a></td>
                            </tr>
                        @empty
                            <p>Nenhum registro cadastrado!</p>
                        @endforelse

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
