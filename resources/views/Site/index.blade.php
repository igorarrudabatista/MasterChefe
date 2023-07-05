@extends('base.base2')

@section('content')
<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">


<section class="app-main">


  <div class="app-main-left cards-area">

    @foreach($recibo as $key => $recibos )

              <div class="card-wrapper main-card">
                
                <a class="card cardItemjs"  data-toggle="modal" data-target="#exampleModal{{ $recibos->id }}">
                  <div class="card-image-wrapper cardImage-js">
                    <img src="{{asset('/images/inscricao/' . $recibos->image) ?? 'Sem registros'}}"  class="logo cardImage-js">          
                </div>
                  <div class="card-info">
                    <div class="card-text big cardText-js">{{$recibos->Nome_Prato ?? 'Nome da receita' }}</div>
                    <div class="card-text cardDre-js">{{$recibos->dre->Nome}}</div>
                    <div class="card-text small cardEscola-js ">{{$recibos->escola->EscolaNome}}</div>
                  <br>  
                 </a>     

                 @if ($recibos->hasLiked(Session::getId()))
                 <span class="badge bg-secondary"> {{$recibos->likes->count()}}</span>

                
                 <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                  </symbol>
                </svg>

                     
                  
                 <div class="card-text big cardText-js"> Obrigado pelo seu voto!</div>
                 @else
                 <form action="{{ route('site.vote', $recibos->id) }}" method="POST">
                     @csrf
                     <button class="btn-book" type="submit">Votar nesta Receita</button>
                 </form>
                 @endif  
                </div>
              </div>
             


<!-- Modal -->
  <div class="modal fade" id="exampleModal{{ $recibos->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-xl">
     
      <div class="modal-body">
        <div  class="shadow">


        <div class="main-modal">
    
          <div class="modal-left">
            
            <div class="modal-image-wrapper modalImage-js">
              <img src="{{asset('/images/inscricao/' . $recibos->image) ?? 'Sem registros'}}"  class="logo cardImage-js">          
          </div>

          <div class="modal-info-header">
            <div class="left-side">
              <h1 class="modalHeader-js"> {{$recibos->Nome_Prato ?? 'Nome da receita' }}</h1>
              <div class="modalDre-js"></div>
              <div class="card-text modalEscola-js"><b>Escola: {{$recibos->escola->EscolaNome}}</b> </div>
              <div class="card-text modalEscola-js"><b> {{$recibos->dre->Nome}} </b> </div>
      
            </div>
            <div class="right-side">
              @if ($recibos->hasLiked(Session::getId()))
              <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                
  
                  <div class="big"> Obrigado pelo seu voto!</div>
       
                </div>
                  @endif      
            </div>
          </div>
          <div class="info-bar">
            <div class="info-wrapper">
              <div class="info-icon">
              
              </div>
              <span></span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
              </div>
              <span>1111</span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
              </div>
              <span>aaa</span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
              </div>
              <span>1111</span>
            </div>
          </div> 
          <div class="desc-wrapper">
            <div class="modal-info-header">
           
              <h1>Descrição</h1>
              <table class="table table-striped">
                <thead>
                  <tr>      
                    <th></th>
                    <th>Ingredientes</th>
                    <th> <center>Quantidade</th>                                
                    <th> <center>Unidade de medida</th>                                
                    </tr>
                  </thead>             
                  <tbody>
                  @foreach($recibos->produto as $item)
                  <tr>
                      
                            
                  <td> 
                    <img src="{{asset('/images/ingredientes/')}}/{{$item->image}}"  width="60px" >
                    {{-- <img src="{{asset('/images/inscricao/' . $item->produto->image)}}" width= "60px" class="logo"> --}}
                   </td>
                        <td>{{$item->Nome}}</td>
                        <td><center> {{$quantidade = $item->pivot['Quantidade'] }}</td>
                        <td><center> {{$quantidade = $item->pivot['Quantidade'] }}</td>
                        {{-- <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td> --}}
                      
                  </tr>
          
                  @endforeach
                </tbody>
              </table>

              <div class="modal-right">
                <div class="app-main-right-header">
                  <span>+ Produtos</span>
                  <a href="#">Ver todos</a>
                </div>
                
                <div class="card-wrapper">
                  <div class="card">
                    <div class="profile-info-wrapper">
                      <div class="profile-img-wrapper">
                        <img src="https://source.unsplash.com/featured/1200x900/?woman,cool" alt="Review">
                      </div>
                      <p> </p>
                    </div>
                    <p> </p>
                  </div>
                </div>    
              </div>

              <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading"> Outros ingredientes utilizados:</h4>
                <h6 class="alert-heading"> {{$recibos->Outros_ingredientes }}</h6>
                </div>

                <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Forma de preparo:</h4>
                <h6 class="alert-heading"> {!! nl2br(e($recibos->Preparo)) !!}</h6>
                <p> </p>


                

              </div> 


    

            </div> 
 
          </div>
        </div>
          </div> 
        </div>

          </div> 
      
        </div> 
</div> 

@endforeach


   

  
</section>


{{ $recibo->links('pagination::bootstrap-4') }}








<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




@endsection