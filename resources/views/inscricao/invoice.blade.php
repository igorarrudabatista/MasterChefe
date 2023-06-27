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
                                                      <code> N° da Inscrição:  {{$recibo->id}}</code> 
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
                                                                                      <th> <center>Quantidade</th>
                                                                              
                                                                                      
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
                                                                                          <td><center> {{$quantidade = $item->pivot['Quantidade'] }}</td>
                                                                                          {{-- <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td> --}}
                                                                                        
                                                                                    </tr>
                                                                                    @endforeach
                                                                            
                                                                                  </tbody>
                                                                                </table>

                                                                              </div></div></div>
                                                                              
                                                                            
                                                                    
                                                                        

                                                                  <div class="tab-pane" id="list-profile" role="tabpanel"
                                                                      aria-labelledby="list-profile-list">
                                                                      <div class="row">

                                                                        <div class="form-group">

                                                                          <h6><strong>Modo de Preparo:</strong></h6>

                                                                          {{$recibo->Preparo}}
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
                  <h4 class="card-title white">Avaliar Candidato</h4>
                  {!! Form::model($recibo, ['method' => 'PATCH','route' => ['inscricao.update', $recibo->id]]) !!}
        
                  {{--INICIO --}}
                  <div class="row">
                  <div class="col-md-6 col-8">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Nota 1 - Ingredientes </strong></label>
                        <div class="position-relative">
                          {!! Form::text('Nota1', null, array('placeholder' => 'Insira a nota','class' => 'form-control')) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Nota 2 - Criatividade</strong></label>
                        <div class="position-relative">
                          {!! Form::text('Nota2', null, array('placeholder' => 'Insira a nota','class' => 'form-control')) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Nota 3 - Modo de Preparo </strong></label>
                        <div class="position-relative">
                          {!! Form::text('Nota3', null, array('placeholder' => 'Insira a nota','class' => 'form-control')) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Nota 4 - Outros</strong></label>
                        <div class="position-relative">
                          {!! Form::text('Nota4', null, array('placeholder' => 'Insira a nota','class' => 'form-control')) !!}            
                    </div>
                </div>
                </div>
                        {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Nota 5  - Outros</strong></label>
                        <div class="position-relative">
                          {!! Form::text('Nota5', null, array('placeholder' => 'Insira a nota','class' => 'form-control')) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  
                        {{--INICIO --}}
                  <div class="col-md-6 col-6">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Nota 6 - Outros </strong></label>
                        <div class="position-relative">
                          {!! Form::text('Nota6', null, array('placeholder' => 'Insira a nota','class' => 'form-control')) !!}            
                    </div>
                </div>
                </div>
                {{-- FIM --}}
                  <button class="btn btn-primary white"> Salvar</button>

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