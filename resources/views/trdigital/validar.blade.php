@extends('base.novabase')
@section('content')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <main id="main" class="main">


        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-upgrade">
                            <div class="card-header">


                                <!--//row-->

                                <section id="multiple-column-form">
                                    <div class="row match-height">
                                        <div class="col-12">

                                            <br>



                                            <div class="text-center mb-5">
                                                <img src="{{ asset('/images/i.webp') }}" height="88" class='mb-4'>
                                                <h3>FORMULÁRIO</h3>
                                                <p>Crie os seus FORMULÁRIO aqui!</p>

                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        {{-- 
                                                      {!! Form::model($n_processo, [
                                                            'method' => 'PATCH',
                                                            'route' => ['trdigital.validar', $n_processo->id],
                                                            'enctype' => 'multipart/form-data',
                                                        ]) !!} --}}



                                                        @if (auth()->check())
                                                            <input type="hidden" name="user_id"
                                                                value="{{ auth()->user()->id }}">
                                                        @endif


                                                        <select name="Orgao_Concedente" id="Orgao_Concedente"
                                                            class="form-control" required>
                                                            <option value="" disabled> Selecione o Orgão Concedente
                                                            </option>
                                                            @foreach ($orgaos as $orgaos_)
                                                                <option value="{{ $orgaos_->id }}">{{ $orgaos_->Nome }} -
                                                                    {{ $orgaos_->Sigla }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                                    data-bs-toggle="list" href="#list-home" role="tab"
                                                    aria-controls="list-home"><big><b> 1. </b></big> Ofícios</a>
                                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                    data-bs-toggle="list" href="#list-profile" role="tab"
                                                    aria-controls="list-profile"><big><b> 2. </b> </big>
                                                    Identificação do Responsável
                                                    pela Instituição. </b></a>
                                                <a class="list-group-item list-group-item-action" id="list-messages-list"
                                                    data-bs-toggle="list" href="#list-messages" role="tab"
                                                    aria-controls="list-messages"><b> 3.</b> </big>Identificação da
                                                    Instituição
                                                    Proponente </b> </a>
                                                <a class="list-group-item list-group-item-action" id="list-settings-list"
                                                    data-bs-toggle="list" href="#list-settings" role="tab"
                                                    aria-controls="list-settings"><big><b> 4. </b> </big> Identificação do
                                                    Responsável pelo Projeto </b> </a>
                                                <a class="list-group-item list-group-item-action" id="list-atas-list"
                                                    data-bs-toggle="list" href="#list-atas" role="tab"
                                                    aria-controls="list-atas"><big> <b> 5. </b> </big></b> Atas, Certidões,
                                                    Comprovantes e Declarações </a>
                                                <a class="list-group-item list-group-item-action" id="list-projeto-list"
                                                    data-bs-toggle="list" href="#list-projeto" role="tab"
                                                    aria-controls="list-projeto"> <b> <big> 6. </big> </b> Identificação do
                                                    Projeto </a>

                                            </div>
                                        </div>

                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">

                                                {{-- ITEM 1 --}}
                                                <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                                    aria-labelledby="list-home-list">

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title"> <big><b> A. </b> </big> Ofício de
                                                                encaminhamento com o
                                                                <b>número da nova proposta </b>
                                                            </h5>

                                                            <div class="col-sm-10">
                                                                @if ($n_processo->Doc_anexo1 && $n_processo->Doc_anexo1->Comp_Oficio)
                                                                    <div class="icon">
                                                                        <h5 class="text-success"> Ofício enviado.
                                                                            <a class="text-success small"
                                                                                href="{{ asset('storage/' . $n_processo->Doc_anexo1->Comp_Oficio) }}"
                                                                                target="_blank">
                                                                                <i class="bi bi-file-earmark-pdf-fill"> Ver
                                                                                    arquivo</i>
                                                                        </h5>
                                                                        </a>
                                                                    </div>
                                                                @else
                                                                    <h6 class="text-danger"> Você ainda não enviou este
                                                                        arquivo. </h6>
                                                                @endif
                                                                {!! Form::file('Comp_Oficio', ['class' => 'form-control']) !!}

                                                            </div>


                                                        </div>
                                                        <br>
                                                        <div class="card-body">
                                                            <h5 class="card-title"> <big> <b> B. </b> </big> Ofício com a
                                                                destinação da emenda
                                                                emitido e <b> assinado pelo Parlamentar.</b></h5>

                                                            <div class="row mb-3">

                                                                <div class="col-sm-10">
                                                                    @if ($n_processo->Doc_anexo1 && $n_processo->Doc_anexo1->Comp_Assinado)
                                                                        <div class="icon">
                                                                            <h5 class="text-success"> Ofício enviado.
                                                                                <a class="text-success small"
                                                                                    href="{{ asset('storage/' . $n_processo->Doc_anexo1->Comp_Oficio) }}"
                                                                                    target="_blank">
                                                                                    <i class="bi bi-file-earmark-pdf-fill">
                                                                                        Ver arquivo</i>
                                                                            </h5>
                                                                            </a>
                                                                        </div>
                                                                    @else
                                                                        <h6 class="text-danger"> Você ainda não enviou este
                                                                            arquivo. </h6>
                                                                    @endif
                                                                    {!! Form::file('Comp_Assinado', ['class' => 'form-control']) !!}

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}


                                                {{-- ITEM 2 --}}
                                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                                    aria-labelledby="list-profile-list">
                                                    {!! Form::open([
                                                        'url' => route('trdigital.validar.resp_instituicao', ['id' => $n_processo->Resp_instituicao->id]),
                                                        'method' => 'post',
                                                    ]) !!}
                                                    <div class="card-body">
                                                        <h5 class="card-title"> <big><b> 2. </b> </big>
                                                            Identificação do <b> Responsável
                                                                pela Instituição. </b></h5>


                                                        <!-- Floating Labels Form -->
                                                        <div class="row g-3">
                                                            <div class="col-md-12">
                                                                <h5 class="text"> Nome </h6>
                                                                    {!! Form::text('Nome_Resp_Instituicao', $n_processo->Resp_instituicao->Nome_Resp_Instituicao, [
                                                                        'class' => 'form-control',
                                                                        'id' => 'floatingName',
                                                                        'disabled' => 'disabled',
                                                                    ]) !!}

                                                                    {!! Form::radio(
                                                                        'Nome_Resp_Instituicao_sit',
                                                                        '1',
                                                                        $n_processo->Resp_instituicao->Nome_Resp_Instituicao_sit == 1,
                                                                        [
                                                                            'class' => 'form-check-input',
                                                                            'id' => 'gridRadios1',
                                                                        ],
                                                                    ) !!}
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                        <span class="badge bg-success"><i
                                                                                class="bi bi-check-circle me-1"></i>
                                                                            Validado</span>
                                                                    </label>

                                                                    {!! Form::radio(
                                                                        'Nome_Resp_Instituicao_sit',
                                                                        '0',
                                                                        $n_processo->Resp_instituicao->Nome_Resp_Instituicao_sit == 0,
                                                                        [
                                                                            'class' => 'form-check-input',
                                                                            'id' => 'gridRadios2',
                                                                        ],
                                                                    ) !!}
                                                                    <label class="form-check-label" for="gridRadios2">
                                                                        <span class="badge bg-warning text-dark"><i
                                                                                class="bi bi-exclamation-triangle me-1"></i>
                                                                            Corrigir</span>
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
                                                                {!! Form::radio(
                                                                    'Telefone_Resp_Instituicao_sit',
                                                                    '1',
                                                                    $n_processo->Resp_instituicao->Telefone_Resp_Instituicao_sit == 1,
                                                                    [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios1',
                                                                    ],
                                                                ) !!}
                                                                <label class="form-check-label" for="gridRadios1">
                                                                    <span class="badge bg-success"><i
                                                                            class="bi bi-check-circle me-1"></i>
                                                                        Validado</span>
                                                                </label>

                                                                {!! Form::radio(
                                                                    'Telefone_Resp_Instituicao_sit',
                                                                    '0',
                                                                    $n_processo->Resp_instituicao->Telefone_Resp_Instituicao_sit == 0,
                                                                    [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios2',
                                                                    ],
                                                                ) !!}
                                                                <label class="form-check-label" for="gridRadios2">
                                                                    <span class="badge bg-warning text-dark"><i
                                                                            class="bi bi-exclamation-triangle me-1"></i>
                                                                        Corrigir</span>
                                                                </label>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-floating">
                                                                    {!! Form::email('Email_Resp_Instituicao', $n_processo->Resp_instituicao->Email_Resp_Instituicao, [
                                                                        'placeholder' => 'a',
                                                                        'class' => 'form-control',
                                                                        'id' => 'floatingName',
                                                                        'disabled' => 'disabled',
                                                                    ]) !!}
                                                                    <label for="floatingEmail">E-mail</label>
                                                                </div>
                                                                {!! Form::radio(
                                                                    'Email_Resp_Instituicao_sit',
                                                                    '1',
                                                                    $n_processo->Resp_instituicao->Email_Resp_Instituicao_sit == 1,
                                                                    [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios1',
                                                                    ],
                                                                ) !!}
                                                                <label class="form-check-label" for="gridRadios1">
                                                                    <span class="badge bg-success"><i
                                                                            class="bi bi-check-circle me-1"></i>
                                                                        Validado</span>
                                                                </label>

                                                                {!! Form::radio(
                                                                    'Email_Resp_Instituicao_sit',
                                                                    '0',
                                                                    $n_processo->Resp_instituicao->Email_Resp_Instituicao_sit == 0,
                                                                    [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios2',
                                                                    ],
                                                                ) !!}
                                                                <label class="form-check-label" for="gridRadios2">
                                                                    <span class="badge bg-warning text-dark"><i
                                                                            class="bi bi-exclamation-triangle me-1"></i>
                                                                        Corrigir</span>
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
                                                                    <label for="floatingEmail">Cargo /
                                                                        Função</label>
                                                                </div>
                                                                {!! Form::radio(
                                                                    'Cargo_Resp_Instituicao_sit',
                                                                    '1',
                                                                    $n_processo->Resp_instituicao->Cargo_Resp_Instituicao_sit == 1,
                                                                    [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios1',
                                                                    ],
                                                                ) !!}
                                                                <label class="form-check-label" for="gridRadios1">
                                                                    <span class="badge bg-success"><i
                                                                            class="bi bi-check-circle me-1"></i>
                                                                        Validado</span>
                                                                </label>

                                                                {!! Form::radio(
                                                                    'Cargo_Resp_Instituicao_sit',
                                                                    '0',
                                                                    $n_processo->Resp_instituicao->Cargo_Resp_Instituicao_sit == 0,
                                                                    [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios2',
                                                                    ],
                                                                ) !!}
                                                                <label class="form-check-label" for="gridRadios2">
                                                                    <span class="badge bg-warning text-dark"><i
                                                                            class="bi bi-exclamation-triangle me-1"></i>
                                                                        Corrigir</span>
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
                                                                <span class="badge bg-success"><i
                                                                        class="bi bi-check-circle me-1"></i>
                                                                    Validado</span>
                                                            </label>

                                                            {!! Form::radio('End_Resp_Instituicao_sit', '0', $n_processo->Resp_instituicao->End_Resp_Instituicao_sit == 0, [
                                                                'class' => 'form-check-input',
                                                                'id' => 'gridRadios2',
                                                            ]) !!}
                                                            <label class="form-check-label" for="gridRadios2">
                                                                <span class="badge bg-warning text-dark"><i
                                                                        class="bi bi-exclamation-triangle me-1"></i>
                                                                    Corrigir</span>
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
                                                                        <select class="form-select" id="floatingSelect"
                                                                            aria-label="State">
                                                                            <option selected>Mato Grosso
                                                                            </option>
                                                                            <option value="1">Oregon
                                                                            </option>
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
                                                                    {!! Form::radio(
                                                                        'Anexo1_Resp_Instituicao_sit',
                                                                        '1',
                                                                        $n_processo->Resp_instituicao->Anexo1_Resp_Instituicao_sit == 1,
                                                                        [
                                                                            'class' => 'form-check-input',
                                                                            'id' => 'gridRadios1',
                                                                        ],
                                                                    ) !!}
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                        <span class="badge bg-success"><i
                                                                                class="bi bi-check-circle me-1"></i>
                                                                            Validado</span>
                                                                    </label>

                                                                    {!! Form::radio(
                                                                        'Anexo1_Resp_Instituicao_sit',
                                                                        '0',
                                                                        $n_processo->Resp_instituicao->Anexo1_Resp_Instituicao_sit == 0,
                                                                        [
                                                                            'class' => 'form-check-input',
                                                                            'id' => 'gridRadios2',
                                                                        ],
                                                                    ) !!}
                                                                    <label class="form-check-label" for="gridRadios2">
                                                                        <span class="badge bg-warning text-dark"><i
                                                                                class="bi bi-exclamation-triangle me-1"></i>
                                                                            Corrigir</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        {!! Form::file('Anexo2_Resp_Instituicao', ['class' => 'form-control']) !!}

                                                                        <label for="floatingZip">Anexar
                                                                            Comprovante de Endereço</label>


                                                                    </div>
                                                                    {!! Form::radio('Anexo2_Resp_Instituicao', '1', $n_processo->Resp_instituicao->Anexo2_Resp_Instituicao == 1, [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios1',
                                                                    ]) !!}
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                        <span class="badge bg-success"><i
                                                                                class="bi bi-check-circle me-1"></i>
                                                                            Validado</span>
                                                                    </label>

                                                                    {!! Form::radio('Anexo2_Resp_Instituicao', '0', $n_processo->Resp_instituicao->Anexo2_Resp_Instituicao == 0, [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios2',
                                                                    ]) !!}
                                                                    <label class="form-check-label" for="gridRadios2">
                                                                        <span class="badge bg-warning text-dark"><i
                                                                                class="bi bi-exclamation-triangle me-1"></i>
                                                                            Corrigir</span>
                                                                    </label>
                                                                </div>

                                                                <div class="text-center">
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-lg">Salvar</button>

                                                                </div>
                                                                <!-- End floating Labels Form -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {!! Form::close() !!}


                                                {{-- ITEM 3 --}}
                                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                                    aria-labelledby="list-messages-list">
                                                    {!! Form::open([
                                                        'url' => route('trdigital.validar.instituicao', ['id' => $n_processo->Instituicao->id]),
                                                        'method' => 'post',
                                                    ]) !!}
                                                    <div class="card-body">
                                                        <h5 class="card-title"> <big> <b> 3. </b>
                                                            </big>Identificação da <b> Instituição Proponente </b>
                                                        </h5>
                                                        {!! Form::open([
                                                            'url' => route('trdigital.validar.instituicao', ['id' => $n_processo->Instituicao->id]),
                                                            'method' => 'post',
                                                        ]) !!}
                                                        <!-- Floating Labels Form -->
                                                        <div class="row g-3">
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    {!! Form::text('Nome_Instituicao', $n_processo->instituicao->Nome_Instituicao, [
                                                                        'placeholder' => 'a',
                                                                        'class' => 'form-control',
                                                                    ]) !!}

                                                                    <label for="floatingName">Nome da
                                                                        Instituição</label>
                                                                </div>
                                                                {!! Form::radio('Nome_Instituicao_sit', '1', $n_processo->instituicao->Nome_Instituicao_sit == 1, [
                                                                    'class' => 'form-check-input',
                                                                    'id' => 'gridRadios1',
                                                                ]) !!}
                                                                <label class="form-check-label" for="gridRadios1">
                                                                    <span class="badge bg-success"><i
                                                                            class="bi bi-check-circle me-1"></i>
                                                                        Validado</span>
                                                                </label>

                                                                {!! Form::radio('Nome_Instituicao_sit', '0', $n_processo->instituicao->Nome_Instituicao_sit == 0, [
                                                                    'class' => 'form-check-input',
                                                                    'id' => 'gridRadios2',
                                                                ]) !!}
                                                                <label class="form-check-label" for="gridRadios2">
                                                                    <span class="badge bg-warning text-dark"><i
                                                                            class="bi bi-exclamation-triangle me-1"></i>
                                                                        Corrigir</span>
                                                                </label>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        {!! Form::number('CNPJ_Instituicao', $n_processo->instituicao->CNPJ_Instituicao, [
                                                                            'placeholder' => 'a',
                                                                            'class' => 'form-control',
                                                                        ]) !!}

                                                                        <label for="floatingName"></label>
                                                                        <label for="floatingEmail">CNPJ</label>

                                                                    </div>
                                                                    {!! Form::radio('CNPJ_Instituicao_sit', '1', $n_processo->instituicao->CNPJ_Instituicao_sit == 1, [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios1',
                                                                    ]) !!}
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                        <span class="badge bg-success"><i
                                                                                class="bi bi-check-circle me-1"></i>
                                                                            Validado</span>
                                                                    </label>

                                                                    {!! Form::radio('CNPJ_Instituicao_sit', '0', $n_processo->instituicao->CNPJ_Instituicao_sit == 0, [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios2',
                                                                    ]) !!}
                                                                    <label class="form-check-label" for="gridRadios2">
                                                                        <span class="badge bg-warning text-dark"><i
                                                                                class="bi bi-exclamation-triangle me-1"></i>
                                                                            Corrigir</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-floating">
                                                                        {!! Form::number('Telefone_Instituicao', $n_processo->instituicao->Telefone_Instituicao, [
                                                                            'placeholder' => 'a',
                                                                            'class' => 'form-control',
                                                                        ]) !!}

                                                                        <label for="floatingName"></label>
                                                                        <label for="floatingEmail">Telefone</label>
                                                                    </div>
                                                                    {!! Form::radio('Telefone_Instituicao_sit', '1', $n_processo->instituicao->Telefone_Instituicao_sit == 1, [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios1',
                                                                    ]) !!}
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                        <span class="badge bg-success"><i
                                                                                class="bi bi-check-circle me-1"></i>
                                                                            Validado</span>
                                                                    </label>

                                                                    {!! Form::radio('Telefone_Instituicao_sit', '0', $n_processo->instituicao->Telefone_Instituicao_sit == 0, [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios2',
                                                                    ]) !!}
                                                                    <label class="form-check-label" for="gridRadios2">
                                                                        <span class="badge bg-warning text-dark"><i
                                                                                class="bi bi-exclamation-triangle me-1"></i>
                                                                            Corrigir</span>
                                                                    </label>
                                                                </div>


                                                                <div class="col-12">
                                                                    <div class="form-floating">
                                                                        {!! Form::textarea('Endereco_Instituicao', $n_processo->instituicao->Endereco_Instituicao, [
                                                                            'placeholder' => 'a',
                                                                            'class' => 'form-control',
                                                                            'id' => 'floatingTextarea',
                                                                        ]) !!}
                                                                        <label for="floatingTextarea">Endereço</label>
                                                                    </div>
                                                                    {!! Form::radio('Endereco_Instituicao_sit', '1', $n_processo->instituicao->Endereco_Instituicao_sit == 1, [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios1',
                                                                    ]) !!}
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                        <span class="badge bg-success"><i
                                                                                class="bi bi-check-circle me-1"></i>
                                                                            Validado</span>
                                                                    </label>

                                                                    {!! Form::radio('Endereco_Instituicao_sit', '0', $n_processo->instituicao->Endereco_Instituicao_sit == 0, [
                                                                        'class' => 'form-check-input',
                                                                        'id' => 'gridRadios2',
                                                                    ]) !!}
                                                                    <label class="form-check-label" for="gridRadios2">
                                                                        <span class="badge bg-warning text-dark"><i
                                                                                class="bi bi-exclamation-triangle me-1"></i>
                                                                            Corrigir</span>
                                                                    </label>

                                                                    <div class="row">

                                                                        <div class="col-md-4">
                                                                            <div class="col-md-12">
                                                                                <div class="form-floating">
                                                                                    {!! Form::text('', null, ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'floatingCity']) !!}
                                                                                    <label
                                                                                        for="floatingCity">Cidade</label>


                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-floating mb-3">
                                                                                <select class="form-select"
                                                                                    id="floatingSelect"
                                                                                    aria-label="State">
                                                                                    <option selected>Mato Grosso
                                                                                    </option>
                                                                                    <option value="1">Oregon
                                                                                    </option>
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
                                                                                {!! Form::file('Anexo1_Instituicao', ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                <label for="floatingZip">Anexar Comprovante
                                                                                    de Endereço</label>

                                                                            </div>
                                                                            {!! Form::radio('Anexo1_Instituicao_sit', '1', $n_processo->instituicao->Anexo1_Instituicao_sit == 1, [
                                                                                'class' => 'form-check-input',
                                                                                'id' => 'gridRadios1',
                                                                            ]) !!}
                                                                            <label class="form-check-label"
                                                                                for="gridRadios1">
                                                                                <span class="badge bg-success"><i
                                                                                        class="bi bi-check-circle me-1"></i>
                                                                                    Validado</span>
                                                                            </label>

                                                                            {!! Form::radio('Anexo1_Instituicao_sit', '0', $n_processo->instituicao->Anexo1_Instituicao_sit == 0, [
                                                                                'class' => 'form-check-input',
                                                                                'id' => 'gridRadios2',
                                                                            ]) !!}
                                                                            <label class="form-check-label"
                                                                                for="gridRadios2">
                                                                                <span class="badge bg-warning text-dark"><i
                                                                                        class="bi bi-exclamation-triangle me-1"></i>
                                                                                    Corrigir</span>
                                                                            </label>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-floating">
                                                                                {!! Form::file('Anexo2_Instituicao', ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                <label for="floatingZip">Anexar Cartão CNPJ
                                                                                </label>
                                                                            </div>
                                                                            {!! Form::radio('Anexo2_Instituicao_sit', '1', $n_processo->instituicao->Anexo2_Instituicao_sit == 1, [
                                                                                'class' => 'form-check-input',
                                                                                'id' => 'gridRadios1',
                                                                            ]) !!}
                                                                            <label class="form-check-label"
                                                                                for="gridRadios1">
                                                                                <span class="badge bg-success"><i
                                                                                        class="bi bi-check-circle me-1"></i>
                                                                                    Validado</span>
                                                                            </label>

                                                                            {!! Form::radio('Anexo2_Instituicao_sit', '0', $n_processo->instituicao->Anexo2_Instituicao_sit == 0, [
                                                                                'class' => 'form-check-input',
                                                                                'id' => 'gridRadios2',
                                                                            ]) !!}
                                                                            <label class="form-check-label"
                                                                                for="gridRadios2">
                                                                                <span class="badge bg-warning text-dark"><i
                                                                                        class="bi bi-exclamation-triangle me-1"></i>
                                                                                    Corrigir</span>
                                                                            </label>

                                                                        </div>


                                                                        <div class="text-center">
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-lg">Salvar</button>

                                                                        </div>
                                                                        <!-- End floating Labels Form -->

                                                                    </div>  
                                                                </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                            
                                                            {!! Form::close() !!}




                                                            {{-- ITEM 4 --}}
                                                            <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                                                aria-labelledby="list-settings-list">
                                                                <div class="card-body">
                                                                    <h5 class="card-title"> <big> <b> 4. </b>
                                                                        </big>Identificação
                                                                        do <b> Responsável pelo Projeto </b></h5>
                                                                        {!! Form::open([
                                                                          'url' => route('trdigital.validar.resp_projeto', ['id' => $n_processo->Resp_projeto->id]),
                                                                          'method' => 'post',
                                                                      ]) !!}
                  
                                                                    <!-- Floating Labels Form -->
                                                                    <form class="row g-3">
                                                                        <div class="col-md-12">
                                                                            <div class="form-floating">
                                                                                {!! Form::text('Nome_Resp_projeto', $n_processo->Resp_projeto->Nome_Resp_projeto, [
                                                                                    'placeholder' => 'Nome Completo',
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingCity',
                                                                                ]) !!}

                                                                                <label for="floatingName">Nome
                                                                                    Completo</label>
                                                                            </div>
                                                                            {!! Form::radio('Nome_Resp_projeto_sit', '1', $n_processo->Resp_projeto->Nome_Resp_projeto_sit == 1, [
                                                                              'class' => 'form-check-input',
                                                                              'id' => 'gridRadios1',
                                                                          ]) !!}
                                                                          <label class="form-check-label"
                                                                              for="gridRadios1">
                                                                              <span class="badge bg-success"><i
                                                                                      class="bi bi-check-circle me-1"></i>
                                                                                  Validado</span>
                                                                          </label>

                                                                          {!! Form::radio('Nome_Resp_projeto_sit', '0', $n_processo->Resp_projeto->Nome_Resp_projeto_sit == 0, [
                                                                              'class' => 'form-check-input',
                                                                              'id' => 'gridRadios2',
                                                                          ]) !!}
                                                                          <label class="form-check-label"
                                                                              for="gridRadios2">
                                                                              <span class="badge bg-warning text-dark"><i
                                                                                      class="bi bi-exclamation-triangle me-1"></i>
                                                                                  Corrigir</span>
                                                                          </label>                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-floating">
                                                                                    {!! Form::text('Telefone_Resp_projeto', $n_processo->Resp_projeto->Telefone_Resp_projeto, [
                                                                                        'placeholder' => 'Nome Completo',
                                                                                        'class' => 'form-control',
                                                                                        'id' => 'floatingCity',
                                                                                    ]) !!}

                                                                                    <label for="floatingName"></label>
                                                                                    <label
                                                                                        for="floatingEmail">Telefone</label>
                                                                                </div>
                                                                                {!! Form::radio('Telefone_Resp_projeto_sit', '1', $n_processo->Resp_projeto->Telefone_Resp_projeto_sit == 1, [
                                                                                  'class' => 'form-check-input',
                                                                                  'id' => 'gridRadios1',
                                                                              ]) !!}
                                                                              <label class="form-check-label"
                                                                                  for="gridRadios1">
                                                                                  <span class="badge bg-success"><i
                                                                                          class="bi bi-check-circle me-1"></i>
                                                                                      Validado</span>
                                                                              </label>
    
                                                                              {!! Form::radio('Telefone_Resp_projeto_sit', '0', $n_processo->Resp_projeto->Telefone_Resp_projeto_sit == 0, [
                                                                                  'class' => 'form-check-input',
                                                                                  'id' => 'gridRadios2',
                                                                              ]) !!}
                                                                              <label class="form-check-label"
                                                                                  for="gridRadios2">
                                                                                  <span class="badge bg-warning text-dark"><i
                                                                                          class="bi bi-exclamation-triangle me-1"></i>
                                                                                      Corrigir</span>
                                                                              </label>            
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-floating">

                                                                                    {!! Form::number('', null, ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'floatingName']) !!}
                                                                                    <label for="floatingName"></label>
                                                                                    <label for="floatingEmail">CPF</label>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-floating">
                                                                                    {!! Form::number('', null, ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'floatingName']) !!}
                                                                                    <label for="floatingName"></label>
                                                                                    <label for="floatingEmail">RG</label>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <br>

                                                                        <div class="col-12">
                                                                            <div class="form-floating">
                                                                                {!! Form::text('Endereco_Resp_projeto', $n_processo->Resp_projeto->Endereco_Resp_projeto, [
                                                                                    'placeholder' => 'Nome Completo',
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingCity',
                                                                                ]) !!}


                                                                                <label
                                                                                    for="floatingTextarea">Endereço</label>
                                                                            </div> {!! Form::radio('Endereco_Resp_projeto_sit', '1', $n_processo->Resp_projeto->Endereco_Resp_projeto_sit == 1, [
                                                                              'class' => 'form-check-input',
                                                                              'id' => 'gridRadios1',
                                                                          ]) !!}
                                                                          <label class="form-check-label"
                                                                              for="gridRadios1">
                                                                              <span class="badge bg-success"><i
                                                                                      class="bi bi-check-circle me-1"></i>
                                                                                  Validado</span>
                                                                          </label>

                                                                          {!! Form::radio('Endereco_Resp_projeto_sit', '0', $n_processo->Resp_projeto->Endereco_Resp_projeto_sit == 0, [
                                                                              'class' => 'form-check-input',
                                                                              'id' => 'gridRadios2',
                                                                          ]) !!}
                                                                          <label class="form-check-label"
                                                                              for="gridRadios2">
                                                                              <span class="badge bg-warning text-dark"><i
                                                                                      class="bi bi-exclamation-triangle me-1"></i>
                                                                                  Corrigir</span>
                                                                          </label>   
                                                                            <div class="row">

                                                                                <div class="col-md-4">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-floating">
                                                                                            {!! Form::text('', null, ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'floatingCity']) !!}
                                                                                            <label
                                                                                                for="floatingCity">Cidade</label>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4">
                                                                                    <div class="form-floating mb-3">
                                                                                        <select class="form-select"
                                                                                            id="floatingSelect"
                                                                                            aria-label="State">
                                                                                            <option selected>Mato Grosso
                                                                                            </option>
                                                                                            <option value="1">Oregon
                                                                                            </option>
                                                                                            <option value="2">DC
                                                                                            </option>
                                                                                        </select>
                                                                                        <label
                                                                                            for="floatingSelect">Estado</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-floating">
                                                                                        {!! Form::text('', null, ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'floatingZip']) !!}
                                                                                        <label
                                                                                            for="floatingZip">CEP</label>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="text-center">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary btn-lg">Salvar</button>

                                                                                </div>

                                                                                <!-- End floating Labels Form -->

                                                                            </div>
                                                                        </div>


                                                                </div>
                                                            </div>
                                                            {!! Form::close() !!}

                                                            <div class="tab-pane fade" id="list-atas" role="tabpanel"
                                                                aria-labelledby="list-atas-list">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"><b> <big> 5. </b> </big>
                                                                            Atas,
                                                                            Certidões, Comprovantes e Declarações (Anexar):
                                                                        </h5>
                                                                        {!! Form::open([
                                                                          'url' => route('trdigital.validar.documentos', ['id' => $n_processo->Doc_anexo2->id]),
                                                                          'method' => 'post',
                                                                      ]) !!}
                                                                        <!-- Default Accordion -->
                                                                        <div class="accordion" id="accordionExample">
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingOne">
                                                                                    <button class="accordion-button"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#collapseOne"
                                                                                        aria-expanded="true"
                                                                                        aria-controls="collapseOne">
                                                                                        <strong> <big> A) </strong> </big>
                                                                                        Cópia da
                                                                                        Ata da Assembleia de Fundação ou
                                                                                        Constituição ou do Estatuto Social,
                                                                                        ou
                                                                                        Regimento Interno, conforme o caso
                                                                                    </button>

                                                                                </h2>
                                                                                <div id="collapseOne"
                                                                                    class="accordion-collapse collapse show"
                                                                                    aria-labelledby="headingOne"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo1', ['placeholder' => 'a', 'class' => 'form-control', 'id' => 'formFile']) !!}

                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo1_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo1_sit == 1, [
                                                                  'class' => 'form-check-input',
                                                                  'id' => 'gridRadios1',
                                                              ]) !!}
                                                              <label class="form-check-label" for="gridRadios1">
                                                                  <span class="badge bg-success"><i
                                                                          class="bi bi-check-circle me-1"></i>
                                                                      Validado</span>
                                                              </label>

                                                              {!! Form::radio('Doc_Anexo2_Anexo1_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo1_sit == 0, [
                                                                  'class' => 'form-check-input',
                                                                  'id' => 'gridRadios2',
                                                              ]) !!}
                                                              <label class="form-check-label" for="gridRadios2">
                                                                  <span class="badge bg-warning text-dark"><i
                                                                          class="bi bi-exclamation-triangle me-1"></i>
                                                                      Corrigir</span>
                                                              </label>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingTwo">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#collapseTwo"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapseTwo">
                                                                                        <strong> <big> B) </strong> </big>
                                                                                        Certidão
                                                                                        de Habilitação Plena
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="collapseTwo"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingTwo"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo2', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo2_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo2_sit == 1, [
                                                                  'class' => 'form-check-input',
                                                                  'id' => 'gridRadios1',
                                                              ]) !!}
                                                              <label class="form-check-label" for="gridRadios1">
                                                                  <span class="badge bg-success"><i
                                                                          class="bi bi-check-circle me-1"></i>
                                                                      Validado</span>
                                                              </label>

                                                              {!! Form::radio('Doc_Anexo2_Anexo2_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo2_sit == 0, [
                                                                  'class' => 'form-check-input',
                                                                  'id' => 'gridRadios2',
                                                              ]) !!}
                                                              <label class="form-check-label" for="gridRadios2">
                                                                  <span class="badge bg-warning text-dark"><i
                                                                          class="bi bi-exclamation-triangle me-1"></i>
                                                                      Corrigir</span>
                                                              </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#collapseThree"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapseThree">
                                                                                        <strong> <big> C) </strong> </big>
                                                                                        Certidão
                                                                                        de ausência de irregularidades /
                                                                                        impedimentos perante TCU / TCE e
                                                                                        CGE;

                                                                                    </button>
                                                                                </h2>
                                                                                <div id="collapseThree"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo3', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo3_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo3_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#d"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="d">
                                                                                        <strong> <big> D) </strong> </big>
                                                                                        Cópia da
                                                                                        Ata da Assembleia de Fundação ou
                                                                                        Constituição ou do Estatuto Social,
                                                                                        ou
                                                                                        Regimento Interno, conforme o caso.

                                                                                    </button>
                                                                                </h2>
                                                                                <div id="d"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo4', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo4_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo4_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo4_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo4_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#e"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="e">
                                                                                        <strong> <big> E) </strong> </big>
                                                                                        Cópia do
                                                                                        Ato de Eleição de nomeação ou posse
                                                                                        da Mesa
                                                                                        Diretora e Dirigente, conforme o
                                                                                        caso.


                                                                                    </button>
                                                                                </h2>
                                                                                <div id="e"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo5', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo5_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo5_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo5_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo5_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#f"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="f">
                                                                                        <strong> <big> F) </strong> </big>
                                                                                        Comprovante de Abertura de Conta e
                                                                                        Extrato
                                                                                        de Conta Bancária zerada e
                                                                                        específica para a
                                                                                        formalização do Instrumento.

                                                                                    </button>
                                                                                </h2>
                                                                                <div id="f"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo6', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo6_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo6_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo6_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo6_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#g"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="g">
                                                                                        <strong> <big> G) </strong>
                                                                                        </big>Comprovação da qualificação
                                                                                        técnica e
                                                                                        da capacidade operacional, mediante
                                                                                        comprovação de funcionamento
                                                                                        regular.

                                                                                    </button>
                                                                                </h2>
                                                                                <div id="g"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo7', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo7_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo7_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo7_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo7_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#h"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="h">
                                                                                        <strong> <big> H) </strong> </big>
                                                                                        Comprovação de Experiência Prévia na
                                                                                        Realização de Parcerias com objetos
                                                                                        semelhantes – (Anexar Cópia de
                                                                                        Publicações e
                                                                                        Parcerias executadas ou em
                                                                                        andamento).

                                                                                    </button>
                                                                                </h2>
                                                                                <div id="h"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo8', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo8_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo8_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo8_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo8_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#i"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="i">
                                                                                        <strong> <big> I) </strong> </big>
                                                                                        Declaração que comprove a
                                                                                        regularidade do
                                                                                        mandato de sua diretoria, da
                                                                                        realização de
                                                                                        assembleias ordinárias e da
                                                                                        atividade
                                                                                        regular, com validade restrita ao
                                                                                        exercício
                                                                                        de sua emissão, quando for o caso.

                                                                                    </button>
                                                                                </h2>
                                                                                <div id="i"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo9', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo9_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo9_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo9_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo9_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#j"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="j">
                                                                                        <strong> <big> J) </strong> </big>
                                                                                        Declaração de Capacidade
                                                                                        Administrativa,
                                                                                        Técnica e Gerencial Para a Execução
                                                                                        do Plano
                                                                                        De Trabalho (modelo em anexo);


                                                                                    </button>
                                                                                </h2>
                                                                                <div id="j"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo10', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo10_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo10_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo10_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo10_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#k"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="k">
                                                                                        <strong> <big> K) </strong> </big>
                                                                                        Declaração de Contrapartida – quando
                                                                                        for o
                                                                                        caso (modelo em anexo);
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="k"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo11', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo3_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo3_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo3_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="headingThree">
                                                                                    <button
                                                                                        class="accordion-button collapsed"
                                                                                        type="button"
                                                                                        data-bs-toggle="collapse"
                                                                                        data-bs-target="#l"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="l">
                                                                                        <strong> <big> L) </strong> </big>
                                                                                        Declaração da Não Ocorrência de
                                                                                        Impedimentos
                                                                                        (modelo em anexo);

                                                                                    </button>
                                                                                </h2>
                                                                                <div id="l"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="headingThree"
                                                                                    data-bs-parent="#accordionExample">
                                                                                    <div class="accordion-body">
                                                                                        {!! Form::file('Doc_Anexo2_Anexo12', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                    </div>
                                                                                    {!! Form::radio('Doc_Anexo2_Anexo12_sit', '1', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo12_sit == 1, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios1',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios1">
                                                                                      <span class="badge bg-success"><i
                                                                                              class="bi bi-check-circle me-1"></i>
                                                                                          Validado</span>
                                                                                  </label>
                    
                                                                                  {!! Form::radio('Doc_Anexo2_Anexo12_sit', '0', $n_processo->Doc_anexo2->Doc_Anexo2_Anexo12_sit == 0, [
                                                                                      'class' => 'form-check-input',
                                                                                      'id' => 'gridRadios2',
                                                                                  ]) !!}
                                                                                  <label class="form-check-label" for="gridRadios2">
                                                                                      <span class="badge bg-warning text-dark"><i
                                                                                              class="bi bi-exclamation-triangle me-1"></i>
                                                                                          Corrigir</span>
                                                                                  </label>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- End Default Accordion Example -->


                                                                        <button type="submit"
                                                                            class="btn btn-primary">Enviar</button>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            {!! Form::close() !!}


                                                            <div class="tab-pane fade" id="list-projeto" role="tabpanel"
                                                                aria-labelledby="list-projeto-list">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"> <b> <big> 7. </b> </big>
                                                                            Identificação do Projeto </h5>
                                                                            {!! Form::open([
                                                                              'url' => route('trdigital.validar.projeto', ['id' => $n_processo->Projeto_conteudo->id]),
                                                                              'method' => 'post',
                                                                          ]) !!}
                                                                        <!-- General Form Elements -->
                                                                        <div class="row mb-3">
                                                                            <label for="inputText"
                                                                                class="col-sm-2 col-form-label">
                                                                                <b> Título:
                                                                                </b> </label>


                                                                            <div class="col-sm-10">
                                                                                {!! Form::text('Titulo_Projeto_Conteudo', null, ['class' => 'form-control', 'id' => 'floatingTextarea']) !!}
                                                                                {!! Form::radio('Titulo_Projeto_Conteudo_sit', '1', $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo_sit == 1, [
                                                                  'class' => 'form-check-input',
                                                                  'id' => 'gridRadios1',
                                                              ]) !!}
                                                              <label class="form-check-label" for="gridRadios1">
                                                                  <span class="badge bg-success"><i
                                                                          class="bi bi-check-circle me-1"></i>
                                                                      Validado</span>
                                                              </label>

                                                              {!! Form::radio('Titulo_Projeto_Conteudo_sit', '0', $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo_sit == 0, [
                                                                  'class' => 'form-check-input',
                                                                  'id' => 'gridRadios2',
                                                              ]) !!}
                                                              <label class="form-check-label" for="gridRadios2">
                                                                  <span class="badge bg-warning text-dark"><i
                                                                          class="bi bi-exclamation-triangle me-1"></i>
                                                                      Corrigir</span>
                                                              </label>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">
                                                                                <b>
                                                                                    Objeto:</b></label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::text('Objeto_Projeto_Conteudo', null, ['class' => 'form-control', 'id' => 'floatingTextarea']) !!}
                                                                                {!! Form::radio('Objeto_Projeto_Conteudo_sit', '1', $n_processo->Projeto_conteudo->Objeto_Projeto_Conteudo_sit == 1, [
                                                                                  'class' => 'form-check-input',
                                                                                  'id' => 'gridRadios1',
                                                                              ]) !!}
                                                                              <label class="form-check-label" for="gridRadios1">
                                                                                  <span class="badge bg-success"><i
                                                                                          class="bi bi-check-circle me-1"></i>
                                                                                      Validado</span>
                                                                              </label>
                
                                                                              {!! Form::radio('Objeto_Projeto_Conteudo_sit', '0', $n_processo->Projeto_conteudo->Objeto_Projeto_Conteudo_sit == 0, [
                                                                                  'class' => 'form-check-input',
                                                                                  'id' => 'gridRadios2',
                                                                              ]) !!}
                                                                              <label class="form-check-label" for="gridRadios2">
                                                                                  <span class="badge bg-warning text-dark"><i
                                                                                          class="bi bi-exclamation-triangle me-1"></i>
                                                                                      Corrigir</span>
                                                                              </label>

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label"><b>
                                                                                    Objetivo
                                                                                    Geral: </b></label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Obj_Geral_Projeto_Conteudo', null, ['class' => 'form-control', 'id' => 'floatingTextarea']) !!}
                                                                                {!! Form::radio('Obj_Geral_Projeto_Conteudo_sit', '1', $n_processo->Projeto_conteudo->Obj_Geral_Projeto_Conteudo_sit == 1, [
                                                                                  'class' => 'form-check-input',
                                                                                  'id' => 'gridRadios1',
                                                                              ]) !!}
                                                                              <label class="form-check-label" for="gridRadios1">
                                                                                  <span class="badge bg-success"><i
                                                                                          class="bi bi-check-circle me-1"></i>
                                                                                      Validado</span>
                                                                              </label>
                
                                                                              {!! Form::radio('Obj_Geral_Projeto_Conteudo_sit', '0', $n_processo->Projeto_conteudo->Obj_Geral_Projeto_Conteudo_sit == 0, [
                                                                                  'class' => 'form-check-input',
                                                                                  'id' => 'gridRadios2',
                                                                              ]) !!}
                                                                              <label class="form-check-label" for="gridRadios2">
                                                                                  <span class="badge bg-warning text-dark"><i
                                                                                          class="bi bi-exclamation-triangle me-1"></i>
                                                                                      Corrigir</span>
                                                                              </label>

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label"><b>
                                                                                    Objetivo
                                                                                    específico: </b></label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Obj_especifico_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label"><b>
                                                                                    Justificativa:</b> </label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Justificativa_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label"><b>Contextualização
                                                                                </b> </label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Contextualizacao_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label"><b>Diagnóstico
                                                                                </b> </label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Diagnostico_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Importância
                                                                                do
                                                                                Projeto:</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Importancia_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Caracterização
                                                                                dos Interesses Recíprocos entre o
                                                                                Proponente/Estado</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Caracterizacao_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Público
                                                                                alvo
                                                                                Interno</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Publico_Alvo_Interno_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Público
                                                                                alvo
                                                                                Externo</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Publico_Alvo_Externo_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Problemas a
                                                                                serem resolvidos</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Problemas_Projeto_Conteudo', null, ['class' => 'form-control', 'id' => 'floatingTextarea']) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Resultados
                                                                                esperados</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Resultados_Projeto_Conteudo', null, ['class' => 'form-control', 'id' => 'floatingTextarea']) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Início</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::date('Inicio_Projeto_Conteudo', null, ['class' => 'form-control', 'id' => 'floatingTextarea']) !!}

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Término</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::date('Fim_Projeto_Conteudo', null, ['class' => 'form-control', 'id' => 'floatingTextarea']) !!}

                                                                            </div>
                                                                        </div>


                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Informa
                                                                                Emenda
                                                                                n° Parlamentar:</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('N_Emenda_Projeto_Conteudo', null, ['class' => 'form-control', 'id' => 'floatingTextarea']) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Informa
                                                                                Emenda
                                                                                nome do Autor:</label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::textarea('Nome_Autor_Emenda_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Valor
                                                                                de
                                                                                Repasse </label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::number('Valor_Repasse_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <label for="inputNumber"
                                                                                class="col-sm-2 col-form-label">Valor
                                                                                de
                                                                                Contrapartida: </label>
                                                                            <div class="col-sm-10">
                                                                                {!! Form::number('Valor_Contrapartida_Projeto_Conteudo', null, [
                                                                                    'class' => 'form-control',
                                                                                    'id' => 'floatingTextarea',
                                                                                ]) !!}
                                                                                <p class="small"> <button type="button"
                                                                                        class="btn btn-primary btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#dica1">
                                                                                        Ver Dica ?
                                                                                    </button> </p>
                                                                            </div>
                                                                        </div>

                                                                        {!! Form::close() !!}

                                                                    </div>


                                                                </div>
                                                            </div>
                                                            {!! Form::close() !!}

                                                        </div>






    </main>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('js/step-by-step/script.js') }}"></script>
@endsection
