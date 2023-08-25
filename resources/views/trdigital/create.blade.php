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


                                <div class="text-center mb-5">
                                    <img src="{{ asset('/images/createform.png') }}" height="88" class='mb-4'>
                                    <h3>TR DIGITAL - Criar Nova TR</h3>
                                    <p> Selecione o Órgão que irá receber a sua TR.</p>

                                    <div class="row">

                                        <div class="col-lg-6">
                                            {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                            @if (auth()->check())
                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            @endif

                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="row g-0">
                                      <div class="col-md-2">
                                        <img src="{{ asset('images/brasao_mt.png') }}" class="img-fluid rounded-start" alt="...">
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                            <BR>
                                            <div class="col-8 text-center">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action active" id="list-home-list"
                                                        data-bs-toggle="list" role="tab" aria-controls="list-home">
                                                        <big><b>Selecione o Órgão Concedente</b></big>
                                                    </a>
                                                </div>
                                            </div>
                                        </h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-8 text-center">

                                            <select name="Orgao_Concedente" id="Orgao_Concedente"
                                                class="form-control custom-select" required>
                                                <option value="" disabled selected>Selecione o Órgão Concedente</option>
                                                @foreach ($orgaos as $orgao)
                                                    <option value="{{ $orgao->id }}">
                                                        <img src="{{ asset('images/brasao_mt.png') }}" width="20px">
                                                        {{ $orgao->Sigla }} - {{ $orgao->Nome }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                            <button type="submit" class="btn btn-primary btn-lg">Criar TR</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div><!-- End Card with an image on left -->

                        </div>
                    </div>

                </div>

               


            </div>
        </div>
        </div>
   
    </main>
    <script>
        $(document).ready(function() {
            // Função para adicionar a imagem ao lado de cada opção do select
            function addImageToSelectOption() {
                var select = $('#Orgao_Concedente'); // Seletor do seu select
                select.find('option').each(function() {
                    var option = $(this);
                    var imageSrc =
                    '{{ asset('images/brasao_mt.png') }}'; // Substitua pelo caminho correto da imagem
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
