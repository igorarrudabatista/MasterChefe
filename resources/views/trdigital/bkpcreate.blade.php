@extends('base.novabase')
@section('content')
<link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <main id="main" class="main">

      

        <div class="panel-header panel-header-sm">
        </div>
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

                                                      <div class="col-lg-8">

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
      <div class="modal-body">
É o orgão destinado a receber a sua TR Online.      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Obrigado!</button>
      </div>
    </div>
  </div>
</div><!-- End Vertically centered Modal-->

{!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                          
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
                                            </div>

                                            <div class="container">
            
                                              {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


                                                    <div class="row">
                                                        <div class="col-lg-6">

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title"> <big><b> 1. </b> </big> Ofício de encaminhamento com o
                                                                        <b>número da nova proposta </b></h5>

                                                                    <div class="row mb-3">

                                                                

                                                                        <div class="col-sm-10">
                                                                          {{-- {!! Form::text('N_proposta', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!} --}}
                                                                          {{-- {!! Form::label('Comp_Oficio', 'Documento de Ofício', ['class' => 'form-label']) !!} --}}
                                                                          {!! Form::file('Comp_Oficio', ['class' => 'form-control']) !!}
                                                                      </div>      
                                                                        
                                                                        </div>
                                                                        
                                                                        <button type="submit"
                                                                        class="btn btn-primary btn-sm">Salvar</button>
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
                                                            </div>
                                                     


                                                        <div class="row">
                                                            <div class="col-lg-6">

                                                                <div class="card">
                                                                    <div class="card-body">
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
                                                        </div> </div>
                                      

                                                        
                                                            <div class="col-lg-6">

                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"> <big> <b> 4. </b> </big>Identificação da <b> Instituição
                                                                            Proponente </b></h5>

                                                                        <!-- Floating Labels Form -->
                                                                        <div class="row g-3">
                                                                          <div class="col-md-12">
                                                                              <div class="form-floating">
                                                                                {!! Form::text('Nome_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                                  <label for="floatingName">Nome da Instituição</label>
                                                                              </div>
                                                                          <br></div>
                                                                          
                                                                          <div class="row">
                                                                          <div class="col-md-6">
                                                                              <div class="form-floating">
                                                                                {!! Form::number('CNPJ_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                                <label for="floatingName"></label>
                                                                                  <label for="floatingEmail">CNPJ</label>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6">
                                                                              <div class="form-floating">
                                                                                {!! Form::number('Telefone_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                                <label for="floatingName"></label>
                                                                                  <label for="floatingEmail">Telefone</label>
                                                                              </div>
                                                                          </div>
                                                                    
                                                                          </div>
                                                                          <br>
                                                                          {!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                                                          <div class="col-12">
                                                                              <div class="form-floating">
                                                                                {!! Form::textarea('Endereco_Instituicao', null, ['placeholder'=> 'a', 'class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                                                                                  <label
                                                                                      for="floatingTextarea">Endereço</label>
                                                                              </div><br>
                                                                              <div class="row">

                                                                          <div class="col-md-4">
                                                                              <div class="col-md-12">
                                                                                  <div class="form-floating">
                                                                                    {!! Form::text('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      
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
                                                                                {!! Form::text('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingZip']) !!}                                                                                                                                                                                                                                                         
                                                                                  <label for="floatingZip">CEP</label>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6">
                                                                              <div class="form-floating">
                                                                                {!! Form::file('Anexo1_Instituicao', ['placeholder'=> 'a','class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                <label for="floatingZip">Anexar Comprovante de Endereço</label>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6">
                                                                              <div class="form-floating">
                                                                                {!! Form::file('Anexo2_Instituicao', ['placeholder'=> 'a','class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                <label for="floatingZip">Anexar Cartão CNPJ </label>
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
                                                      </div> </div>
                                                      <div class="col-lg-6">

                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title"> <big> <b> 5. </b> </big>Identificação do <b> Responsável pelo Projeto </b></h5>

                                                                <!-- Floating Labels Form -->
                                                                <form class="row g-3">
                                                                  <div class="col-md-12">
                                                                      <div class="form-floating">
                                                                        {!! Form::text('Nome_Resp_projeto', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                          <label for="floatingName">Nome Completo</label>
                                                                      </div>
                                                                  <br></div>
                                                                  
                                                                  <div class="row">
                                                                  <div class="col-md-4">
                                                                      <div class="form-floating">
                                                                        {!! Form::number('Telefone_Resp_projeto', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                        <label for="floatingName"></label>
                                                                          <label for="floatingEmail">Telefone</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-floating">
                                                                        {!! Form::number('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                        <label for="floatingName"></label>
                                                                          <label for="floatingEmail">CPF</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-floating">
                                                                        {!! Form::number('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                        <label for="floatingName"></label>
                                                                          <label for="floatingEmail">RG</label>
                                                                      </div>
                                                                  </div>
                                                            
                                                                  </div>
                                                                  <br>
                                                            
                                                                  <div class="col-12">
                                                                      <div class="form-floating">
                                                                        {!! Form::textarea('Endereco_Resp_projeto', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                                                                          <label
                                                                              for="floatingTextarea">Endereço</label>
                                                                      </div><br>
                                                                      <div class="row">

                                                                  <div class="col-md-4">
                                                                      <div class="col-md-12">
                                                                          <div class="form-floating">
                                                                            {!! Form::text('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      
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
                                                                        {!! Form::text('Nome_Resp_Instituicao', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingZip']) !!}                                                                                                                                                                                                                                                         
                                                                          <label for="floatingZip">CEP</label>
                                                                      </div>
                                                                  </div>
                                                                  {{-- <div class="col-md-6">
                                                                      <div class="form-floating">
                                                                        {!! Form::file('Nome_Resp_Instituicao', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                        <label for="floatingZip">Anexar Comprovante de Endereço</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-floating">
                                                                        {!! Form::file('Nome_Resp_Instituicao', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                                        <label for="floatingZip">Anexar Cartão CNPJ </label>
                                                                      </div><br>
                                                                  </div> --}}
                                                      

                                                                  <div class="text-center">
                                                                      <button type="submit"
                                                                          class="btn btn-primary btn-lg">Salvar</button>
                                                                
                                                                  </div>
                                                              <!-- End floating Labels Form -->

                                                          </div>
                                                      </div>
                                                  </div>
                                              </div> </div>
                                                              
                                              <div class="row">
                                                <div class="col-lg-12">
                                        
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h5 class="card-title"><b> <big> 6. </b> </big> Atas, Certidões, Comprovantes e Declarações (Anexar):</h5>
                                        
                                                      <!-- Default Accordion -->
                                                      <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                              <strong> <big> A) </strong> </big> Cópia da Ata da Assembleia de Fundação ou Constituição ou do Estatuto Social, ou Regimento Interno, conforme o caso
                                                            </button>

                                                          </h2>
                                                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo1', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                              <strong> <big> B) </strong> </big> Certidão de Habilitação Plena
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo2', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                              <strong> <big> C) </strong> </big> Certidão de ausência de irregularidades / impedimentos perante TCU / TCE e CGE;

                                                            </button>
                                                          </h2>
                                                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo3', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#d" aria-expanded="false" aria-controls="d">
                                                              <strong> <big> D) </strong> </big> Cópia da Ata da Assembleia de Fundação ou Constituição ou do Estatuto Social, ou Regimento Interno, conforme o caso.

                                                            </button>
                                                          </h2>
                                                          <div id="d" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo4', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#e" aria-expanded="false" aria-controls="e">
                                                              <strong> <big> E) </strong> </big> Cópia do Ato de Eleição de nomeação ou posse da Mesa Diretora e Dirigente, conforme o caso.


                                                            </button>
                                                          </h2>
                                                          <div id="e" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo5', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f" aria-expanded="false" aria-controls="f">
                                                              <strong> <big> F) </strong> </big> Comprovante de Abertura de Conta e Extrato de Conta Bancária zerada e específica para a formalização do Instrumento.

                                                            </button>
                                                          </h2>
                                                          <div id="f" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo6', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#g" aria-expanded="false" aria-controls="g">
                                                              <strong> <big> G) </strong> </big>Comprovação da qualificação técnica e da capacidade operacional, mediante comprovação de funcionamento regular.

                                                            </button>
                                                          </h2>
                                                          <div id="g" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo7', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h" aria-expanded="false" aria-controls="h">
                                                              <strong> <big> H) </strong> </big> Comprovação de Experiência Prévia na Realização de Parcerias com objetos semelhantes – (Anexar Cópia de Publicações e Parcerias executadas ou em andamento).

                                                            </button>
                                                          </h2>
                                                          <div id="h" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo8', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#i" aria-expanded="false" aria-controls="i">
                                                              <strong> <big> I) </strong> </big> Declaração que comprove a regularidade do mandato de sua diretoria, da realização de assembleias ordinárias e da atividade regular, com validade restrita ao exercício de sua emissão, quando for o caso.

                                                            </button>
                                                          </h2>
                                                          <div id="i" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo9', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#j" aria-expanded="false" aria-controls="j">
                                                              <strong> <big> J) </strong> </big> Declaração de Capacidade Administrativa, Técnica e Gerencial Para a Execução do Plano De Trabalho (modelo em anexo);


                                                            </button>
                                                          </h2>
                                                          <div id="j" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo10', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#k" aria-expanded="false" aria-controls="k">
                                                              <strong> <big> K) </strong> </big> Declaração de Contrapartida – quando for o caso (modelo em anexo);
                                                            </button>
                                                          </h2>
                                                          <div id="k" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo11', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                          <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#l" aria-expanded="false" aria-controls="l">
                                                              <strong> <big> L) </strong> </big> Declaração da Não Ocorrência de Impedimentos (modelo em anexo);

                                                            </button>
                                                          </h2>
                                                          <div id="l" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                              {!! Form::file('Doc_Anexo2_Anexo12', ['class' => 'form-control', 'id' => 'formFile']) !!}
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div><!-- End Default Accordion Example -->
                                        
                                                    </div>
                                                  </div>
                                        
                                                </div>
                                                <div class="row">
                                                  <div class="col-lg-8">
                                          
                                                    <div class="card">
                                                      <div class="card-body">
                                                        <h5 class="card-title"> <b> <big> 7. </b> </big> Identificação do Projeto </h5>
                                          
                                                        <!-- General Form Elements -->
                                                          <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-2 col-form-label"> <b> Título: </b>  </label>
                                                
                                                            <div class="col-sm-10">
                                                              {!! Form::text('Titulo_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          
                                                
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label"> <b> Objeto:</b></label>
                                                            <div class="col-sm-10">
                                                              {!! Form::text('Objeto_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button>  </p>

                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label"><b> Objetivo Geral: </b></label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Obj_Geral_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>

                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label"><b> Objetivo específico: </b></label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Obj_especifico_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label"><b> Justificativa:</b> </label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Justificativa_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label"><b>Contextualização </b> </label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Contextualizacao_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>

                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label"><b>Diagnóstico </b> </label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Diagnostico_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>

                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Importância do Projeto:</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Importancia_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Caracterização dos Interesses Recíprocos entre o Proponente/Estado</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Caracterizacao_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Público alvo Interno</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Publico_Alvo_Interno_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Público alvo Externo</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Publico_Alvo_Externo_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Problemas a serem resolvidos</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Problemas_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Resultados esperados</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Resultados_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                          
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Início</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::date('Inicio_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                                                            </div>
                                                          </div>
                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Término</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::date('Fim_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                                                            </div>
                                                          </div>
                                                          

                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Informa Emenda n° Parlamentar:</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('N_Emenda_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>

                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Informa Emenda nome do  Autor:</label>
                                                            <div class="col-sm-10">
                                                              {!! Form::textarea('Nome_Autor_Emenda_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>

                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Valor de Repasse </label>
                                                            <div class="col-sm-10">
                                                              {!! Form::number('Valor_Repasse_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>

                                                          <div class="row mb-3">
                                                            <label for="inputNumber" class="col-sm-2 col-form-label">Valor de Contrapartida:  </label>
                                                            <div class="col-sm-10">
                                                              {!! Form::number('Valor_Contrapartida_Projeto_Conteudo', null, ['class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                              <p class="small"> <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dica1">
                                                                Ver Dica ?
                                                              </button> </p>
                                                            </div>
                                                          </div>
                                                         
                                      
                                          
                                                        <!-- End General Form Elements -->
                                          
                                                      </div>
                                                    </div>
                                          


                                                                {{-- <div class="form-group">
                          <label for="title">N° da nova proposta</label>
                        </div> --}}


                                                                <div class="text-center mb-5">
                                                                    <h3>Anexo 1</h3>
                                                                    {{-- {!! Form::text('N_proposta', null, ['placeholder' => '', 'class' => 'form-control']) !!} --}}
                                                                    {!! Form::file('Comp_Oficio', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Comp_Assinado', null, ['placeholder' => '', 'class' => 'form-control']) !!}

                                                                </div>
                                                                <div class="text-center mb-5">
                                                                    <h3>Resp. Instituição 1</h3>
                                                                    {!! Form::text('Nome_Resp_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Cargo_Resp_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('End_Resp_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Telefone_Resp_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Email_Resp_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Anexo1_Resp_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Anexo2_Resp_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}

                                                                </div>
                                                                <div class="text-center mb-5">
                                                                    <h3>Instituição - Informações</h3>
                                                                    {!! Form::text('Nome_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('CNPJ_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Endereco_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Telefone_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Email_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Anexo1_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Anexo2_Instituicao', null, ['placeholder' => '', 'class' => 'form-control']) !!}

                                                                </div>
                                                                <div class="text-center mb-5">
                                                                    <h3>Resp. pelo Projeto</h3>
                                                                    {!! Form::text('Nome_Resp_projeto', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Cargo_Resp_projeto', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Endereco_Resp_projeto', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Telefone_Resp_projeto', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Email_Resp_projeto', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Anexo1_Resp_projeto', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Anexo2_Resp_projeto', null, ['placeholder' => '', 'class' => 'form-control']) !!}

                                                                </div>
                                                                <div class="text-center mb-5">
                                                                    <h3>Anexo de Documentos</h3>
                                                                    {!! Form::file('Doc_Anexo2_Anexo1', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo2', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo3', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo4', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo5', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo6', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo7', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo8', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo9', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo10', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::file('Doc_Anexo2_Anexo11', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    sao 12 aqui
                                                                </div>
                                                                <div class="text-center mb-5">
                                                                    <h3>Anexo de Documentos</h3>
                                                                    {!! Form::text('Titulo_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Objeto_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Obj_Geral_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Obj_especifico_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Justificativa_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Contextualizacao_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Diagnostico_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Importancia_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Caracterizacao_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Publico_Alvo_Interno_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                           ===>     {!! Form::text('Publico_Alvo_Externo_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Problemas_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Resultados_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::date('Inicio_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::date('Fim_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('N_Emenda_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Nome_Autor_Emenda_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Valor_Repasse_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                                                    {!! Form::text('Valor_Contrapartida_Projeto_Conteudo', null, ['placeholder' => '', 'class' => 'form-control']) !!}

                                                                </div>




                                                                <button type="submit"
                                                                    class="btn btn-primary">Enviar</button>
                                            </div>
                                </section>
    </main>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="{{ asset('js/step-by-step/script.js') }}"></script>
@endsection
