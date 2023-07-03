
@extends('base.base2')

@section('content')

<section class="app-main">
  <div class="app-main-left cards-area">
    
    @foreach($recibo as $key => $recibos )
    @foreach ($recibo2 as $likes)

    <div class="card-wrapper main-card">
      <a class="card cardItemjs"  onclick="openModal()">
        <div class="card-image-wrapper">
          <img src="{{asset('/images/inscricao/' . $recibos->image) ?? 'Sem registros'}}" width= "800px" class="logo">
          
        </div>
        <div class="card-info">
          <div class="card-text big cardText-js">{{$recibos->Nome ?? 'Não encontrado' }}</div>
          <div class="card-text small"> Nome do Prato: {{$recibos->Nome_Prato ?? 'Não encontrado' }}</div>
          <div class="card-text small">
            <span class="card-price"> CLIQUE PARA VER MAIS            
            </span>
            
            {{-- <a href="{{asset('/site/voto')}}/{{$recibos->id}}"><img src="{{asset('/images/vote.png')}}" alt="HTML tutorial" width="40px"></a> --}}
            
            {{-- <a href="{{asset('/site/voto')}}/{{$recibos->id}}"><img src="{{asset('/images/vote.png')}}" alt="HTML tutorial" width="60px"></a> --}}
            {{-- <a href="{{asset('/site/voto')}}/{{$recibos->id}}"><img src="{{asset('/images/vote.png')}}" alt="HTML tutorial" width="100px"></a> --}} 
            <hr>
            
            <hr>
            Recibo id:{{$recibos->id}} <br>
            Sessao navegador: {{$sessao1}} <br>
<hr>

            Likes id:  {{$likes->id}}
            Likes sessao:  {{$likes->sessao}}
            @if ($likes->sessao == $sessao1  ) 
            <h1 class="card-text big cardText-js"> Obrigado por votar! <br> <small> remover voto </small>
              <a href="{{asset('/site/retiravoto')}}/{{$recibos->id}}"><img src="https://icons-for-free.com/iconfiles/png/512/unlike-1319971786748833986.png" alt="HTML tutorial" width="40px"></a>
              @else 
            </h1>
            <a href="{{asset('/site/voto')}}/{{$recibos->id}}"><img src="{{asset('/images/vote.png')}}" alt="HTML tutorial" width="40px"></a>
            @endif 
            
          </div>
        </div>
      </a>
    </div>
    
    @endforeach 
    @endforeach

  </div>

  <div class="app-main-right cards-area">
    
    <div class="app-main-right-header">
      <span>Informações sobre o Concurso</span>
      <a href="#">Veja maisss</a>
    </div>
    @foreach($ultimos_recibos as $ultimos )
    <div class="card-wrapper main-card">
      <a class="card cardItemjs"  onclick="openModal()">
        <div class="card-image-wrapper">
        <img src="#">
      </div>
        <div class="card-info">
          <div class="card-text big cardText-js">{{$ultimos->name ?? 'Não encontrado' }}</div>
          <div class="card-text small">{{$ultimos->name ?? 'Não encontrado' }}</div>
          <div class="card-text small">
            <span  class="card-price"> {{$ultimos->preco ?? 'R$ 1.000' }}</span>
          </div>
        </div>
      </a>
    </div>
    @endforeach 


  </div>
</section>
</div>
@foreach($recibo as $recibos )

<div id="modal-window" class="shadow">
<div class="main-modal">
  <div class="modal-left">
    <div class="modal-image-wrapper">
      <img src="#">
    </div>
    <div class="modal-info-header">
      <div class="left-side">
        <h1 class="modalHeader-js"></h1>
        <p>{{$recibos->name ?? 'Não encontrado' }}</p>
      </div>
      <div class="right-side">
      <b> Preço: </b>
        <span class="amount"> {{$recibos->name ?? 'Preço ' }} </span>
      </div>
    </div>
    <div class="info-bar">
      <div class="info-wrapper">
        <div class="info-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
        </div>
        <span>2 Bedrooms</span>
      </div>
      <div class="info-wrapper">
        <div class="info-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-wind"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"/></svg>
        </div>
        <span>2 Bathrooms</span>
      </div>
      <div class="info-wrapper">
        <div class="info-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/></svg>
        </div>
        <span>1250 m2</span>
      </div>
      <div class="info-wrapper">
        <div class="info-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <span>Highly Secured</span>
      </div>
    </div>
    <div class="desc-wrapper">
      <div class="modal-info-header">
        <h1>Description</h1>
        <p>
          {{$recibos->Descricao ?? 'Não encontrado' }}
        </p>
      </div>
      
      
      <div class="desc-actions">
        <button class="btn-book">Botão</button>
        <div class="add-favourite">
          <input type="checkbox" id="favourite">
          <label for="favourite">
            <span class="favourite-icon">
              <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>  
            </span>
            <span>Favoritar</span>
          </label>
        </div>
      </div>
    </div>
  </div>

  <div class="modal-right">
    <div class="app-main-right-header">
      <span>+ Produtos</span>
      <a href="#">Ver todos</a>
    </div>
    
    @foreach($recibo as $recibos )
    <div class="card-wrapper">
      <div class="card">
        <div class="profile-info-wrapper">
          <div class="profile-img-wrapper">
            <img src="#" alt="Review">
          </div>
          <p>{{$recibos->name ?? 'Não encontrado' }} </p>
        </div>
        <p> {{$recibos->name ?? 'Não encontrado' }}</p>
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
    <script src="{{asset('/js/like/script.js')}}"></script>
@endsection