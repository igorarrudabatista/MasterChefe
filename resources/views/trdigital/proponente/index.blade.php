@extends('base.novabase')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <style>
        /* Estilo personalizado para o badge */
        .custom-badge {
            font-size: 1.2rem;
            padding: 0.3rem 0.6rem;
            border-radius: 0.8rem;
        }
    </style>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>TR DIGITAL</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                    <li class="breadcrumb-item active">Lista de Inscritos</li>
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
                @elseif ($message = Session::get('edit'))
                    <div class="alert alert-warning alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Mensagem:</strong> {{ $message }}
                    </div>
                @elseif ($message = Session::get('delete'))
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Mensagem:</strong> {{ $message }}
                    </div>
                @endif

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
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($nProcessos as $n_processo)

                                            
                                                <tr>
                                                    {{-- <td> 
                                                        <div class="card">
                                                            <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                                                            <div class="card-img-overlay">
                                                              <h5 class="card-title">Card with an image overlay</h5>
                                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                            </div>
                                                          </div><!-- End Card with an image overlay -->
                                                    </td>
                                                    <td> --}}
                                                        <!-- Card with an image on left -->
                                                        <div class="card mb-4">
                                                            <div class="row g-0">
                                                                <div class="col-md-4 position-relative">
                                                                    <img src="https://www.soup.io/wp-content/uploads/2022/02/How-These-Products-Can-Help-Business-Professionals.png"
                                                                        class="img-fluid rounded card-img-top" alt="...">
                                                                    @if ($n_processo->Status == 'CORRIGIR' || $n_processo->Status == '')
                                                                        <center>
                                                                            <a href="{{ route('trdigital.edit', $n_processo->id) }}">
                                                                                    <span
                                                                                    class="badge bg-warning custom-badge position-absolute top-0 end-0">
                                                                                    <i class="bi bi-exclamation-triangle me-1">CORRIGIR
                                                                                    </i></span> </a>
                                                                        </center>
                                                                    @endif
                                                                    @if ($n_processo->Status == 'FINALIZADO')
                                                                        <center>
                                                                            
                                                                            <span
                                                                            class="badge bg-success custom-badge position-absolute top-0 end-0">
                                                                            <i class="bi bi-check-circle me-1">Finalizado
                                                                            </i></span>
                                                                        </center>
                                                                    @endif
                                                                    @if ($n_processo->Status == 'AGUARDANDO')
                                                                        <center>
                                                                            <a class="btn btn-primary btn-sm "
                                                                                href="#" role="button"
                                                                                id="dropdownMenuLink"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                <i class="bi bi-alarm me-1"> <span>
                                                                                        <b> Aguardando </b> </span> </i>
                                                                            </a>
                                                                            <span
                                                                            class="badge bg-primary custom-badge position-absolute top-0 end-0">
                                                                            <i class="bi bi-alarm me-1">Aguardando
                                                                            </i></span>
                                                                        </center>
                                                                    @endif
                                                                    @if ($n_processo->Status == 'TRAMITADO')
                                                                        <center>
                                                                            
                                                                            <span
                                                                                class="badge bg-primary custom-badge position-absolute top-0 end-0">
                                                                                <i class="bi bi-arrow-right-circle me-1">Tramitado
                                                                                </i></span>

                                                                        </center>
                                                                    @endif

                                                                    {{-- <span class="badge bg-primary custom-badge position-absolute top-0 end-0">Badge Text</span> --}}

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">
                                                                            {{ $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo ?? 'Não informado' }}
                                                                        </h5>
                                                                        <h4 class="text-center"> N° da TR: <b>
                                                                                {{ $n_processo->id }}
                                                                            </b><br>
                                                                            <p class="text-primary">

                                                                            <h6 class="text-primary text-center"> <i
                                                                                    class="bi bi-calendar-event me-1">
                                                                                    {{ $n_processo->created_at->format('m/d/Y') ?? 'Não informado' }}
                                                                                </i></h6>
                                                                            </p>
                                                                        </h4>

                                                                        <center>
                                                                            <p class="card-text text-primary">
                                                                                <small>
                                                                                    <img src="{{ asset('images/brasao_mt.png') }}"
                                                                                        class="img-fluid rounded"
                                                                                        width="30px">

                                                                                    <b> {{ $n_processo->Orgaos->Sigla ?? 'Não informado' }}
                                                                                        - </b> </small>
                                                                                <i> <small>
                                                                                        {{ $n_processo->Orgaos->Nome ?? ('Não informado' ?? 'Não informado') }}
                                                                                    </small>
                                                                                </i>
                                                                            </p>
                                                                        </center>

                                                                        <hr>
                                                                        <p class="card-text">
                                                                            <b> Nome da Instituição:
                                                                                {{ $n_processo->instituicao->Nome_Instituicao ?? 'Não informado' }}
                                                                            </b>
                                                                            <br>
                                                                            <small>
                                                                                <i class="bi bi-person-fill me-1"></i>
                                                                                <a class="text-warning">
                                                                                    {{ $n_processo->Resp_Instituicao->Nome_Resp_Instituicao ?? 'Não informado' }}
                                                                                </a>
                                                                            </small>
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
