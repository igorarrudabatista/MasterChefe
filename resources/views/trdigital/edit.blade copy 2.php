@extends('base.novabase')
@section('content')
<?php 
$processoCount = session()->get('processoCount'); 
$processoCount_corrigir = session()->get('processoCount_corrigir'); 
$processoCount_finalizado = session()->get('processoCount_finalizado'); 
$processoCount_aguardando = session()->get('processoCount_aguardando'); 
$processoCount_tramitada = session()->get('processoCount_tramitada'); 
$processoCount_nao_finalizada = session()->get('processoCount_nao_finalizada'); 
?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<!-- Adicione esses links no cabeçalho do seu HTML -->
<!-- Adicione esses links no cabeçalho do seu HTML -->

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
                                                <img src="{{ asset('/images/createform.png') }}" height="88"
                                                    class='mb-4'>
                                                <h3>TR DIGITAL - Criar Nova TR</h3>
                                                <p> Valide os itens dos formulários</p>

                                                <div class="row">

                                                <div class="col-lg-4">
                                                  {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.update', $n_processo->id], 'enctype' => 'multipart/form-data']) !!}

                                                    @if (auth()->check())
                                                        <input type="hidden" name="user_id"
                                                            value="{{ auth()->user()->id }}">
                                                    @endif

                                                    <div class="row">
                                                      <div class="col-10">
                                                          <div class="list-group" id="list-tab" role="tablist">
                                                              <a class="list-group-item list-group-item-action active"
                                                                  id="list-home-list" data-bs-toggle="list" href="#list-home"
                                                                  role="tab" aria-controls="list-home"><big><b> Selecione o Orgão Concedente </b></big>
                                                                  </a>

                                                          </div></div></div>
                                       <!-- Seu código HTML do select -->
                                       <div class="row">
                                        <div class="col-lg-10">
                                            <select name="Orgao_Concedente" id="Orgao_Concedente" class="form-control custom-select" required>
                                                <option value="" disabled selected> 
                                                   Selecione o Orgão Concedente</option>
                                                @foreach ($orgaos as $orgao)
                                                    <option value="{{ $orgao->id }}">
                                                        <img src="{{ asset('images/brasao_mt.png') }}" width="20px"> {{ $orgao->Sigla }} - {{ $orgao->Nome }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    


                                                    </div>

                               
                                                    


                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action active"
                                                        id="list-home-list" data-bs-toggle="list" href="#list-home"
                                                        role="tab" aria-controls="list-home"><big><b> 1. </b></big>
                                                        Ofícios</a>
                                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                        data-bs-toggle="list" href="#list-profile" role="tab"
                                                        aria-controls="list-profile"><big><b> 2. </b> </big>
                                                        Identificação do Responsável
                                                        pela Instituição. </b></a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-messages-list" data-bs-toggle="list" href="#list-messages"
                                                        role="tab" aria-controls="list-messages"><b> 3.</b>
                                                        </big>Identificação da
                                                        Instituição
                                                        Proponente </b> </a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-settings-list" data-bs-toggle="list" href="#list-settings"
                                                        role="tab" aria-controls="list-settings"><big><b> 4. </b> </big>
                                                        Identificação do
                                                        Responsável pelo Projeto </b> </a>
                                                    <a class="list-group-item list-group-item-action" id="list-atas-list"
                                                        data-bs-toggle="list" href="#list-atas" role="tab"
                                                        aria-controls="list-atas"><big> <b> 5. </b> </big></b> Atas,
                                                        Certidões,
                                                        Comprovantes e Declarações </a>
                                                    <a class="list-group-item list-group-item-action" id="list-projeto-list"
                                                        data-bs-toggle="list" href="#list-projeto" role="tab"
                                                        aria-controls="list-projeto"> <b> <big> 6. </big> </b> Identificação
                                                        do
                                                        Projeto </a>

                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-projeto-Cronograma" data-bs-toggle="list"
                                                        href="#list-Cronograma" role="tab" aria-controls="list-Cronograma">
                                                        <b> <big> 7. </big> </b> Cronograma de Execução</a>
                                                    
                                                        <a class="list-group-item list-group-item-action"
                                                        id="list-projeto-consolidado" data-bs-toggle="list"
                                                        href="#list-consolidado" role="tab" aria-controls="list-consolidado">
                                                        <b> <big> 8. </big> </b> Plano Consolidado</a>
                                                 
                                                        <a class="list-group-item list-group-item-action"
                                                        id="list-projeto-detalhado" data-bs-toggle="list"
                                                        href="#list-detalhado" role="tab" aria-controls="list-detalhado">
                                                        <b> <big> 9. </big> </b> Plano Detalhado</a>
                                                 
                                                        <a class="list-group-item list-group-item-action"
                                                        id="list-projeto-detalhado" data-bs-toggle="list"
                                                        href="#list-desembolso" role="tab" aria-controls="list-desembolso">
                                                        <b> <big> 10. </big> </b>Cronograma de Desembolso</a>
                                                     
                                                        <a class="list-group-item list-group-item-action"
                                                        id="list-projeto-relacao" data-bs-toggle="list"
                                                        href="#list-relacao" role="tab" aria-controls="list-relacao">
                                                        <b> <big> 11. </big> </b>Relação de Obras e Equipamentos / Material Permanente
                                                      </a>

                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-projeto-tramitar" data-bs-toggle="list"
                                                        href="#list-tramitar" role="tab" aria-controls="list-tramitar">
                                                        <b> <big> 12. </big> </b> Finalizar e Enviar</a>

                                                </div>
                                            </div>

                                            <div class="col-8">
                                                <div class="tab-content" id="nav-tabContent">
                                                    {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                                    @include('trdigital.edit.questoes.1oficios')
                                                    @include('trdigital.edit.questoes.2resp_instituicao')
                                                    @include('trdigital.edit.questoes.3instituicao')
                                                    @include('trdigital.edit.questoes.4resp_projeto')
                                                    @include('trdigital.edit.questoes.5doc_anexos2')
                                                    @include('trdigital.edit.questoes.6projeto')
                                                    @include('trdigital.edit.questoes.7cronograma')
                                                    @include('trdigital.edit.questoes.8lano_consolidado')
                                                    @include('trdigital.edit.questoes.9plano_detalhado')
                                                    @include('trdigital.edit.questoes.10cronograma_desembolso')
                                                    @include('trdigital.edit.questoes.11relacao')
                                                    @include('trdigital.edit.questoes.12tramitar')



                                                </div>
                                            </div>
                                        </div>



                                    </div>
                            </div>
                            </section>
    </main>
    <script>
      $(document).ready(function() {
          // Função para adicionar a imagem ao lado de cada opção do select
          function addImageToSelectOption() {
              var select = $('#Orgao_Concedente'); // Seletor do seu select
              select.find('option').each(function() {
                  var option = $(this);
                  var imageSrc = '{{ asset('images/brasao_mt.png') }}'; // Substitua pelo caminho correto da imagem
                  var imgElement = $('<img>').attr('src', imageSrc).css({
                      width: '20px', // Defina o tamanho da imagem aqui
                      marginRight: '5px' // Defina a margem direita para ajustar o espaçamento
                  });
                  option.prepend(imgElement);
              });
          }
  
          // Chame a função para adicionar a imagem ao carregar a página
          addImageToSelectOption();
      });
  </script>
    
    <!-- Adicione esses links no cabeçalho do seu HTML -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('js/step-by-step/script.js') }}"></script>
@endsection
