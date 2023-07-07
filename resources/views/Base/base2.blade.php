<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Super Chef da Educação </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel="stylesheet" href="{{asset('/css/site/site-style.css')}}">
<style>
  

.like-content .btn-like {
	  display: block;
	  margin: 0px auto 0px;
    text-align: center;
    background: #5570c9;
    border-radius: 20px;
    box-shadow: 0 10px 20px -8px rgb(92, 105, 221);
    padding: 10px 15px;
    font-size: 14px;
    cursor: pointer;
    border: none;
    outline: none;
    color: #ffffff;
    text-decoration: none;
    -webkit-transition: 0.3s ease;
    transition: 0.3s ease;
}
.like-content .btn-like2 {
	  display: block;
	  margin: 0px auto 0px;
    text-align: center;
    background: #1abe4c;
    border-radius: 20px;
    box-shadow: 0 10px 20px -8px rgb(92, 105, 221);
    padding: 10px 15px;
    font-size: 14px;
    cursor: pointer;
    border: none;
    outline: none;
    color: #ffffff;
    text-decoration: none;
    -webkit-transition: 0.3s ease;
    transition: 0.3s ease;
}
.like-content .btn-like:hover {
	  transform: translateY(-10px);
}
.like-content .btn-like .fa {
	  margin-right: 10px;
}
.animate-like {
	animation-name: likeAnimation;
	animation-iteration-count: 1;
	animation-fill-mode: forwards;
	animation-duration: 0.65s;
}
@keyframes likeAnimation {
  0%   { transform: scale(30); }
  100% { transform: scale(1); }
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<!-- partial:index.partial.html -->
<div class="app-container">
  <section class="navigation">
    <a href="/Site" class="app-link">LOGO da LOJA</a>
    <div class="navigation-links">
      <a href="/Site" class="nav-link ">Início</a>
      <a href="#" class="nav-link active">Escolas</a>
      <a href="#" class="nav-link">DREs</a>
      <a href="yhttps://www3.seduc.mt.gov.br" class="nav-link">Seduc - MT</a> 

    </div>
  
  </section>

  <form action="{{asset('/Site')}}" method="GET" enctype="multipart/form-data">


  <section class="app-actions">
    <div class="app-actions-line">
      <div class="search-wrapper">
        <button class="loaction-btn">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin" viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
{{-- Alterar ícone --}}
        </button>
        <input type="text" name="search" placeholder="Procurar receita" class="search-input">
        <button class="search-btn">Procurar</button>
      </div>
      @if($search)
      @endif

      <div class="contact-actions-wrapper">
         <div class="contact-actions">
        <span>Informações: </span>
        <a href="#" class="contact-link">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </a>
         <a href="#" class="contact-link">
           <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle" viewBox="0 0 24 24">
             <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/>
           </svg>
         </a>
      </div>
      <div class="contact-actions socials">
        <span>Siga nos: </span>
         <a href="#" class="contact-link facebook">
           <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
         </a>
         <a href="#" class="contact-link">
           <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter" viewBox="0 0 24 24">
             <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
           </svg>
         </a>
      </div>
      </div>
    </div>

    
  </section>
  
</form>
  

@yield('content')


<script src="{{asset('/js/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>

  
  <!-- partial -->
  <script src="{{asset('/js/site/script.js')}}"></script>

  <script src="{{asset('vendors/simple-datatables/simple-datatables.js')}}"></script>
  
</body>
</html>