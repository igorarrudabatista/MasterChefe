@extends('base.base')
@section('content')


<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
             
              <div class="card-content">
                  <div class="card-body">
                      <div class="container">
                        
                          <section class="section">
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="card">
                                              <div class="card-header">
                                                  <div class="container">
                                                      <div class="row d-flex justify-content-center">
                                                        <div class="col-sm">
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                          <B><h4> Inscrição MasterChef <br> </B>

                                                        </div> 
                                                        <div class="col-sm">
                                                        </div>
                                                      </div>
                                                      <br> 

                                                      <div class="row justify-content-md-center">
                                                          <div class="col-sm">
                                                          </div>
                                                          <div class="col-md-auto ">
                                                     <big> <code> Inscrição N°:  {{$recibo->id}}</code> </big>
                                                          </div> 
                                                          <div class="col-sm">
                                                          </div>
                                                        </div>
                                                         
                                                        <br> 
                                                          


                                              <h5 class="card-title justify-content-md-center">DADOS DO PARTICIPANTE</h5>
                                              <div class="card-body">

                                                  <code> Nome: </code>     {{$recibo->Nome ?? 'Sem registros'  }}<br>
                                                  <code> Telefone: </code> {{$recibo->Telefone ?? 'Sem registros'  }}<br>
                                                  <code> Email: </code>    {{$recibo->Email ?? 'Sem registros'  }}<br>
                                                  <code> DRE: </code>    {{$recibo->dre->Nome }}<br>
                                                  <code> Escola: </code>    {{$recibo->escola->EscolaNome ?? 'Sem registros'  }}<br>
                                                
                                              </div>
                                              </div>
                                              <hr>
                                  


                                                  <div class="card-content">
                                                      <div class="card-body">
                                                          <div class="row">
                                                              <div class="col-12 col-sm-12 col-md-4 ">
                                                                  <div class="list-group" role="tablist">
                                                                      <a class="list-group-item list-group-item-action active" id="list-home-list"
                                                                      data-bs-toggle="list" href="#list-home" role="tab">1. Ingredientes</a>
                                                                  <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                                      data-bs-toggle="list" href="#list-profile" role="tab">2. Modo de Preparo</a>
                                                                  <a class="list-group-item list-group-item-action" id="list-settings-tramitar"
                                                                      data-bs-toggle="list" href="#list-tramitar" role="tab">3. Imagem do prato </a>
                                                                  <a class="list-group-item list-group-item-action" id="list-settings-finalizar"
                                                                      data-bs-toggle="list" href="#list-finalizar" role="tab">4. AVALIAR</a>
                                                             
                                                                  </div>
                                                              </div>

                                                              <div class="col-12 col-sm-12 col-md-8 mt-1">
                                                                  <div class="tab-content text-justify" id="nav-tabContent">
                                                                      <div class="tab-pane show active" id="list-home" role="tabpanel"
                                                                          aria-labelledby="list-home-list">
                                                                          
                                                                          <div class="form-group">

                                                                              <h6> <strong> Ingredientes escolhidos pelo candidato: </strong></h6>

                                                                              <div class="form-group">
                                                                                <table class="table table-striped">
                                                                                  <thead>
                                                                                    <tr>
                                                                                      <th></th>
                                                                                      <th>Ingredientes</th>
                                                                                      <th> <center>Categoria do Ingrediente</th>
                                                                              
                                                                                      
                                                                                      {{-- <th>Preço</th> --}}
                                                                                      
                                                                                    </tr>
                                                                                  </thead>
                                                                               
                                                                                  <tbody>
                                                                                    <tr>
                                                                                        @foreach($recibo->produto as $item)
                                                                                        
                                                                                      </td>
                                                                                              
                                                                                    <td> 
                                                                                      <img src="{{asset('/images/ingredientes/')}}/{{$item->image}}"  width="60px" >
                                                                                      {{-- <img src="{{asset('/images/inscricao/' . $item->produto->image)}}" width= "60px" class="logo"> --}}
                                                                                     </td>
                                                                                          <td>{{$item->Nome}}</td>
                                                                                        
                                                                                          <td>{{$item->Quantidade}}</td>
                                                                                          
                                                                                          {{-- <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td> --}}
                                                                                        
                                                                                    </tr>
                                                                                    @endforeach
                                                                            
                                                                                  </tbody>
                                                                                </table>

                                                                                <div class="row">
                                                                                  <div class="col-md-6 col-6">
                                                                                    <div class="form-group has-icon-left">
                                                                                        <label for="email-id-column"><strong>Existe Alimentos Proibidos ?</strong>                                                                                        </strong>
                                                                                        <div class="position-relative">
                                                                                          {!! Form::checkbox('Nota1', null, array('placeholder' => 'Insira a nota','class' => 'form-control', 'max="1"' )) !!}            
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                                  <div class="col-md-6 col-6">
                                                                                    <div class="form-group has-icon-left">
                                                                                        <label for="email-id-column"><strong>Alimentos in natura e minimamente processado </strong>                                                                                        </strong>
                                                                                           <br><small class="text-danger">(Até 5 itens) Pontuação máxima - 1 Ponto </small> </label>
                                                                                        <div class="position-relative">
                                                                                          {!! Form::number('Nota1', null, array('placeholder' => 'Insira a nota','class' => 'form-control', 'max="1"' )) !!}            
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                                {{-- FIM --}}

                                                                                  {{--INICIO --}}
                                                                                  <div class="col-md-6 col-6">
                                                                                    <div class="form-group has-icon-left">
                                                                                        <label for="email-id-column"><strong>Valorização dos hábitos alimentares locais </strong>
                                                                                            <br><small class="text-danger">(Acima de 6 intens) Pontuação máxima 2 Pontos </small></label>
                                                                                        <div class="position-relative">
                                                                                          {!! Form::number('Nota2', null, array('placeholder' => 'Insira a nota','class' => 'form-control','max="2"')) !!}            
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                                  {{--INICIO --}}
                                                                                  <div class="col-md-6 col-6">
                                                                                    <div class="form-group has-icon-left">
                                                                                        <label for="email-id-column"><strong>Processados</strong>
                                                                                            <br><small class="text-danger">Pontuação máxima 2 Pontos </small></label>
                                                                                        <div class="position-relative">
                                                                                          {!! Form::number('Nota2', null, array('placeholder' => 'Insira a nota','class' => 'form-control','max="2"')) !!}            
                                                                                    </div>
                                                                                </div>
                                                                                </div>

                                                                                  {{--INICIO --}}
                                                                                  <div class="col-md-6 col-6">
                                                                                    <div class="form-group has-icon-left">
                                                                                        <label for="email-id-column"><strong>Ultraprocessados</strong>
                                                                                            <br><small class="text-danger">Pontuação máxima 3 Pontos </small></label>
                                                                                        <div class="position-relative">
                                                                                          {!! Form::number('Nota2', null, array('placeholder' => 'Insira a nota','class' => 'form-control','max="3"')) !!}            
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                                  {{--INICIO --}}
                                                                                  <div class="col-md-6 col-6">
                                                                                    <div class="form-group has-icon-left">
                                                                                        <label for="email-id-column"><strong>Criatividade (inovação e originalidade) </strong>
                                                                                            <br><small class="text-danger">Pontuação máxima 2 Pontos </small></label>
                                                                                        <div class="position-relative">
                                                                                          {!! Form::number('Nota2', null, array('placeholder' => 'Insira a nota','class' => 'form-control','max="2"')) !!}            
                                                                                    </div>
                                                                                </div>
                                                                                </div>







                                                                                </div>
                                                                              
                                                                              
                                                                                {{$recibo->Outros_ingredientes }}

                                                                              </div></div></div>
                                                                              
                                                                            
                                                                    
                                                                        

                                                                  <div class="tab-pane" id="list-profile" role="tabpanel"
                                                                      aria-labelledby="list-profile-list">
                                                                      <div class="row">

                                                                        <div class="form-group">

                                                                          <h6><strong>Modo de Preparo:</strong></h6>

                                                                          {!! nl2br(e($recibo->Preparo)) !!}

                                                                        </div> </div> </div> 
                                                                                
                                                                                                                                            
                                                                    <div class="tab-pane" id="list-tramitar" role="tabpanel"
                                                                    aria-labelledby="list-settings-list">
                                                                    <div class="row">

                                                                      <div class="form-group">

                                                                        <h6> <strong>  </strong></h6>

                                                                        <img src="{{asset('/images/inscricao/' . $recibo->image) ?? 'Sem registros'}}" width= "800px" class="logo">
                                                                      </div> </div> </div> 


  
  <div class="tab-pane" id="list-finalizar" role="tabpanel"
  aria-labelledby="list-settings-list">
  <div class="row">
  <div class="col-xl-12 col-sm-12 col-12">
      <div class="card text-center bg-lighten-2">
          <div class="card-content d-flex">
              <div class="card-body">
                  <img src="https://www.onlyoffice.com/blog/wp-content/uploads/2022/09/Blog_fillable_form_in_PDF.jpg" alt="" height="100"
                      class="mb-1">
                  <h4 class="card-title white">Avaliação do Candidato - DRE </h4> <br> 
                  {!! Form::model($recibo, ['method' => 'PATCH','route' => ['inscricao_update', $recibo->id]]) !!}
             
                  {{--INICIO --}}
                  <div class="row">
                  <div class="col-md-6 col-8">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Viabilidade no PNAE </strong>
                           <br><small class="text-danger"> Pontuação 3 Pontos </small> </label>
                        <div class="position-relative">
                          {!! Form::number('Nota1', null, array('placeholder' => 'Insira a nota','class' => 'form-control', 'max="3"' )) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong>Valorização dos hábitos alimentares locais </strong>
                            <br><small class="text-danger"> Pontuação 4 Pontos </small></label>
                        <div class="position-relative">
                          {!! Form::number('Nota2', null, array('placeholder' => 'Insira a nota','class' => 'form-control','max="4"')) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Alimentos da Agricultura Familiar </strong>
                          <br><small class="text-danger">(Até 3 itens) - Pontuação 3 Pontos </small></label>
                        </label>
                        <div class="position-relative">
                          {!! Form::number('Nota3', null, array('placeholder' => 'Insira a nota','class' => 'form-control','max="3"')) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Alimentos da Agricultura Familiar </strong>
                        <br><small class="text-danger">(Acima de 3 itens) - Pontuação 5 Pontos </small></label>
                      </label>
                        <div class="position-relative">
                          {!! Form::number('Nota4', null, array('placeholder' => 'Insira a nota','class' => 'form-control', 'max="5"')) !!}            
                    </div>
                </div>
                </div>
                        {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Criatividade (inovação e originalidade) </strong>
                          <br> <small class="text-danger">Pontuação 5 Pontos </small></label>
                        <div class="position-relative">
                          {!! Form::number('Nota5', null, array('placeholder' => 'Insira a nota','class' => 'form-control', 'max="10"')) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  
                  <button type="submit" class="btn btn-primary white"> Salvar</button>

              </div>
          </div> 
      </div>
  </div> 


  {!! Form::close() !!}



 
</div>
  </div>





 
</div>
  </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </section>
                                  <!-- List group navigation ends -->


<script src="{{asset('/js/pages/form-editor.js')}}"></script>
@endsection