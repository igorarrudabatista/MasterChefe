@extends('base.novabase')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


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
                                            <th>N° da TR</th>
                                            <th>Instituição</th>
                                            <th>Titulo do Projeto</th>
                                            <th>Responsável pelo proj.</th>
                                            <th>Concedente</th>
                                            <th>Validar</th>
                                            <th>Editar</th>
                                            <th>Status - Concedente</th>
                                            <th>Status - Proponente</th>


                                            {{-- <td> <a button type="button" class="btn btn-outline-success" href="{{ route('inscricao.edit',$recibos->id) }}">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"> <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/> </svg>
                     Avaliar</a> </td>
              --}}


                                        </tr>
                                    </thead>
                                    @foreach ($nProcessos as $n_processo)
                                        <td>{{ $n_processo->id }} </td>
                                        <td> <b> {{ $n_processo->instituicao->Nome_Instituicao ?? 'Não informado' }}</b>
                                            <small>
                                                <p class="text-warning">
                                                    {{ $n_processo->Resp_Instituicao->Nome_Resp_Instituicao ?? 'Não informado' }}
                                                    <br> <a class="text-muted">
                                                        {{ $n_processo->created_at->format('m/d/Y') ?? 'Não informado' }}
                                                        </strong>
                                            </small></td>

                                        <td> <small>
                                                <p class="text-primary ">
                                                    {{ $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo ?? 'Não informado' }}
                                        </td>
                                        <td> <small>
                                                <p class="text-muted"> <strong>
                                                        {{ $n_processo->Resp_projeto->Nome_Resp_projeto ?? 'Não informado' }}
                                        </td>
                                        <td> <small> <b> {{ $n_processo->Orgaos->Sigla ?? 'Não informado' }} </b> - <i>
                                                    {{ $n_processo->Orgaos->Nome ?? ('Não informado' ?? 'Não informado') }}
                                                </i> </small></td>



                                        <td> <a button type="button" class="btn btn-outline-success"
                                                href="{{ asset('trdigital/validar/' . $n_processo->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                Validar</a> </td>

                                        <td> <a class="btn btn-warning"
                                                href="{{ route('trdigital.edit', $n_processo->id) }}">Editar</a> </td>

                                        <td>
                                            @switch($n_processo)
                                                @case($n_processo->Status == '')
                                                    <div class="dropdown">
                                                        <center> <a class="btn btn-success dropdown-toggle" href="#"
                                                                role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Ação
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <center> <a class="dropdown-item bg-warning text-white"
                                                                        href="{{ asset('trdigital/devolvido/') }}/{{ $n_processo->id }}">
                                                                        <i class="fa-solid fa-check"></i> Devolvido</a>
                                                                    <center> <a class="dropdown-item bg-primary text-white"
                                                                            href="{{ asset('trdigital/Aguardando_andamento') }}/{{ $n_processo->id }}">
                                                                            <i class="fa-solid fa-check"></i> Aguardando Andamento
                                                                            pelo órgão</a>
                                                                        <center> <a class="dropdown-item bg-success text-white"
                                                                                href="{{ asset('trdigital/finalizado') }}/{{ $n_processo->id }}">
                                                                                <i class="fa-solid fa-check"></i> Finalizado</a>
                                                            </ul>
                                                    </div>
                                                @break

                                                @case($n_processo->Status == 'DEVOLVIDO')
                                                    {{-- <center><h4><span class="badge bg-success"> SIM</span></h4> --}}
                                                    <div class="dropdown">
                                                        <center> <a class="btn btn-warning btn-sm" href="#" role="button"
                                                                id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-xmark text-light"> </i> <small class=""> 
                                                                       <b> Devolvido  </small> </a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <center> <a class="dropdown-item bg-primary text-white"
                                                                        href="{{ asset('trdigital/Aguardando_andamento/') }}/{{ $n_processo->id }}">
                                                                        <i class="fas fa-check text-light"></i> Aguardando Andamento
                                                                        pelo órgão</a>
                                                                    <center> <a class="dropdown-item bg-success text-white"
                                                                            href="{{ asset('trdigital/finalizado') }}/{{ $n_processo->id }}">
                                                                            <i class="fa-solid fa-xmark text-light"></i>
                                                                            Finalizado</a>
                                                            </ul>
                                                    </div>
                                                @break

                                                @case ($n_processo->Status == 'AGUARDANDO')
                                                    <div class="dropdown">
                                                        <center> <a class="btn btn-primary dropdown-toggle" href="#"
                                                                role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-xmark text-light"> </i> <small class="">
                                                                    Aguardando andamento pelo órgão </small> </a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <center> <a class="dropdown-item bg-warning text-white"
                                                                        href="{{ asset('trdigital/devolvido/') }}/{{ $n_processo->id }}">
                                                                        <i class="fas fa-check text-light"></i>Devolvido</a>
                                                                    <center> <a class="dropdown-item bg-success text-white"
                                                                            href="{{ asset('trdigital/finalizado') }}/{{ $n_processo->id }}">
                                                                            <i class="fa-solid fa-xmark text-light"></i>
                                                                            Finalizado</a>
                                                            </ul>

                                                    </div>
                                                    @break

                                                @case ($n_processo->Status == 'FINALIZADO')
                                                    <div class="dropdown">
                                                        <center> <a class="btn btn-success dropdown-toggle" href="#"
                                                                role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="fas fa-xmark text-light"> </i> <small class="">
                                                                    FINALIZADO </small> </a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                                <center> <a class="dropdown-item bg-warning text-white"
                                                                        href="{{ asset('trdigital/devolvido/') }}/{{ $n_processo->id }}">
                                                                        <i class="fas fa-check text-light"></i>Devolvido</a>
                                                                    <center> <a class="dropdown-item bg-primary text-white"
                                                                            href="{{ asset('trdigital/Aguardando_andamento/') }}/{{ $n_processo->id }}">
                                                                            <i class="fas fa-check text-light"></i> Aguardando
                                                                            Andamento pelo órgão</a>
                                                            </ul>

                                                    </div>
                                                @endswitch
                                            </td>
<td> </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->
                </section>
        </main>
    @endsection
