@extends('base.novabase')
@section('content')

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>LISTA INSCRITOS - DRE Rondonópolis</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
        <li class="breadcrumb-item  ">DRE</li>
        <li class="breadcrumb-item active ">Rondonópolis</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <div class="card">
      
    <div class="card-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Mensagem:</strong> {{ $message }}
</div>
</div>
    
        @elseif ($message = Session::get('edit'))
        <div class="alert alert-warning alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Mensagem:</strong> {{ $message }}
</div>
</div>

        @elseif ($message = Session::get('delete'))
        <div class="alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Mensagem:</strong> {{ $message }}
</div>
</div>
        @endif


        <div>
@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
        
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de Inscritos</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Data da insc.</th>
                  <th>Avaliar</th>
                  <th>Ava. SEDUC - ETAPA 2</th>
                  <th>Ava. DRE - ETAPA 2</th>
                  <th>Total</th>

                </tr>
              </thead>

              <tbody>
                @foreach ($recibo as $key => $recibos)
                <tr>
                  <th scope="row"><a href="{{ route('inscricao.edit',$recibos->id) }}"> {{$recibos->id }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                    <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
                    <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                  </svg></a></th>
                <td><b> {{$recibos->Nome ?? 'Não informado'}} </b><p><small class="text-muted">  <a class="text-danger"> {{$recibos->cpf ?? 'Não informado'}} </a> | <a class="text-warning"> <strong> {{$recibos->cidade->Nome ?? 'Não informado'}} </strong> | {{$recibos->dre->Nome ?? 'Não informado'}} </a> <br> <strong>{{$recibos->escola->EscolaNome ?? 'Não informado'}} </strong> </small></td>
                <td><i> {{$recibos->created_at->format("m/d/Y") ?? 'Não informado'}}</td>
                  <td> <a button type="button" class="btn btn-outline-secondary" href="{{asset('/inscricao/dre/edit/')}}/{{$recibos->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"> <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/> </svg>
                 Avaliar</a> </td>
        
{{-- ETAPA 2 SEDUC --}}
<?php $totalnotasseduc2 = $recibos->nota_drenutricao1 + $recibos->nota_drenutricao2 + $recibos->nota_drenutricao3 + $recibos->nota_drenutricao4 + $recibos->nota_drenutricao5; ?>
{{-- ETAPA 2 DRE --}}
<?php $totalnotasdre = $recibos->nota_dre1 + $recibos->nota_dre2 + $recibos->nota_dre3 + $recibos->nota_dre4 + $recibos->nota_dre5; ?>
{{-- TOTAL --}}
<?php $total = $totalnotasseduc2 + $totalnotasdre ?>



<td>  <center> <h3><span class="badge bg-success">  {{$totalnotasseduc2 ?? 'Nota não informada'}}</span></h1></td>

@if ($totalnotasdre <= 0)
  <td> <center><h3><span class="badge bg-danger">  {{$totalnotasdre ?? 'Nota não informada'}}</span></h1></td>
@else 
  <td>  <center><h3><span class="badge bg-warning">  {{$totalnotasdre ?? 'Nota não informada'}}</span></h3></td>
@endif

@if ($totalnotasseduc2 + $totalnotasdre >= 20)
<td>  <center> <h2><span class="badge bg-success">  {{$total ?? 'Nota não informada'}}</span></h2></td>
  @elseif ( $totalnotasseduc2 + $totalnotasdre < 20)
  <td>  <center> <h2><span class="badge bg-danger">  {{$total ?? 'Nota não informada'}}</span></h2></td>
  @endif


</tr>

@endforeach
</tbody>
</table>
            <!-- End Table with stripped rows -->
  </section>
</main>

@endsection