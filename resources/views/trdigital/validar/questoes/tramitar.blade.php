<div class="tab-pane fade" id="list-tramitar" role="tabpanel" aria-labelledby="list-projeto-tramitar">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> <b> <big> 7. </b> </big>
                Finalizar </h5>
            {!! Form::open([
                'url' => route('trdigital.validar.instituicao', ['id' => $n_processo->Projeto_conteudo->id]),
                'method' => 'post',
            ]) !!}
            <button type="submit" class="btn btn-success"> FINALIZAR/TRAMITAR </button>
            <button type="submit" class="btn btn-warning"> <b> DEVOLVER </b> </button>
            </select>
        </div>
    </div>
</div>
