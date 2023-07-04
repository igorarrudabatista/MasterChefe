
@extends('base.base2')

@section('content')

        @if(session('success'))


@endif  
 

<section class="app-main">
  <div class="app-main-left cards-area">

    @foreach($recibo as $key => $recibos )

    <div class="card-wrapper main-card">
      <a class="card cardItemjs"  onclick="openModal()">
        <div class="card-image-wrapper">
          <img src="{{asset('/images/inscricao/' . $recibos->image) ?? 'Sem registros'}}" width= "800px" class="logo">          
      </div>
        <div class="card-info">
          <div class="card-text big cardText-js">{{$recibos->Nome_Prato ?? 'Nome da receita' }}</div>
          <div class="card-text">{{$recibos->dre->Nome}}</div>
        <br>                         
        @if ($recibos->hasLiked(Session::getId()))
        {{ $recibos->likes->count() }}
        <p>Você já votou neste recibo.</p>
    @else
        <form action="{{ route('site.vote', $recibos->id) }}" method="POST">
            @csrf
            <button type="submit">Votar</button>
        </form>
    @endif
        {{-- @if ($recibos->hasLiked(Session::getId()))

        <p>Você já votou neste recibo.</p>


    @else
        <form action="{{ route('site.vote', $recibos->id) }}" method="POST">
            @csrf
            <button type="submit">Votar</button>
        </form>
    @endif --}}


{{-- @if ($recibos->likes->count())

Descurtir

@else
<a href="{{asset('/site/voto')}}/{{$recibos->id}}"><img src="{{asset('/images/vote.png')}}" alt="HTML tutorial" width="40px"></a>

@endif --}}

         

    
            </a>
          
          </div>
        </a>
        
      </div>
      
    @endforeach 
   


  </div>

  <div class="app-main-right cards-area">
    
    <div class="app-main-right-header">
      <span>Master Chef</span>
      <a href="#">Icone</a>
    </div>
    <div class="card-wrapper main-card">
      <a class="card cardItemjs"  onclick="openModal()">
        <div class="card-image-wrapper">
      </div>
        <div class="card-info">
          <div class="card-text big cardText-js">Edital</div>
          <div class="card-text small">mais informações</div>
          <div class="card-text small">
            <span  class="card-price"> Telefone: 65 00000</span>
          </div>
        </div>
      </a>
    </div>


  </div>
</section>
</div>

<div id="modal-window" class="shadow">
  <div class="main-modal">
    <div class="modal-left">
      <div class="modal-image-wrapper">
        <img src="{{asset('/images/inscricao/' . $recibos->image) ?? 'Sem registros'}}" class="logo">          

    </div>
    <div class="modal-info-header">
      <div class="left-side">
        <h1 class="modalHeader-js"></h1>
        <div class="card-text"></div>
        <div class="card-text"><b>Escola: </b> {{$recibos->escola->EscolaNome}}</div>

      </div>
      <div class="right-side">
      <b> Localidade: </b>
        <span class="amount"> <p>{{$recibos->dre->Nome }}</p>
        </span>
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
      
              
              {{-- <th>Preço</th> --}}
              
            </tr>
          </thead>
       
          <tbody>
            <tr>
                @foreach($recibos->produto as $item)
                
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
        {{$recibos->Outros_ingredientes }} </h5> </b></h4>

        <h1>Forma de Preparo:</h1>

        {!! nl2br(e($recibos->Preparo)) !!} 

      </div>
      
      
    </div>
  </div>
  
  
  <div class="modal-right">
    <div class="app-main-right-header">
      <span>Últimas receitas enviadas</span>
    </div>
    @foreach($ultimos_recibos as $key => $recibos )
    
    <div class="card-wrapper">
      <div class="card">
        <div class="profile-info-wrapper">
          <div class="profile-img-wrapper">
            <img src="{{asset('/images/inscricao/' . $recibos->image) ?? 'Sem registros'}}" width= "800px" class="logo">          
          </div>
          {{$recibos->Nome_Prato ?? 'Nome do prato'}}
          <p> </p>
        </div>
        <p> </p>
      </div>
    </div>
    
    
    
  </div>
    
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
</div>    
</div>

@endforeach
  <script> 
    let ini= document.querySelector('#modal-window');
    ini.classList.add("hideModal");
  </script>
  <script> 
    let ini= document.querySelector('#modal-window2');
    ini.classList.add("hideModal2");
  </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endsection