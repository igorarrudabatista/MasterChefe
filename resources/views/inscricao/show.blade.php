@extends('base.novabase')
@section('content')

<main id="main" class="main">

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
                                                             
                                                              <div class="col-12 col-sm-12 col-md-12 mt-1">
                                                                  <div class="tab-content text-justify" id="nav-tabContent">
                                                                      <div class="tab-pane show active" id="list-home" role="tabpanel"
                                                                          aria-labelledby="list-home-list">
                                                                          
                                                                          <div class="form-group">

                                                                              <h6> <strong> Ingredientes escolhidos pelo candidato: </strong></h6>

                                                                              <div class="form-group">
                                                                                <table class="table table-striped">
                                                                                  <thead>
                                                                                    <tr>
                                                                                      <th>Imagem</th>
                                                                                      <th>Ingredientes</th>
                                                                                      <th>Quantidade</th>
                                                                                      <th> <center>Unidade de medida</th>
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
                                                                                     </td>
                                                                                          <td>{{$item->Nome}}</td>
                                                                                        
                                                                                          <td>{{$item->pivot['Quantidade'] }}</td>
                                                                                          <td>{{$item->pivot['unidade'] }}</td>
                                                                                          @if ($item->categoria->Nome == 'ALIMENTOS PROCESSADOS' or $item->categoria->Nome == 'ALIMENTOS ULTRAPROCESSADOS' 
                                                                                          or $item->categoria->Nome == 'INGREDIENTES CULINÁRIOS' or $item->categoria->Nome == 'ALIMENTOS PROIBIDOS')                                                                                          <td><small class="text-danger"> <b> {{$item->categoria->Nome }} </b> </small></td>
                                                                                          @else
                                                                                          <td> <small class="text-success"> <b> {{$item->categoria->Nome }} </b> </small></td>
                                                                                          @endif

                                                                              
                                                                                    </tr>
                                                                                    @endforeach
                                                                            
                                                                                  </tbody>
                                                                                </table>
                                                                                       
                                                                              <h5><strong>Outros ingredientes da receita:</strong></h5>
                                                                              {{$recibo->Outros_ingredientes }}

                                                                               

                                                                              </div></div></div>
                                                                              
                                                                            </div>
                                                                    
                                                                        <br>


                                                                        <div class="form-group">

                                                                          <h6><strong>Modo de Preparo:</strong></h6>
                                                                          <h5 class="text-primary">
                                                                          {!! nl2br(e($recibo->Preparo)) !!} 
                                                                          </h5>
                                                                        </div> </div> </div> 
                                                                                
                                                                                             <br>                                               
                                                          
                                                                    <div class="row">

                                                                      <div class="form-group">

                                                                        <h6> <strong>  </strong></h6>
                                                                        <h5><strong>Imagem do Prato:</strong></h5>

                                                                        <center>
                                                                        <img src="{{asset('/images/inscricao/' . $recibo->image) ?? 'Sem registros'}}" class="img-fluid">
                                                                      </div>
                                                                    </div>
                                                                    <br>

                                                                      <?php $totalnotasseduc = $recibo->nota_seduc1 + $recibo->nota_seduc2 + $recibo->nota_seduc3 + $recibo->nota_seduc4 + $recibo->nota_seduc5 + $recibo->nota_seduc6; ?>
                                                                      <?php $totalnotasdre = $recibo->nota_dre1 + $recibo->nota_dre2 + $recibo->nota_dre3 + $recibo->nota_dre4 + $recibo->nota_dre5; ?>
                                                                   
                                                                      <section class="section">
                                                                        <div class="row">
                                                                          <div class="col-lg-6">
                                                                  
                                                                            <div class="card">
                                                                              <div class="card-body">
                                                                                <h5 class="card-title">Candidato avaliado pela SEDUC - MT</h5>
                                                                                <ul class="list-group list-group-flush">
                                                                                  <li class="list-group-item">Alimentos in natura e minimamente processado - Até 5 itens  <b> Nota:  {{$recibo->nota_seduc1}} </b>  </li>
                                                                                  <li class="list-group-item">Alimentos in natura e minimamente processado - Acima de 6 itens  <b> Nota:  {{$recibo->nota_seduc2}} </b>  </li>
                                                                                  <li class="list-group-item">Valorização dos hábitos alimentares locais - <b>  Nota:  {{$recibo->nota_seduc3}}  </b> </li>
                                                                                  <li class="list-group-item">Processados -<b>   Nota:  {{$recibo->nota_seduc4}} </b>  </li>
                                                                                  <li class="list-group-item">Ultraprocessados - <b>  Nota:  {{$recibo->nota_seduc5}} </b>  </li>
                                                                                  <li class="list-group-item">Criatividade (inovação e originalidade) - <b>  Nota:  {{$recibo->nota_seduc6}} </b>  </li>
                                                                              </ul>   
                                                                              
                                                                            </div>
                                                                        <center>    <h5 class="card-title"> <b> TOTAL: {{$totalnotasseduc}},00 </h5> </b> </a> </center>
                                                                          </div>
                                                                  
                                                                          </div>
                                                                  
                                                                          <div class="col-lg-6">
                                                                  
                                                                            <div class="card">
                                                                              <div class="card-body">
                                                                                <h5 class="card-title">Candidato avaliado pelas DREs - MT</h5>
                                                                                <ul class="list-group list-group-flush">
                                                                                  <li class="list-group-item">Viabilidade no PNAE -  <b> Nota:  {{$recibo->nota_dre1}} </b>  </li>
                                                                                  <li class="list-group-item">Valorização dos hábitos alimentares locais - <b>  Nota:  {{$recibo->nota_dre2}}  </b> </li>
                                                                                  <li class="list-group-item"> Alimentos da Agricultura Familiar  -<b>   Nota:  {{$recibo->nota_dre3}} </b>  </li>
                                                                                  <li class="list-group-item">Alimentos da Agricultura Familiar - <b>  Nota:  {{$recibo->nota_dre4}} </b>  </li>
                                                                                  <li class="list-group-item">Criatividade (inovação e originalidade) - <b>  Nota:  {{$recibo->nota_dre5}} </b>  </li>
                                                                              </ul>                                                                              </div>
                                                                              <center>    <h5 class="card-title"> <b> TOTAL: {{$totalnotasdre}},00 </h5> </b> </a> </center>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </section>


                                                                 
                                  </section>

<script src="{{asset('/js/pages/form-editor.js')}}"></script>
@endsection