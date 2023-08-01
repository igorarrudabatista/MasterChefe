{{-- ITEM 2 --}}
<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
    {!! Form::open([
        'url' => route('trdigital.validar.resp_instituicao', ['id' => $n_processo->Resp_instituicao->id]),
        'method' => 'post',
    ]) !!}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><big><b> 2. </b></big> Identificação do <b> Responsável pela Instituição. </b></h5>

            <!-- Floating Labels Form -->
            <div class="row g-3">
                <div class="col-md-12">
                    <h5 class="text"> Nome </h6>
                        {!! Form::text('Nome_Resp_Instituicao', $n_processo->Resp_instituicao->Nome_Resp_Instituicao, [
                            'class' => 'form-control',
                            'id' => 'floatingName',
                            'disabled' => 'disabled',
                        ]) !!}

                        {!! Form::radio('Nome_Resp_Instituicao_sit', '1', $n_processo->Resp_instituicao->Nome_Resp_Instituicao_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                        </label>

                        {!! Form::radio('Nome_Resp_Instituicao_sit', '0', $n_processo->Resp_instituicao->Nome_Resp_Instituicao_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                        </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-floating">
                        {!! Form::number('Telefone_Resp_Instituicao', $n_processo->Resp_instituicao->Telefone_Resp_Instituicao, [
                            'placeholder' => 'a',
                            'class' => 'form-control',
                            'id' => 'floatingName',
                            'disabled' => 'disabled',
                        ]) !!}
                        <label for="floatingName"></label>
                        <label for="floatingEmail">Telefone</label>
                    </div>
                    {!! Form::radio('Telefone_Resp_Instituicao_sit', '1', $n_processo->Resp_instituicao->Telefone_Resp_Instituicao_sit == 1, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios1',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios1">
                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                    </label>

                    {!! Form::radio('Telefone_Resp_Instituicao_sit', '0', $n_processo->Resp_instituicao->Telefone_Resp_Instituicao_sit == 0, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios2',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios2">
                        <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                    </label>
                </div>

                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        {!! Form::email('Email_Resp_Instituicao', $n_processo->Resp_instituicao->Email_Resp_Instituicao, [
                            'placeholder' => 'a',
                            'class' => 'form-control',
                            'id' => 'floatingName',
                            'disabled' => 'disabled',
                        ]) !!}
                        <label for="floatingEmail">E-mail</label>
                    </div>
                    {!! Form::radio('Email_Resp_Instituicao_sit', '1', $n_processo->Resp_instituicao->Email_Resp_Instituicao_sit == 1, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios1',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios1">
                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                    </label>

                    {!! Form::radio('Email_Resp_Instituicao_sit', '0', $n_processo->Resp_instituicao->Email_Resp_Instituicao_sit == 0, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios2',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios2">
                        <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                    </label>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        {!! Form::text('Cargo_Resp_Instituicao', $n_processo->Resp_instituicao->Cargo_Resp_Instituicao, [
                            'placeholder' => 'a',
                            'class' => 'form-control',
                            'id' => 'floatingName',
                            'disabled' => 'disabled',
                        ]) !!}
                        <label for="floatingEmail">Cargo / Função</label>
                    </div>
                    {!! Form::radio('Cargo_Resp_Instituicao_sit', '1', $n_processo->Resp_instituicao->Cargo_Resp_Instituicao_sit == 1, [
                        'class' => 'form-check-input',
                        'id' => 'gridRadios1',
                    ]) !!}
                    <label class="form-check-label" for="gridRadios1">
                        <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                    </label>

                    {!! Form::radio('Cargo_Resp_Instituicao_sit', '0', $n_processo->Resp_instituicao->Cargo_Resp_Instituicao_sit == 0, [
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
                    {!! Form::textarea('End_Resp_Instituicao', $n_processo->Resp_instituicao->End_Resp_Instituicao, [
                        'placeholder' => 'a',
                        'class' => 'form-control',
                        'id' => 'floatingTextarea',
                        'disabled' => 'disabled',
                    ]) !!}
                    <label for="floatingTextarea">Endereço</label>
                </div>

                {!! Form::radio('End_Resp_Instituicao_sit', '1', $n_processo->Resp_instituicao->End_Resp_Instituicao_sit == 1, [
                    'class' => 'form-check-input',
                    'id' => 'gridRadios1',
                ]) !!}
                <label class="form-check-label" for="gridRadios1">
                    <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                </label>

                {!! Form::radio('End_Resp_Instituicao_sit', '0', $n_processo->Resp_instituicao->End_Resp_Instituicao_sit == 0, [
                    'class' => 'form-check-input',
                    'id' => 'gridRadios2',
                ]) !!}
                <label class="form-check-label" for="gridRadios2">
                    <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                </label>

                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                {!! Form::text('', $n_processo->Resp_instituicao->Cidade, [
                                    'placeholder' => 'a',
                                    'class' => 'form-control',
                                    'id' => 'floatingCity',
                                    'disabled' => 'disabled',
                                ]) !!}
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
                        <div class="form-floating">
                            {!! Form::file('Anexo1_Resp_Instituicao', ['class' => 'form-control', 'disabled' => 'disabled']) !!}
                            <label for="floatingZip">Anexar RG ou CPF</label>
                        </div>
                        {!! Form::radio('Anexo1_Resp_Instituicao_sit', '1', $n_processo->Resp_instituicao->Anexo1_Resp_Instituicao_sit == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                        </label>

                        {!! Form::radio('Anexo1_Resp_Instituicao_sit', '0', $n_processo->Resp_instituicao->Anexo1_Resp_Instituicao_sit == 0, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios2',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios2">
                            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            {!! Form::file('Anexo2_Resp_Instituicao', ['class' => 'form-control']) !!}
                            <label for="floatingZip">Anexar Comprovante de Endereço</label>
                        </div>
                        {!! Form::radio('Anexo2_Resp_Instituicao', '1', $n_processo->Resp_instituicao->Anexo2_Resp_Instituicao == 1, [
                            'class' => 'form-check-input',
                            'id' => 'gridRadios1',
                        ]) !!}
                        <label class="form-check-label" for="gridRadios1">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                        </label>

                        {!! Form::radio('Anexo2_Resp_Instituicao', '0', $n_processo->Resp_instituicao->Anexo2_Resp_Instituicao == 0, [
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
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
