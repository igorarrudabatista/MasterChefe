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

                                                                               <h4> <b> Outros ingredientes utilizados: <h5 class="text-primary">
                                                                                {{$recibo->Outros_ingredientes }} </h5> </b></h4>

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

                                                                        <img src="{{asset('/images/inscricao/' . $recibo->image) ?? 'Sem registros'}}" width= "800px" class="logo">
                                                                      </div> </div> </div> 



  <div class="row">
  <div class="col-xl-12 col-sm-12 col-12">
      <div class="card text-center bg-lighten-2">
          <div class="card-content d-flex">
              <div class="card-body">
                  <img src="https://www.onlyoffice.com/blog/wp-content/uploads/2022/09/Blog_fillable_form_in_PDF.jpg" alt="" height="100"
                      class="mb-1">
                  <h4 class="card-title white">Nota Candidato</h4>
              
                  {{--INICIO --}}
                  <div class="row">
                  <div class="col-md-12 col-8">
                    <div class="form-group has-icon-left">
                        <label for="email-id-column"><strong> Nota 1 - Ingredientes </strong></label>
                       {{$recibo->Nota1}}    <br>      
                        <label for="email-id-column"><strong> Nota 2 - Ingredientes </strong></label>
                        {{$recibo->Nota2}}          <br>
                        <label for="email-id-column"><strong> Nota 3 - Ingredientes </strong></label>
                        {{$recibo->Nota3}}          <br>
                        <label for="email-id-column"><strong> Nota 4 - Ingredientes </strong></label>
                          {{$recibo->Nota4}}       <br>   
                        <label for="email-id-column"><strong> Nota 5 - Ingredientes </strong></label>
                          {{$recibo->Nota5}}          <br>
                        <label for="email-id-column"><strong> Nota 6 - Ingredientes </strong></label>
                        {{$recibo->Nota6}}    
                              <br>
                       <?php $totalnotas = $recibo->Nota1 + $recibo->Nota2 + $recibo->Nota3 + $recibo->Nota4 + $recibo->Nota5 + $recibo->Nota6; ?>
<br>
                        <label for="email-id-column"><strong> <h5 class="text-danger"> TOTAL:  {{$totalnotas}}.  </strong></label>
                        </div>
                </div>
                </div>
               



                                  </section>
                                  <!-- List group navigation ends -->


<script src="{{asset('/js/pages/form-editor.js')}}"></script>
@endsection