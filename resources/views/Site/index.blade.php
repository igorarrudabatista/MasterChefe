@extends('base.base2')

@section('content')

<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">


<section class="app-main">

        <div class="app-main-left cards-area">

<iframe src="{{asset('/edital/regulamento.pdf')}}" width="1800px"height="1200px">
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
                 {{-- <span class="badge bg-secondary"> {{$recibos->likes->count()}}</span> --}}
                
                
                 <div class="like-content">
                  <button class="btn-like2 like-rseview">
                  Obrigado pelo seu voto!   <i data-feather="smile" width="40"> </i>
                 </button>
                  </div>
   
              @else
                 <form action="{{route('site.vote', $recibos->id)}}" method="POST">
                     @csrf
                     {{-- <button class="alert alert-success d-flex align-items-center" role="alert" type="submit"> <i data-feather="smile" width="20"> </i>
                      Votar nesta Receita</button> --}}

        
                              
                  <div class="like-content">
                    <button class="btn-like like-review">
                    Votar nesta receita
                   </button>
                    </div>
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
              <img src="{{asset('/images/inscricao/' . $recibos->image) ?? 'Sem registros'}}" class="logo cardImage-js">          
          </div>

          <div class="modal-info-header">
            <div class="left-side">
              <h1 class="modalHeader-js"> {{$recibos->Nome_Prato ?? 'Nome da receita' }}</h1>
              <div class="modalDre-js"></div>
              {{-- <div class="card-text modalEscola-js"><b><svg fill="#ffb354" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffb354"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>school</title> <path d="M30 21.25h-6.25v-8.957l5.877 3.358c0.107 0.062 0.236 0.098 0.373 0.099h0c0.414-0.001 0.749-0.336 0.749-0.751 0-0.277-0.15-0.519-0.373-0.649l-0.004-0.002-13.623-7.784v-0.552c0.172 0.016 0.35 0.068 0.519 0.068 0.004 0 0.010 0 0.015 0 0.475 0 0.934-0.067 1.368-0.193l-0.035 0.009c0.323-0.063 0.693-0.099 1.073-0.099 0.392 0 0.775 0.039 1.146 0.112l-0.037-0.006c0.039 0.007 0.083 0.012 0.129 0.012 0.184 0 0.352-0.068 0.479-0.181l-0.001 0.001c0.161-0.139 0.263-0.343 0.264-0.571v-2.812c0 0 0-0 0-0 0-0.355-0.247-0.653-0.579-0.73l-0.005-0.001c-0.419-0.111-0.9-0.176-1.396-0.176-0.5 0-0.985 0.065-1.446 0.187l0.039-0.009c-0.288 0.067-0.618 0.105-0.958 0.105-0.231 0-0.457-0.018-0.678-0.052l0.025 0.003c-0.122-0.256-0.378-0.43-0.676-0.43-0.412 0-0.746 0.334-0.746 0.746 0 0.001 0 0.003 0 0.004v-0 4.565l-13.622 7.784c-0.227 0.132-0.378 0.374-0.378 0.651 0 0.414 0.336 0.75 0.75 0.75 0.137 0 0.265-0.037 0.376-0.101l-0.004 0.002 5.878-3.359v8.957h-6.25c-0.414 0-0.75 0.336-0.75 0.75v0 8c0 0.414 0.336 0.75 0.75 0.75h28c0.414-0 0.75-0.336 0.75-0.75v0-8c-0-0.414-0.336-0.75-0.75-0.75v0zM18.658 3.075c0.298-0.082 0.64-0.13 0.993-0.13 0.183 0 0.363 0.013 0.539 0.037l-0.020-0.002v1.339c-0.16-0.013-0.345-0.021-0.533-0.021-0.489 0-0.966 0.052-1.425 0.151l0.044-0.008c-0.304 0.088-0.653 0.139-1.014 0.139-0.174 0-0.344-0.012-0.512-0.034l0.020 0.002v-1.323c0.15 0.014 0.325 0.021 0.502 0.021 0.499 0 0.984-0.062 1.447-0.18l-0.041 0.009zM2.75 22.75h5.5v6.5h-5.5zM9.75 22v-10.564l6.25-3.571 6.25 3.572v17.814h-2.5v-5.25c-0-0.414-0.336-0.75-0.75-0.75h-6c-0.414 0-0.75 0.336-0.75 0.75v0 5.25h-2.5zM13.75 29.25v-4.5h4.5v4.5zM29.25 29.25h-5.5v-6.5h5.5zM16 19.75c2.071 0 3.75-1.679 3.75-3.75s-1.679-3.75-3.75-3.75c-2.071 0-3.75 1.679-3.75 3.75v0c0.002 2.070 1.68 3.748 3.75 3.75h0zM16 13.75c1.243 0 2.25 1.007 2.25 2.25s-1.007 2.25-2.25 2.25c-1.243 0-2.25-1.007-2.25-2.25v0c0.002-1.242 1.008-2.248 2.25-2.25h0z"></path> </g></svg> {{$recibos->escola->EscolaNome}} </b> </div>
              <div class="card-text modalEscola-js"><b>  {{$recibos->dre->Nome}} </b> </div>
       --}}
            </div>

          </div>
          <div class="info-bar">
           
            <div class="info-wrapper">
              <div class="info-icon">
                <svg fill="#ffb354" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffb354"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>school</title> <path d="M30 21.25h-6.25v-8.957l5.877 3.358c0.107 0.062 0.236 0.098 0.373 0.099h0c0.414-0.001 0.749-0.336 0.749-0.751 0-0.277-0.15-0.519-0.373-0.649l-0.004-0.002-13.623-7.784v-0.552c0.172 0.016 0.35 0.068 0.519 0.068 0.004 0 0.010 0 0.015 0 0.475 0 0.934-0.067 1.368-0.193l-0.035 0.009c0.323-0.063 0.693-0.099 1.073-0.099 0.392 0 0.775 0.039 1.146 0.112l-0.037-0.006c0.039 0.007 0.083 0.012 0.129 0.012 0.184 0 0.352-0.068 0.479-0.181l-0.001 0.001c0.161-0.139 0.263-0.343 0.264-0.571v-2.812c0 0 0-0 0-0 0-0.355-0.247-0.653-0.579-0.73l-0.005-0.001c-0.419-0.111-0.9-0.176-1.396-0.176-0.5 0-0.985 0.065-1.446 0.187l0.039-0.009c-0.288 0.067-0.618 0.105-0.958 0.105-0.231 0-0.457-0.018-0.678-0.052l0.025 0.003c-0.122-0.256-0.378-0.43-0.676-0.43-0.412 0-0.746 0.334-0.746 0.746 0 0.001 0 0.003 0 0.004v-0 4.565l-13.622 7.784c-0.227 0.132-0.378 0.374-0.378 0.651 0 0.414 0.336 0.75 0.75 0.75 0.137 0 0.265-0.037 0.376-0.101l-0.004 0.002 5.878-3.359v8.957h-6.25c-0.414 0-0.75 0.336-0.75 0.75v0 8c0 0.414 0.336 0.75 0.75 0.75h28c0.414-0 0.75-0.336 0.75-0.75v0-8c-0-0.414-0.336-0.75-0.75-0.75v0zM18.658 3.075c0.298-0.082 0.64-0.13 0.993-0.13 0.183 0 0.363 0.013 0.539 0.037l-0.020-0.002v1.339c-0.16-0.013-0.345-0.021-0.533-0.021-0.489 0-0.966 0.052-1.425 0.151l0.044-0.008c-0.304 0.088-0.653 0.139-1.014 0.139-0.174 0-0.344-0.012-0.512-0.034l0.020 0.002v-1.323c0.15 0.014 0.325 0.021 0.502 0.021 0.499 0 0.984-0.062 1.447-0.18l-0.041 0.009zM2.75 22.75h5.5v6.5h-5.5zM9.75 22v-10.564l6.25-3.571 6.25 3.572v17.814h-2.5v-5.25c-0-0.414-0.336-0.75-0.75-0.75h-6c-0.414 0-0.75 0.336-0.75 0.75v0 5.25h-2.5zM13.75 29.25v-4.5h4.5v4.5zM29.25 29.25h-5.5v-6.5h5.5zM16 19.75c2.071 0 3.75-1.679 3.75-3.75s-1.679-3.75-3.75-3.75c-2.071 0-3.75 1.679-3.75 3.75v0c0.002 2.070 1.68 3.748 3.75 3.75h0zM16 13.75c1.243 0 2.25 1.007 2.25 2.25s-1.007 2.25-2.25 2.25c-1.243 0-2.25-1.007-2.25-2.25v0c0.002-1.242 1.008-2.248 2.25-2.25h0z"></path> </g></svg>
              </div>
              <span> {{$recibos->escola->EscolaNome}}</span>
            </div>
            <div class="info-wrapper">
              <div class="info-icon">
                <svg width="24px" height="24px" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg" fill="#ffb354" stroke="#ffb354"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ffb354" d="M224 128v704h576V128H224zm-32-64h640a32 32 0 0132 32v768a32 32 0 01-32 32H192a32 32 0 01-32-32V96a32 32 0 0132-32z"></path><path fill="#ffb354" d="M64 832h896v64H64zm256-640h128v96H320z"></path><path fill="#ffb354" d="M384 832h256v-64a128 128 0 10-256 0v64zm128-256a192 192 0 01192 192v128H320V768a192 192 0 01192-192zM320 384h128v96H320zm256-192h128v96H576zm0 192h128v96H576z"></path></g></svg>
              </div>
              <span> {{$recibos->dre->Nome}}</span>
            </div>

          </div> 
          <div class="right-side">
            @if ($recibos->hasLiked(Session::getId()))
              <br>
              <div class="like-content">
                <button class="btn-like2 like-rseview">
                Obrigado pelo seu voto!   <i data-feather="smile" width="40"> </i>
               </button>
                </div>
     
                @endif      
          </div>
          <div class="desc-wrapper">
            <div class="modal-info-header">
              <h1>Descrição
           <svg fill="#ffb354" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffb354"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M405.786,75.966l0.001-67.795c0-3.245-1.921-6.183-4.893-7.485c-2.972-1.301-6.434-0.72-8.818,1.482l-18.057,16.67 L355.961,2.168c-3.13-2.888-7.952-2.889-11.083-0.001L326.811,18.84L308.751,2.168c-3.129-2.888-7.952-2.889-11.083-0.001 L279.601,18.84L261.543,2.168c-3.13-2.889-7.955-2.889-11.084,0l-18.057,16.67l-18.057-16.67 c-3.129-2.888-7.952-2.889-11.083-0.001L185.194,18.84L167.134,2.168c-3.13-2.888-7.952-2.889-11.083-0.001L137.984,18.84 L119.926,2.168c-2.384-2.202-5.846-2.783-8.818-1.482c-2.973,1.302-4.895,4.239-4.895,7.484v67.796 C52.518,120.664,21.788,186.042,21.788,256s30.73,135.336,84.425,180.033v67.796c0,3.245,1.921,6.183,4.893,7.485 c2.973,1.302,6.435,0.72,8.818-1.482l18.057-16.67l18.057,16.67c3.131,2.889,7.954,2.889,11.084,0l18.057-16.67l18.057,16.67 c3.129,2.889,7.952,2.889,11.083,0.001l18.067-16.673l18.058,16.672c3.129,2.889,7.952,2.889,11.083,0.001l18.067-16.673 l18.058,16.672c3.131,2.889,7.954,2.889,11.084,0l18.057-16.67l18.057,16.67c3.13,2.889,7.952,2.889,11.083,0.001l18.067-16.673 l18.058,16.672c1.539,1.422,3.527,2.167,5.544,2.167c1.107,0,2.221-0.224,3.275-0.685c2.973-1.302,4.893-4.24,4.893-7.485 l0.001-67.79c53.705-44.696,84.437-110.078,84.437-180.04C490.212,186.042,459.483,120.663,405.786,75.966z M106.213,344.985 C90.291,318.192,81.703,287.365,81.703,256c0-17.589,2.623-34.952,7.797-51.607c1.339-4.31-1.07-8.888-5.379-10.227 c-4.308-1.337-8.887,1.07-10.227,5.379c-5.659,18.227-8.531,37.221-8.531,56.455c0,42.616,14.492,84.323,40.851,117.792v40.423 C62.744,373.126,38.128,316.394,38.128,256c0-60.395,24.616-117.126,68.085-158.215V344.985z M389.438,485.167l-9.888-9.128 c-3.13-2.889-7.952-2.889-11.083-0.001L350.4,492.711l-18.058-16.672c-1.565-1.445-3.553-2.167-5.542-2.167 c-1.989,0-3.977,0.722-5.542,2.167l-18.057,16.67l-18.057-16.67c-3.129-2.889-7.952-2.889-11.083-0.001l-18.067,16.673 l-18.058-16.672c-3.129-2.889-7.952-2.889-11.083-0.001l-18.067,16.673l-18.058-16.672c-3.131-2.89-7.954-2.889-11.084,0 l-18.057,16.67l-18.057-16.67c-3.131-2.89-7.954-2.889-11.084,0l-9.887,9.128V26.834l9.887,9.128 c3.13,2.889,7.952,2.889,11.083,0.001l18.067-16.673l18.058,16.672c3.13,2.889,7.952,2.889,11.083,0.001l18.067-16.673 l18.058,16.672c3.13,2.89,7.955,2.889,11.084,0L256,19.291l18.057,16.67c3.129,2.889,7.952,2.889,11.083,0.001l18.067-16.673 l18.058,16.672c3.13,2.889,7.952,2.889,11.083,0.001l18.067-16.673l18.058,16.672c3.131,2.89,7.954,2.889,11.084,0l9.887-9.128 L389.438,485.167z M405.779,414.223l0.005-247.215c15.923,26.796,24.513,57.625,24.513,88.992c0,17.595-2.625,34.965-7.803,51.627 c-1.339,4.309,1.069,8.888,5.378,10.227c0.807,0.251,1.624,0.37,2.427,0.37c3.484,0,6.712-2.246,7.8-5.747 c5.666-18.235,8.538-37.235,8.538-56.477c0-42.618-14.492-84.326-40.853-117.796l0.001-40.42 c43.47,41.088,68.086,97.821,68.086,158.215C473.872,316.398,449.254,373.133,405.779,414.223z"></path> </g> </g> <g> <g> <path d="M332.351,135.064l-23.6-21.787c-3.13-2.889-7.954-2.889-11.084,0l-18.057,16.67l-18.057-16.67 c-3.129-2.888-7.952-2.889-11.083-0.001l-18.067,16.673l-18.058-16.672c-3.129-2.888-7.952-2.889-11.083-0.001l-23.61,21.787 c-3.316,3.06-3.523,8.229-0.463,11.545c3.06,3.316,8.229,3.523,11.545,0.463l18.067-16.673l18.058,16.672 c3.129,2.889,7.952,2.889,11.083,0.001l18.067-16.673l18.058,16.672c3.13,2.889,7.955,2.889,11.084,0l18.057-16.67l18.057,16.67 c1.572,1.451,3.559,2.168,5.54,2.168c2.201,0,4.394-0.883,6.006-2.629C335.873,143.294,335.666,138.124,332.351,135.064z"></path> </g> </g> <g> <g> <path d="M326.808,174.848h-14.518c-4.512,0-8.17,3.658-8.17,8.17c0,4.512,3.658,8.17,8.17,8.17h14.518 c4.512,0,8.17-3.658,8.17-8.17C334.979,178.506,331.321,174.848,326.808,174.848z"></path> </g> </g> <g> <g> <path d="M279.61,174.848h-94.418c-4.512,0-8.17,3.658-8.17,8.17c0,4.512,3.658,8.17,8.17,8.17h94.418 c4.512,0,8.17-3.658,8.17-8.17C287.78,178.506,284.122,174.848,279.61,174.848z"></path> </g> </g> <g> <g> <path d="M326.808,207.529h-14.518c-4.512,0-8.17,3.658-8.17,8.17s3.658,8.17,8.17,8.17h14.518c4.512,0,8.17-3.658,8.17-8.17 S331.321,207.529,326.808,207.529z"></path> </g> </g> <g> <g> <path d="M279.61,207.529h-94.418c-4.512,0-8.17,3.658-8.17,8.17s3.658,8.17,8.17,8.17h94.418c4.512,0,8.17-3.658,8.17-8.17 S284.122,207.529,279.61,207.529z"></path> </g> </g> <g> <g> <path d="M326.808,240.21h-14.518c-4.512,0-8.17,3.658-8.17,8.17s3.658,8.17,8.17,8.17h14.518c4.512,0,8.17-3.658,8.17-8.17 S331.321,240.21,326.808,240.21z"></path> </g> </g> <g> <g> <path d="M279.61,240.21h-94.418c-4.512,0-8.17,3.658-8.17,8.17s3.658,8.17,8.17,8.17h94.418c4.512,0,8.17-3.658,8.17-8.17 S284.122,240.21,279.61,240.21z"></path> </g> </g> <g> <g> <path d="M326.808,272.89h-14.518c-4.512,0-8.17,3.658-8.17,8.17s3.658,8.17,8.17,8.17h14.518c4.512,0,8.17-3.658,8.17-8.17 S331.321,272.89,326.808,272.89z"></path> </g> </g> <g> <g> <path d="M279.61,272.89h-94.418c-4.512,0-8.17,3.658-8.17,8.17s3.658,8.17,8.17,8.17h94.418c4.512,0,8.17-3.658,8.17-8.17 S284.122,272.89,279.61,272.89z"></path> </g> </g> <g> <g> <path d="M326.808,384.551h-14.518c-4.512,0-8.17,3.658-8.17,8.17c0,4.512,3.658,8.17,8.17,8.17h14.518 c4.512,0,8.17-3.658,8.17-8.17C334.979,388.209,331.321,384.551,326.808,384.551z"></path> </g> </g> <g> <g> <path d="M279.61,384.551h-94.418c-4.512,0-8.17,3.658-8.17,8.17c0,4.512,3.658,8.17,8.17,8.17h94.418 c4.512,0,8.17-3.658,8.17-8.17C287.78,388.209,284.122,384.551,279.61,384.551z"></path> </g> </g> </g></svg>
          </h1> <table class="table table-striped">
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
                        <td><center> {{$quantidade = $item->pivot['unidade'] }}</td>
            
                        {{-- <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td> --}}
                      
                  </tr>
          
                  @endforeach
                </tbody>
              </table>

          
{{-- 
              <div class="alert alert-primary" role="alert">
                {{-- <h6 class="alert-heading">{{$recibos->Outros_ingredientes }}</h6> --}}
                {{-- </div> --}} 
                {{-- <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Forma de preparo:</h4>
                <h6 class="alert-heading"> {!! nl2br(e($recibos->Preparo)) !!}</h6>
                <p> </p>
              </div>  --}}


                



    

            </div> 
 
          </div>
        </div>
        
<div class="modal-right">
      <div class="app-main-right-header">
        <span>Forma de Preparo <svg fill="#ffb354" width="30px" height="30px" viewBox="0 0 15 15" id="restaurant-noodle" xmlns="http://www.w3.org/2000/svg" stroke="#ffb354"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4.457,11.9892,1,8V7H14V8l-3.4961,3.9891ZM3.9882,2.5a.5.5,0,0,0-1,0v.5671l-1.7969.3675a.25.25,0,1,0,.094.4911l1.7029-.2776v.5662l-1.75.0357a.25.25,0,0,0,0,.5l1.75.0357V5.998h1Zm9.5,1.5-7.5.2625V2.9951l7.594-1.0737a.5.5,0,0,0-.1881-.9822L5.9792,2.4555a.4963.4963,0,0,0-.991.0445v.2276l-.493.1009V3.18l.493-.08V4.2974l-.493.01v.4608L13.4882,5a.5.5,0,0,0,0-1ZM10,13H5v.5757h5Z"></path> </g></svg></span>
      </div>
      
      <div class="card-wrapper">
        <div class="card">
          <div class="profile-info-wrapper">
            <div class="profile-img-wrapper">
              <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffb354" stroke="#ffb354"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="none" stroke="#ffb354" stroke-width="2" d="M19,18 L5,18 L19,18 Z M12,18 L12,12 L12,18 Z M15,18 L15,14 L15,18 Z M9,18 L9,14 L9,18 Z M19,22 L19,11.3292943 C20.1651924,10.9174579 21,9.80621883 21,8.5 C21,6.84314575 19.6568542,5.5 18,5.5 C17.6192862,5.5 17.2551359,5.57091725 16.9200387,5.7002623 C16.5495238,3.87433936 14.4600194,2 12,2 C9.53998063,2 7.45047616,3.87433936 7.07996126,5.7002623 C6.74486408,5.57091725 6.38071384,5.5 6,5.5 C4.34314575,5.5 3,6.84314575 3,8.5 C3,9.80621883 3.83480763,10.9174579 5,11.3292943 L5,22 L19,22 Z"></path> </g></svg>
            </div>
            <h6 class="alert-heading"> {!! nl2br(e($recibos->Preparo)) !!}</h6>
          </div>
        </div>
      </div>    
    <hr>
      <div class="app-main-right-header">
        <span>Outros ingredientes utilizados nesta receita: 
          </span>
      </div>
      <div class="card-wrapper">
        <div   href="1" class="card">
          <div class="profile-info-wrapper">
            <div class="profile-img-wrapper">
              <svg fill="#ffb354" width="30px" height="30px" viewBox="0 -2.89 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 117.09" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style> <g> <path class="st0" d="M36.82,107.86L35.65,78.4l13.25-0.53c5.66,0.78,11.39,3.61,17.15,6.92l10.29-0.41c4.67,0.1,7.3,4.72,2.89,8 c-3.5,2.79-8.27,2.83-13.17,2.58c-3.37-0.03-3.34,4.5,0.17,4.37c1.22,0.05,2.54-0.29,3.69-0.34c6.09-0.25,11.06-1.61,13.94-6.55 l1.4-3.66l15.01-8.2c7.56-2.83,12.65,4.3,7.23,10.1c-10.77,8.51-21.2,16.27-32.62,22.09c-8.24,5.47-16.7,5.64-25.34,1.01 L36.82,107.86L36.82,107.86z M29.74,62.97h91.9c0.68,0,1.24,0.57,1.24,1.24v5.41c0,0.67-0.56,1.24-1.24,1.24h-91.9 c-0.68,0-1.24-0.56-1.24-1.24v-5.41C28.5,63.53,29.06,62.97,29.74,62.97L29.74,62.97z M79.26,11.23 c25.16,2.01,46.35,23.16,43.22,48.06l-93.57,0C25.82,34.23,47.09,13.05,72.43,11.2V7.14l-4,0c-0.7,0-1.28-0.58-1.28-1.28V1.28 c0-0.7,0.57-1.28,1.28-1.28h14.72c0.7,0,1.28,0.58,1.28,1.28v4.58c0,0.7-0.58,1.28-1.28,1.28h-3.89L79.26,11.23L79.26,11.23 L79.26,11.23z M0,77.39l31.55-1.66l1.4,35.25L1.4,112.63L0,77.39L0,77.39z"></path> </g> </g></svg>            </div>
            <p>{{$recibos->Outros_ingredientes }} </p>
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