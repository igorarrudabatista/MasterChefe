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
                                                <h3>TR DIGITAL - Criar Nova TR</h3>
                                                <p> Valide os itens dos formulários</p>


                                                    <div class="col-lg-6">
                                                      {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                                      @if (auth()->check())
                                                            <input type="hidden" name="user_id"
                                                                value="{{ auth()->user()->id }}">
                                                        @endif


                                                        <select name="Orgao_Concedente" id="Orgao_Concedente" class="form-control" required>
                                                          <option value="" disabled>Selecione o Orgão Concedente</option>
                                                          @foreach ($orgaos as $orgao)
                                                              <option value="{{ $orgao->id }}">{{ $orgao->Nome }} - {{ $orgao->Sigla }}</option>
                                                          @endforeach
                                                      </select>

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

                                                <a class="list-group-item list-group-item-action" id="list-projeto-tramitar"
                                                    data-bs-toggle="list" href="#list-tramitar" role="tab"
                                                    aria-controls="list-tramitar"> <b> <big> 7. </big> </b> Tramitar para o Concedente</a>

                                            </div>
                                        </div>

                                        <div class="col-8">
                                            <div class="tab-content" id="nav-tabContent">
                                              {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                               @include('trdigital.criar.questoes.1oficios')
                                               @include('trdigital.criar.questoes.2resp_instituicao')
                                               @include('trdigital.criar.questoes.3instituicao')
                                              @include('trdigital.criar.questoes.4resp_projeto')
                                                @include('trdigital.criar.questoes.5doc_anexos2')                                              
                                               @include('trdigital.criar.questoes.6projeto')
                                             {{--   @include('trdigital.criar.questoes.tramitar') --}} 



                                                            </div>
                                                        </div>
                                                    </div>

                                          

                               </div>
                                            </div>
                                </section>
    </main>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="{{ asset('js/step-by-step/script.js') }}"></script>
@endsection
