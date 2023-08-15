       <!-- Modal excluir etapas -->
       <div class="modal fade" id="excluiretapa{{ $etapa->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmar Exclusão</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza de que deseja excluir esta Etapa? - {{ $etapa->id }}
                    {{ $etapa->Especificacao_etapa ?? 'etapa nao informada' }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                    {!! Form::open(['route' => ['trdigital.etapasstoredestroy', $etapa->id], 'method' => 'delete']) !!}
                    <button type="submit"
                        class="btn btn-danger">Excluir</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>