
@extends('base.base2')

@section('content')


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
          <div class="card-text small">{{$recibos->dre->Nome}}</div>
<br>
            
            <button class="btn btn-success text-light text-right"> Leia mais... </button>
             
               <a href="{{asset('/site/voto')}}/{{$recibos->id}}"><img src="{{asset('/images/vote.png')}}" alt="HTML tutorial" width="40px"></a>
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
@foreach($recibo as $key => $recibos )

<div id="modal-window" class="shadow">
  <div class="main-modal">
    <div class="modal-left">
      <div class="modal-image-wrapper">
        <img src="{{asset('/images/inscricao/' . $recibos->image) ?? 'Sem registros'}}" class="logo">          

    </div>
    <div class="modal-info-header">
      <div class="left-side">
        <h1 class="modalHeader-js"></h1>
        <p>{{$recibos->Nome_Prato ?? 'Nome do Prato' }}</p>
      </div>
      <div class="right-side">
      <b> aaaa: </b>
        <span class="amount"> bbbb </span>
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
        <p>
          {{$Produto->Descricao ?? 'Não encontrado' }}
        </p>
      </div>
      
      <div class="desc-actions">
        <a href="{{asset('/site/voto')}}/{{$recibos->id}}"><img src="{{asset('/images/vote.png')}}" alt="HTML tutorial" width="40px"></a>
        <div class="add-favourite">
          <input type="checkbox" id="favourite">
          <label for="favourite">
            <span class="favourite-icon">
              <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>  
            </span>
          </label>
        </div>
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
    
    @endforeach
    
    
  </div>


  <button class="btn btn-close" onclick="closeM()">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
</div>    
</div>


@endforeach

  <script> 
    let ini= document.querySelector('#modal-window');
    ini.classList.add("hideModal");
  </script>
@endsection