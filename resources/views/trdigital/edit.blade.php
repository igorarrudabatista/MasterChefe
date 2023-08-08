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

                                                      <div class="col-lg-6">

{!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.update', $n_processo->id], 'enctype' => 'multipart/form-data']) !!}


                                          
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
                                            </div>

                                            <div class="container">
            


                                                    <div class="row">
                                                        <div class="col-lg-6">

                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title"> <big><b> 1. </b> </big> Ofício de encaminhamento com o
                                                                        <b>número da nova proposta </b></h5>
                                                                      
                                                                        <div class="col-sm-10">
                                                                            @if ($n_processo->Doc_anexo1 && $n_processo->Doc_anexo1->Comp_Oficio)
                                                                            <div class="icon">
                                                                            <h5 class="text-success"> Ofício enviado.
                                                                                  <a class="text-success small" href="{{ asset('storage/' . $n_processo->Doc_anexo1->Comp_Oficio) }}" target="_blank">
                                                                                <i class="bi bi-file-earmark-pdf-fill"> Ver arquivo</i> </h5>                                        
                                                                                </a>
                                                                            </div>
                                                                            @else
                                                                            <h6 class="text-danger"> Você ainda não enviou este arquivo. </h6>

                                                                            @endif     
                                                                            {!! Form::file('Comp_Oficio', ['class' => 'form-control']) !!}

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
                                                                        emitido e <b> assinado pelo Parlamentar.</b></h5>

                                                                    <div class="row mb-3">

                                                                        <div class="col-sm-10">
                                                                            @if ($n_processo->Doc_anexo1 && $n_processo->Doc_anexo1->Comp_Assinado)
                                                                            <div class="icon">
                                                                            <h5 class="text-success"> Ofício enviado.
                                                                                  <a class="text-success small" href="{{ asset('storage/' . $n_processo->Doc_anexo1->Comp_Oficio) }}" target="_blank">
                                                                                <i class="bi bi-file-earmark-pdf-fill"> Ver arquivo</i> </h5>                                        
                                                                                </a>
                                                                            </div>
                                                                            @else
                                                                            <h6 class="text-danger"> Você ainda não enviou este arquivo. </h6>

                                                                            @endif     
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
                                                                {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.update', $n_processo->id], 'enctype' => 'multipart/form-data']) !!}

                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"> <big><b> 3. </b> </big> Identificação do <b> Responsável
                                                                            pela Instituição. </b></h5>

                                                                        <!-- Floating Labels Form -->
                                                                        <div class="row g-3">
                                                                            <div class="col-md-12">
                                                                                <div class="form-floating">
                                                                                  {!! Form::text('Nome_Resp_Instituicao', $n_processo->Resp_instituicao->Nome_Resp_Instituicao , ['placeholder'=> 'Nome Completo','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                                    <label for="floatingName">Nome Completo</label>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-floating">
                                                                                  {!! Form::number('Telefone_Resp_Instituicao', $n_processo->Resp_instituicao->Telefone_Resp_Instituicao , ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                                  <label for="floatingName"></label>
                                                                                    <label for="floatingEmail">Telefone</label>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-md-4">
                                                                                <div class="form-floating">
                                                                                  {!! Form::email('Email_Resp_Instituicao', $n_processo->Resp_instituicao->Email_Resp_Instituicao , ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                                    <label for="floatingEmail">E-mail</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                              <div class="form-floating">
                                                                                {!! Form::text('Cargo_Resp_Instituicao', $n_processo->Resp_instituicao->Cargo_Resp_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                                  <label for="floatingEmail">Cargo / Função</label>
                                                                              </div>
                                                                          </div>
                                                                            </div>
                                                                            <br>
                                                                      
                                                                            <div class="col-12">
                                                                                <div class="form-floating">
                                                                                  {!! Form::textarea('End_Resp_Instituicao', $n_processo->Resp_instituicao->End_Resp_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                                                                                    <label
                                                                                        for="floatingTextarea">Endereço</label>
                                                                                </div><br>
                                                                                <div class="row">

                                                                            <div class="col-md-4">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-floating">
                                                                                      {!! Form::text('', $n_processo->Resp_instituicao->Cidade, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      
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
                                                                                  
                                                                                  @if ($n_processo->Resp_instituicao && $n_processo->Resp_instituicao->Anexo1_Resp_Instituicao)
                                                                                  <div class="icon">
                                                                                  <h6 class="text-success"> <b>Documento enviado.</b>
                                                                                    <a class="text-success small" href="{{ asset('storage/' . $n_processo->Resp_instituicao->Anexo1_Resp_Instituicao) }}" target="_blank">
                                                                                      <i class="bi bi-file-earmark-pdf-fill"> Ver arquivo</i> </h6>                                        
                                                                                      </a>
                                                                                  </div>
                                                                                  @else
                                                                                  <h6 class="text-danger"> Você ainda não enviou este arquivo. </h6>
      
                                                                                  @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating">
                                                                                  {!! Form::file('Anexo2_Resp_Instituicao', ['class' => 'form-control']) !!}

                                                                                  <label for="floatingZip">Anexar Comprovante de Endereço</label>
                                                                                  @if ($n_processo->Resp_instituicao && $n_processo->Resp_instituicao->Anexo2_Resp_Instituicao)
                                                                                  <div class="icon">
                                                                                  <h6 class="text-success"> <b>Documento enviado.</b>
                                                                                    <a class="text-success small" href="{{ asset('storage/' . $n_processo->Resp_instituicao->Anexo2_Resp_Instituicao) }}" target="_blank">
                                                                                      <i class="bi bi-file-earmark-pdf-fill"> Ver arquivo</i> </h6>                                        
                                                                                      </a>
                                                                                  </div>
                                                                                  @else
                                                                                  <h6 class="text-danger"> Você ainda não enviou este arquivo. </h6>
      
                                                                                  @endif



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
                                                                    </div>
                                                                    
                                                 
                                                        
                                      

                                                        
                                                            <div class="col-lg-6">
                                                                {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.update', $n_processo->id], 'enctype' => 'multipart/form-data']) !!}

                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title"> <big> <b> 4. </b> </big>Identificação da <b> Instituição Proponente </b></h5>

                                                                        <!-- Floating Labels Form -->
                                                                        <div class="row g-3">
                                                                          <div class="col-md-12">
                                                                              <div class="form-floating">
                                                                                {!! Form::textarea('Nome_Instituicao', $n_processo->instituicao->Nome_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                                                                                  <label for="floatingName">Nome da Instituição</label>
                                                                                  @if ($n_processo->instituicao && $n_processo->instituicao->Nome_Instituicao_sit == 1)
                                                                                  <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                                                                                  @else
                                                                                  <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                                                                                    @endif

                                                                              </div>
                                                                          <br></div>
                                                                          
                                                                          <div class="row">
                                                                          <div class="col-md-6">
                                                                              <div class="form-floating">
                                                                                {!! Form::textarea('CNPJ_Instituicao', $n_processo->instituicao->CNPJ_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                                                                                <label for="floatingName"></label>
                                                                                  <label for="floatingEmail">CNPJ</label>
                                                                                  @if ($n_processo->instituicao && $n_processo->instituicao->CNPJ_Instituicao_sit == 1)
                                                                                  <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                                                                                  @else
                                                                                  <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                                                                                    @endif
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6">
                                                                              <div class="form-floating">
                                                                                {!! Form::textarea('Telefone_Instituicao', $n_processo->instituicao->Telefone_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}

                                                                                <label for="floatingName"></label>
                                                                                  <label for="floatingEmail">Telefone</label>
                                                                                  @if ($n_processo->instituicao && $n_processo->instituicao->Telefone_Instituicao_sit == 1)
                                                                                  <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                                                                                  @else
                                                                                  <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                                                                                    @endif
                                                                              </div>
                                                                          </div>
                                                                    
                                                                          </div>
                                                                          <br>

                                                                          <div class="col-12">
                                                                              <div class="form-floating">
                                                                                {!! Form::textarea('Endereco_Instituicao', $n_processo->instituicao->Endereco_Instituicao, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingTextarea']) !!}
                                                                                  <label for="floatingTextarea">Endereço</label>
                                                                                  @if ($n_processo->instituicao && $n_processo->instituicao->Endereco_Instituicao_sit == 1)
                                                                                  <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                                                                                  @else
                                                                                  <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                                                                                    @endif

                                                                              </div><br>
                                                                              <div class="row">

                                                                          <div class="col-md-4">
                                                                              <div class="col-md-12">
                                                                                  <div class="form-floating">
                                                                                    {!! Form::text('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      
                                                                                    <label for="floatingCity">Cidade</label>
                                                                                    @if ($n_processo->instituicao && $n_processo->instituicao->Endereco_Instituicao_sit == 1)
                                                                                    <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                                                                                    @else
                                                                                    <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Corrigir</span>
                                                                                      @endif
  
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
                                                                                {!! Form::file('Anexo1_Instituicao', ['placeholder'=> 'a','class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                <label for="floatingZip">Anexar Comprovante de Endereço</label>

                                                                                @if ($n_processo->instituicao && $n_processo->instituicao->Anexo1_Instituicao_sit == 1)
                                                                                <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Validado</span>
                                                                                @else
                                                                                <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i>Corrigir</span>
                                                                                @endif
                                                                                
                                                                                @if ($n_processo->instituicao && $n_processo->instituicao->Anexo1_Instituicao &&  $n_processo->instituicao->Anexo1_Instituicao)
                                                                                <div class="icon">
                                                                                <h6 class="text-success"> <b>Documento enviado mas precisa de correção.</b>                                                                               


                                                                                    <a class="text-success small" href="{{ asset('storage/' . $n_processo->instituicao->Anexo1_Instituicao) }}" target="_blank">
                                                                                    <i class="bi bi-file-earmark-pdf-fill"> Ver arquivo</i> </h6>                                        
                                                                                    </a>
                                                                                </div>
                                                                                @else
                                                                                <h6 class="text-danger"> Você ainda não enviou este arquivo. </h6>
    
                                                                                @endif
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6">
                                                                              <div class="form-floating">
                                                                                {!! Form::file('Anexo2_Instituicao', ['placeholder'=> 'a','class' => 'form-control', 'id' => 'formFile']) !!}
                                                                                <label for="floatingZip">Anexar Cartão CNPJ </label>

                                                                                @if ($n_processo->instituicao && $n_processo->instituicao->Anexo2_Instituicao)
                                                                                <div class="icon">
                                                                                <h6 class="text-success"> <b>Documento enviado.</b>
                                                                                  <a class="text-success small" href="{{ asset('storage/' . '$n_processo->instituicao->Anexo2_Instituicao') }}" target="_blank">
                                                                                    <i class="bi bi-file-earmark-pdf-fill"> Ver arquivo</i> </h6>                                        
                                                                                    </a>
                                                                                </div>
                                                                                @else
                                                                                <h6 class="text-danger"> Você ainda não enviou este arquivo. </h6>
    
                                                                                @endif
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
                                                      </div> </div>
                                                      <div class="col-lg-6">
                                                        {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.update', $n_processo->id], 'enctype' => 'multipart/form-data']) !!}

                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title"> <big> <b> 5. </b> </big>Identificação do <b> Responsável pelo Projeto </b></h5>

                                                                <!-- Floating Labels Form -->
                                                                <form class="row g-3">
                                                                  <div class="col-md-12">
                                                                      <div class="form-floating">
                                                                        {!! Form::text('Nome_Resp_projeto', $n_processo->Resp_projeto->Nome_Resp_projeto, ['placeholder'=> 'Nome Completo','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      

                                                                          <label for="floatingName">Nome Completo</label>
                                                                      </div>
                                                                  <br></div>
                                                                  
                                                                  <div class="row">
                                                                  <div class="col-md-4">
                                                                      <div class="form-floating">
                                                                        {!! Form::text('Telefone_Resp_projeto', $n_processo->Resp_projeto->Telefone_Resp_projeto, ['placeholder'=> 'Nome Completo','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      

                                                                        <label for="floatingName"></label>
                                                                          <label for="floatingEmail">Telefone</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-floating">

                                                                        {!! Form::number('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                        <label for="floatingName"></label>
                                                                          <label for="floatingEmail">CPF</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <div class="form-floating">
                                                                        {!! Form::number('', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!}
                                                                        <label for="floatingName"></label>
                                                                          <label for="floatingEmail">RG</label>
                                                                      </div>
                                                                  </div>
                                                            
                                                                  </div>
                                                                  <br>
                                                            
                                                                  <div class="col-12">
                                                                      <div class="form-floating">
                                                                        {!! Form::text('Endereco_Resp_projeto', $n_processo->Resp_projeto->Endereco_Resp_projeto, ['placeholder'=> 'Nome Completo','class' => 'form-control', 'id'=> 'floatingCity']) !!}                                                                                      


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
                                                      {!! Form::model($n_processo, ['method' => 'PATCH', 'route' => ['trdigital.update', $n_processo->id]]) !!}

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
                                                              {!! Form::file('Doc_Anexo2_Anexo1', ['placeholder'=> 'a','class' => 'form-control', 'id' => 'formFile']) !!}

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
                                                      

                                                      <button type="submit"
                                                      class="btn btn-primary">Enviar</button>

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
                                                         
                                                          {!! Form::close() !!}

                                          
                                                        <!-- End General Form Elements -->
                                          
                                                      </div>
                                                    </div>
                                          


                                                                {{-- <div class="form-group">
                          <label for="title">N° da nova proposta</label>
                        </div> --}}

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
