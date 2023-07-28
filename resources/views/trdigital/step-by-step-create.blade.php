@extends('base.novabase')
@section('content')


<main id="main" class="main">

<!-- partial:index.partial.html -->
<div class="outer-container">
    <div id="wizard" class="aiia-wizard" style="display: none;">

        <div class="aiia-wizard-step">
            <h1>Orgão Concedente:</h1>
            <div class="step-content">


                <div class="col-lg-6">

                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">
                            <big><b>  Selecione o Orgão Concedente: <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                              Ver Dica ?
                            </button> </b> </big></h5> 
<!-- Vertically centered Modal -->

<div class="modal fade" id="dica1" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Dica: <b>Orgão Concedente: </b></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body"> É o orgão destinado a receber a sua TR Online.      </div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Obrigado!</button>
</div>
</div>
</div>
</div><!-- End Vertically centered Modal-->

{!! Form::open(['route' => 'trdigital.store',  'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    
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

                <div class="col-lg-4">

                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title"><big> Vídeo Explicativo </big></b></h5>

                          <div class="row mb-3">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/-_Km0ufn5a8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                          </div>




                      </div>
                  </div>
              </div>
      
    
              </div>
               
        
            </div>

        <div class="aiia-wizard-step">
            <h1>Ofício de encaminhamento</h1>
            <div class="step-content">

              <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <big><b> 1. </b> </big> Ofício de encaminhamento com o
                                <b>número da nova proposta </b></h5>

                            <div class="row mb-3">

                              {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


                                <div class="col-sm-10">
                                  {{-- {!! Form::text('N_proposta', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!} --}}
                                  {{-- {!! Form::label('Comp_Oficio', 'Documento de Ofício', ['class' => 'form-label']) !!} --}}
                                  {!! Form::file('Comp_Oficio', ['class' => 'form-control']) !!}
                                  <button type="submit"
                                  class="btn btn-primary btn-sm">Salvar</button>
                                </div>
                              </div>      
                                
                                </div>
                                
                            <br>
                          </div>

                    </div>
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <big> <b> 2. </b> </big> Ofício com a destinação da emenda
                                emitido e <b> assinado pelo Parlamentar</b></h5>

                            <div class="row mb-3">

                                <div class="col-sm-10">
                                  {!! Form::file('Comp_Assinado', ['class' => 'form-control']) !!}

                                </div>
                            </div>


                            <button type="submit"
                            class="btn btn-primary btn-sm">Salvar</button>


                        </div>
                    </div>
             

        
        <div class="aiia-wizard-step">
            <h1>Responsável pela Instituição</h1>
            <div class="step-content">
              <div class="row">
                <div class="col-lg-6 mx-auto">

                    <div class="card">
                      <div class="card-body text-center">
                        <h5 class="card-title"> <big><b> 3. </b> </big> Identificação do <b> Responsável
                                pela Instituição </b></h5>
<!-- Floating Labels Form -->
<div class="row g-3">
  <div class="col-md-12">
      <div class="form-floating">
        {!! Form::text('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
          <label for="floatingName">Nome Completo</label>
      </div>
  </div>
  <br>
  <div class="row">
  <div class="col-md-4">
      <div class="form-floating">
        {!! Form::number('Telefone_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
        <label for="floatingName"></label>
          <label for="floatingEmail">Telefone</label>
      </div>
  </div>
  
  <div class="col-md-4">
      <div class="form-floating">
        {!! Form::email('Email_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
          <label for="floatingEmail">E-mail</label>
      </div>
  </div>
  <div class="col-md-4">
    <div class="form-floating">
      {!! Form::text('Cargo_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
        <label for="floatingEmail">Cargo / Função</label>
    </div>
</div>
  </div>
  <br>

  <div class="col-12">
      <div class="form-floating">
        {!! Form::textarea('End_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

          <label
              for="floatingTextarea">Endereço</label>
      </div><br>
      <div class="row">

  <div class="col-md-4">
      <div class="col-md-12">
          <div class="form-floating">
            {!! Form::text('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      
            <label for="floatingCity">Cidade</label>
          </div>
      </div>
  </div>

  <div class="col-md-4">
      <div class="form-floating mb-3">
          <select class="form-select"
              id="floatingSelect"
              aria-label="State">
              <option selected>Mato Grosso</option>
              <option value="1">Oregon
              </option>
              <option value="2">DC</option>
          </select>
          <label
              for="floatingSelect">Estado</label>
      </div>
  </div>
  <div class="col-md-4">
      <div class="form-floating">
        {!! Form::text('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingZip']) !!}                                                                                                                                                                                                                                                         
          <label for="floatingZip">CEP</label>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-floating">
        {!! Form::file('Anexo1_Resp_Instituicao', ['class' => 'form-control']) !!}

        <label for="floatingZip">Anexar RG ou CPF</label>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-floating">
        {!! Form::file('Anexo2_Resp_Instituicao', ['class' => 'form-control']) !!}

        <label for="floatingZip">Anexar Comprovante de Endereço</label>
      </div><br>
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
        <div class="aiia-wizard-step">
            <h1>Methods</h1>
            <div class="step-content">
                This plugin allows you to interract with it or to retrieve some information from. The following methods are available:
                <ul>
                    <li>isFinalElementShown,</li>
                    <li>previous,</li>
                    <li>isFinalElementShown,</li>
                
                
                </ul>
            </div>
        </div>

        <div class="aiia-wizard-step">
            <h1>Callbacks</h1>
            <div class="step-content">
                As any good plugin, this one allows you to run your code when the plugin does something. This is a list of currently available  callbacks:
                
            </div>
        </div>
        <div class="aiia-wizard-step">
            <h1>Callbacks</h1>
            <div class="step-content">
                As any good plugin, this one allows you to run your code when the plugin does something. This is a list of currently available  callbacks:
                
            </div>
        </div>
        <div class="aiia-wizard-step">
            <h1>Callbacks</h1>
            <div class="step-content">
                As any good plugin, this one allows you to run your code when the plugin does something. This is a list of currently available  callbacks:
                
            </div>
        </div>
    </div>
</div>
</main>
      

  
<!-- partial -->
    

</body>
</html>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>


                            // <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                            <script src="{{ asset('/js/step-by-step/script.js') }}"></script>
                      
@endsection