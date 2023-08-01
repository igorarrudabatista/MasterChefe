<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
    {!! Form::open([
        'url' => route('trdigital.validar.oficio', ['id' => $n_processo->Doc_anexo1->id]),
        'method' => 'post',
    ]) !!}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><big><b> A. </b></big> Ofício de encaminhamento com o <b>número da nova proposta </b>
            </h5>

            <div class="col-sm-10">
                @if ($n_processo->Doc_anexo1 && $n_processo->Doc_anexo1->Comp_Oficio)
                    <div class="icon">
                        <div class="col-md-12 iframe-container">
                            <iframe src="{{ asset('storage/' . $n_processo->Doc_anexo1->Comp_Oficio) }}"></iframe>
                        </div>
                        <a class="btn btn-primary" href="{{ asset('storage/' . $n_processo->Doc_anexo1->Comp_Oficio) }}"
                            target="_blank">
                            <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                        </a>
                    </div>
                @else
                    <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                @endif
            </div>

            {!! Form::radio('Comp_Oficio_sit', '1', $n_processo->Doc_anexo1->Comp_Oficio_sit == 1, [
                'class' => 'form-check-input',
                'id' => 'gridRadios1',
            ]) !!}
            <label class="form-check-label" for="gridRadios1">
                <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
            </label>

            {!! Form::radio('Comp_Oficio_sit', '0', $n_processo->Doc_anexo1->Comp_Oficio_sit == 0, [
                'class' => 'form-check-input',
                'id' => 'gridRadios2',
            ]) !!}
            <label class="form-check-label" for="gridRadios2">
                <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
            </label>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><big><b> B. </b></big> Ofício com a destinação da emenda emitido e <b>assinado pelo
                    Parlamentar.</b></h5>

            <div class="row mb-3">
                <div class="col-sm-10">
                    @if ($n_processo->Doc_anexo1 && $n_processo->Doc_anexo1->Comp_Assinado)
                        <div class="icon">
                            <div class="col-md-12 iframe-container">
                                <iframe src="{{ asset('storage/' . $n_processo->Doc_anexo1->Comp_Assinado) }}"></iframe>
                            </div>
                            <a class="btn btn-primary"
                                href="{{ asset('storage/' . $n_processo->Doc_anexo1->Comp_Assinado) }}" target="_blank">
                                <i class="bi bi-file-earmark-pdf-fill"></i> Ver arquivo
                            </a>
                        </div>
                    @else
                        <h4 class="text-danger"> <b> Documento não enviado </b></h4>
                    @endif
                </div>

                {!! Form::radio('Comp_Assinado_sit', '1', $n_processo->Doc_anexo1->Comp_Assinado_sit == 1, [
                    'class' => 'form-check-input',
                    'id' => 'gridRadios1',
                ]) !!}
                <label class="form-check-label" for="gridRadios1">
                    <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                </label>

                {!! Form::radio('Comp_Assinado_sit', '0', $n_processo->Doc_anexo1->Comp_Assinado_sit == 0, [
                    'class' => 'form-check-input',
                    'id' => 'gridRadios2',
                ]) !!}
                <label class="form-check-label" for="gridRadios2">
                    <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>
                        Corrigir</span>
                </label>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
        </div>
    </div>


    {!! Form::close() !!}
</div>
