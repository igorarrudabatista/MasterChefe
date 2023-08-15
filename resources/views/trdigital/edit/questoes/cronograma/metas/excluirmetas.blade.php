<div class="modal fade" id="excluirmeta" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmar Exclusão </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir esta Meta? <br> <big> ID  <b> <span
                    id="meta-id">  </b> </big></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Cancelar</button>
                {!! Form::open([
                    'route' => ['trdigital.metasstoredestroy', '__META_ID__'],
                    'method' => 'delete',
                    'id' => 'delete-form',
                ]) !!}
                <button type="submit" class="btn btn-danger">Excluir</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>