@extends('base.novabase')
@section('content')

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>TR DIGITAL</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Início</a></li>
        <li class="breadcrumb-item active ">Lista de Inscritos</li>
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
                  <th>N° TR</th>
                  <th>Instituição</th>
                  <th>Titulo Projeto</th>
                  <th>Responsável pelo proj.</th>
   

                 
                </tr>
              </thead>
              @foreach ($nProcessos as $n_processo)
           <td> {{ $n_processo->id }} </td>
           <td>{{ $n_processo->instituicao->Nome_Instituicao }} </td>
           <td>{{ $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo ?? ''  }} </td>
           <td>{{ $n_processo->Resp_projeto->Nome_Resp_projeto ?? '' }} </td>
           
             
           <td> <a class="btn btn-danger" href="{{ asset('trdigital/validar/'. $n_processo->id) }}">Validar</a> 
           <td> <a class="btn btn-warning" href="{{ route('trdigital.edit',$n_processo->id) }}">Editar</a>
           
           
           
           
           
           
           
              
              



              </tr>
          @endforeach

 
</tbody>
</table>
            <!-- End Table with stripped rows -->
  </section>
</main>

@endsection