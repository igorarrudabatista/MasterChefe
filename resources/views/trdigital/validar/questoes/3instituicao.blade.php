{{-- ITEM 3 --}}
<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
    {!! Form::open([
        'url' => route('trdigital.validar.instituicao', ['id' => $n_processo->Instituicao->id]),
        'method' => 'post',
    ]) !!}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> <big> <b> 3. </b> </big>Identificação da <b> Instituição Proponente </b> </h5>

            <!-- Floating Labels Form -->
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="form-floating">
                        {!! Form::text('Nome_Instituicao', $n_processo->instituicao->Nome_Instituicao, [
                            'placeholder' => 'a',
                            'class' => 'form-control',
                            'disabled' => 'disabled',
                        ]) !!}
                        <label for="floatingName">Nome da Instituição</label>
                    </div>
                    {!! Form::radio('Nome_Instituicao_sit', '1', $n_processo->instituicao->Nome_Instituicao_sit == 1, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios1',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios1">
                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                    </label>

                    {!! Form::radio('Nome_Instituicao_sit', '0', $n_processo->instituicao->Nome_Instituicao_sit == 0, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios2',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios2">
                        <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                    </label>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            {!! Form::number('CNPJ_Instituicao', $n_processo->instituicao->CNPJ_Instituicao, [
                                'placeholder' => 'a',
                                'class' => 'form-control',
                                'disabled' => 'disabled',
                            ]) !!}
                            <label for="floatingName"></label>
                            <label for="floatingEmail">CNPJ</label>
                        </div>
                        {!! Form::radio('CNPJ_Instituicao_sit', '1', $n_processo->instituicao->CNPJ_Instituicao_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                        </label>

                        {!! Form::radio('CNPJ_Instituicao_sit', '0', $n_processo->instituicao->CNPJ_Instituicao_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            {!! Form::number('Telefone_Instituicao', $n_processo->instituicao->Telefone_Instituicao, [
                                'placeholder' => 'a',
                                'class' => 'form-control',
                                'disabled' => 'disabled',
                            ]) !!}
                            <label for="floatingName"></label>
                            <label for="floatingEmail">Telefone</label>
                        </div>
                        {!! Form::radio('Telefone_Instituicao_sit', '1', $n_processo->instituicao->Telefone_Instituicao_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                        </label>

                        {!! Form::radio('Telefone_Instituicao_sit', '0', $n_processo->instituicao->Telefone_Instituicao_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                        </label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        {!! Form::textarea('Endereco_Instituicao', $n_processo->instituicao->Endereco_Instituicao, [
                            'placeholder' => 'a',
                            'class' => 'form-control',
                            'id' => 'floatingTextarea',
                            'disabled' => 'disabled',
                        ]) !!}
                        <label for="floatingTextarea">Endereço</label>
                    </div>
                    {!! Form::radio('Endereco_Instituicao_sit', '1', $n_processo->instituicao->Endereco_Instituicao_sit == 1, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios1',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios1">
                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                    </label>

                    {!! Form::radio('Endereco_Instituicao_sit', '0', $n_processo->instituicao->Endereco_Instituicao_sit == 0, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios2',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios2">
                        <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                    </label>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="

form-floating">
                                    {!! Form::text('', null, ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'floatingCity']) !!}
                                    <label for="floatingCity">Cidade</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="State">
                                    <option selected>Mato Grosso</option>
                                    <option value="1">Oregon</option>
                                    <option value="2">DC</option>
                                </select>
                                <label for="floatingSelect">Estado</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                {!! Form::text('', null, ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'floatingZip']) !!}
                                <label for="floatingZip">CEP</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Comprovante de Endereço</label>

                            @if ($n_processo->Anexo1_Instituicao && $n_processo->instituicao->Anexo1_Instituicao)
                                <div class="icon">
                                    <h6 class="text-success"> <b>Documento enviado.</b>
                                        <a class="text-success small"
                                            href="{{ asset('storage/' . $n_processo->instituicao->Anexo1_Instituicao) }}"
                                            target="_blank">
                                            <i class="bi bi-file-earmark-pdf-fill"> Ver arquivo</i>
                                        </a>
                                    </h6>
                                </div>
                            @else
                                <h6 class="text-danger"> Documento não enviado </h6>
                            @endif

                            {!! Form::radio('Anexo1_Instituicao_sit', '1', $n_processo->instituicao->Anexo1_Instituicao_sit == 1, [
                                'class' => 'form-check-input',
                                'id' => 'gridRadios1',
                            ]) !!}
                            <label class="form-check-label" for="gridRadios1">
                                <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                            </label>

                            {!! Form::radio('Anexo1_Instituicao_sit', '0', $n_processo->instituicao->Anexo1_Instituicao_sit == 0, [
                                'class' => 'form-check-input',
                                'id' => 'gridRadios2',
                            ]) !!}
                            <label class="form-check-label" for="gridRadios2">
                                <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                            </label>

                        </div>
                        <div class="col-md-6">
                            <label>Comprovante de Endereço</label>

                            @if ($n_processo->Anexo2_Instituicao && $n_processo->instituicao->Anexo2_Instituicao)
                                <div class="icon">
                                    <h6 class="text-success"> <b>Documento enviado.</b>
                                        <a class="text-success small"
                                            href="{{ asset('storage/' . $n_processo->instituicao->Anexo2_Instituicao) }}"
                                            target="_blank">
                                            <i class="bi bi-file-earmark-pdf-fill"> Ver arquivo</i>
                                        </a>
                                    </h6>
                                </div>
                            @else
                                <h6 class="text-danger"> Documento não enviado </h6>
                            @endif

                            {!! Form::radio('Anexo2_Instituicao_sit', '1', $n_processo->instituicao->Anexo2_Instituicao_sit == 1, [
                                'class' => 'form-check-input',
                                'id' => 'gridRadios1',
                            ]) !!}
                            <label class="form-check-label" for="gridRadios1">
                                <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                            </label>

                            {!! Form::radio('Anexo2_Instituicao_sit', '0', $n_processo->instituicao->Anexo2_Instituicao_sit == 0, [
                                'class' => 'form-check-input',
                                'id' => 'gridRadios2',
                            ]) !!}
                            <label class="form-check-label" for="gridRadios2">
                                <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                            </label>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End floating Labels Form -->
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
