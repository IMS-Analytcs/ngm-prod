<div onClick="reload()" class="modal fade col-xl-12" id="myModal{{$grupo->id}}" tabindex="-1"
                        role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title" id="myModalLabel">Status da fabricante</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    @if($grupo->active === 0 )
                                    <h4 class="text-center">Deseja ativar a grupo de {{$grupo->name}}?</h4>
                                    @else
                                    <h4 class="text-justify">Deseja desativar a grupo de {{$grupo->name}}?</h4>
                                    @endif
                                    <div class="row justify-content-center mt-4">
                                        @if($grupo->active === 0 )
                                        <a href="{{route('groups.update', [$grupo->id])}}"
                                            class="btn btn-success font-weight-bold col-7 none">Ativar</a>
                                        @else
                                        <a href="{{route('groups.update', [$grupo->id])}}"
                                            class="btn btn-danger font-weight-bold col-7 none">Desativar</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
