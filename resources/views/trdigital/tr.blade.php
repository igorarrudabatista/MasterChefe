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
    <main id="main" class="main">



        <div class="card-header">
            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="d-flex justify-content-center">
                        {{-- comecei aqui --}}
                        <div class="text-center mb-5">
                            <img src="{{ asset('/images/createform.png') }}" height="88" class='mb-4'>
                            <h3>TR DIGITAL - Criar Nova TR</h3>

                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="{{ asset('images/brasao_mt.png') }}" class="img-top rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <BR>
                                <div class="col-8 text-center">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                            data-bs-toggle="list" role="tab" aria-controls="list-home">
                                            <big><b>
                                                    {{ $processos->Orgaos->Sigla ?? 'Não informado' }}
                                                </b> - <i>
                                                    {{ $processos->Orgaos->Nome ?? ('Não informado' ?? 'Não informado') }}
                                                    </b></big>


                                        </a>
                                        <h5 class="card-title justify-content-md-center">
                                            N° da TR: <big> <code>
                                                    {{ $n_processos->id ?? 'ID' }}
                                                </code> </big>
                                        </h5>
                                    </div>
                                    icone
                                    {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                    <button type="submit" class="btn btn-warning btn">Clique aqui para
                                        continuar o preenchimento da TR</button>
                                </div>
                                </h5>
                            </div>
                            <div class="row"> </div>
                            <div class="col-sm">
                            </div>
                        </div>
                        <br>


                        <br>

                    </div>
                    <hr>


                    <div class="card-body">
                        <h5 class="card-title">Manuais e Dicas</h5>

                        <!-- Default Accordion -->
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Manual tipo 1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion
                                            body.</strong> It is hidden by default,
                                        until the collapse plugin adds the
                                        appropriate classes that we use to style
                                        each element. These classes control the
                                        overall appearance, as well as the showing
                                        and hiding via CSS transitions. You can
                                        modify any of this with custom CSS or
                                        overriding our default variables. It's also
                                        worth noting that just about any HTML can go
                                        within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Manual tipo 2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion
                                            body.</strong> It is hidden by default,
                                        until the collapse plugin adds the
                                        appropriate classes that we use to style
                                        each element. These classes control the
                                        overall appearance, as well as the showing
                                        and hiding via CSS transitions. You can
                                        modify any of this with custom CSS or
                                        overriding our default variables. It's also
                                        worth noting that just about any HTML can go
                                        within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Manual tipo 3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion
                                            body.</strong> It is hidden by default,
                                        until the collapse plugin adds the
                                        appropriate classes that we use to style
                                        each element. These classes control the
                                        overall appearance, as well as the showing
                                        and hiding via CSS transitions. You can
                                        modify any of this with custom CSS or
                                        overriding our default variables. It's also
                                        worth noting that just about any HTML can go
                                        within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Default Accordion Example -->

                    </div>
                </div>
                <d </section>

                </main>
                    </section>

                    <script src="{{ asset('/js/pages/form-editor.js') }}"></script>
                @endsection
