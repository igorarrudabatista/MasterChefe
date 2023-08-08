@extends('base.novabase')
@section('content')
<?php 
$processoCount = session()->get('processoCount'); 
$processoCount_corrigir = session()->get('processoCount_corrigir'); 
$processoCount_finalizado = session()->get('processoCount_finalizado'); 
$processoCount_aguardando = session()->get('processoCount_aguardando'); 
$processoCount_tramitada = session()->get('processoCount_tramitada'); 
$processoCount_nao_finalizada = session()->get('processoCount_nao_finalizada'); 
?>
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
                                            <th>Concedente</th>
                                            <th>Validar</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    @foreach ($nProcessos as $n_processo)
                                        <td>{{ $n_processo->id }} </td>
                                        <td> <i class="bi bi-building me-1"></i>
                                            <b> {{ $n_processo->instituicao->Nome_Instituicao ?? 'Não informado' }}</b>
                                            <small>
                                               <p class="text-success">
                                                <i class="bi bi-person-fill me-1"> </i>  {{ $n_processo->Resp_Instituicao->Nome_Resp_Instituicao ?? 'Não informado' }}
                                                    <br> <a class="text-muted">
                                                        <i class="bi bi-calendar-event me-1"> </i>  {{ $n_processo->created_at->format('m/d/Y') ?? 'Não informado' }}
                                                        </strong>
                                            </small>
                                        </td>

                                        <td> <small>
                                                <p class="text-primary ">
                                                    {{ $n_processo->Projeto_conteudo->Titulo_Projeto_Conteudo ?? 'Não informado' }}
                                        </td>
                              
                                        <td> <small> <b>   <img src="{{asset('images/brasao_mt.png')}}" width="20px"> {{ $n_processo->Orgaos->Sigla ?? 'Não informado' }} </b> - <i>
                                                    {{ $n_processo->Orgaos->Nome ?? ('Não informado' ?? 'Não informado') }}
                                                </i> </small></td>



                                        <td> <a button type="button" class="btn btn-outline-success"
                                                href="{{ asset('trdigital/validar/' . $n_processo->id) }}">
                                                <i class="bi bi-ui-checks me-1"> Validar</i>
                                            </a> </td>

                                        {{-- <td> <a class="btn btn-warning"
                                                href="{{ route('trdigital.edit', $n_processo->id) }}">Editar</a> </td> --}}

                                        <td>
                                            @switch($n_processo)
                                                @case($n_processo->Status == '' || $n_processo->Status == 'TRAMITADO')
                                                    <div class="dropdown">
                                                        <center> <a class="btn btn-success dropdown-toggle" href="#"
                                                                role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Alterar
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <center> <a class="dropdown-item bg-warning text-white"
                                                                        href="{{ asset('trdigital/corrigir/') }}/{{ $n_processo->id }}">
                                                                        <i class="bi bi-exclamation-triangle me-1"></i>
                                                                        <b> CORRIGIR </b></a> </center>

                                                                <center> <a class="dropdown-item bg-success text-white"
                                                                        href="{{ asset('trdigital/finalizado') }}/{{ $n_processo->id }}">
                                                                        <i class="bi bi-check-circle me-1"></i>
                                                                        <b> Finalizar </b></a>


                                                                    <center> <a class="dropdown-item bg-primary text-white"
                                                                            href="{{ asset('trdigital/aguardando_andamento') }}/{{ $n_processo->id }}">
                                                                            <i class="bi bi-alarm me-1"></i>
                                                                            <b> Aguardando </b></a>


                                                            </ul>
                                                    </div>
                                                @break

                                                @case($n_processo->Status == 'CORRIGIR')
                                                    {{-- <center><h4><span class="badge bg-success"> SIM</span></h4> --}}
                                                    <div class="dropdown">
                                                        <center> <a class="btn btn-warning btn-sm" href="#" role="button"
                                                                id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-exclamation-triangle me-1"><b> CORRIGIR </b> </i>
                                                            </a>


                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">


                                                                <center> <a class="dropdown-item bg-success text-white"
                                                                        href="{{ asset('trdigital/finalizado') }}/{{ $n_processo->id }}">
                                                                        <i class="bi bi-check-circle me-1"></i>
                                                                        Finalizado</a>

                                                                    <center> <a class="dropdown-item bg-primary text-white"
                                                                            href="{{ asset('trdigital/aguardando_andamento') }}/{{ $n_processo->id }}">
                                                                            <i class="bi bi-alarm me-1"></i>
                                                                            Aguardando</a>
                                                            </ul>
                                                    </div>
                                                @break

                                                @case ($n_processo->Status == 'AGUARDANDO')
                                                    <div class="dropdown">
                                                        <center> <a class="btn btn-primary btn-sm " href="#" role="button"
                                                                id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                                aria-expanded="false"> <i class="bi bi-alarm me-1"> <span>
                                                                        <b> Aguardando </b> </span> </i>
                                                            </a>




                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <center> <a class="dropdown-item bg-warning text-white"
                                                                        href="{{ asset('trdigital/corrigir/') }}/{{ $n_processo->id }}">
                                                                        <i class="bi bi-exclamation-triangle me-1"></i>
                                                                        CORRIGIR</a> </center>

                                                                <center> <a class="dropdown-item bg-success text-white"
                                                                        href="{{ asset('trdigital/finalizado') }}/{{ $n_processo->id }}">
                                                                        <i class="bi bi-check-circle me-1"></i>
                                                                        Finalizado</a>


                                                            </ul>

                                                    </div>
                                                @break

                                                @case ($n_processo->Status == 'FINALIZADO')
                                                    <div class="dropdown">
                                                        <center> <a class="btn btn-success btn-sm " href="#" role="button"
                                                                id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                                aria-expanded="false"> <i class="bi bi-check-circle me-1"> <span>
                                                                        <b> Finalizado </b></span> </i>
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <center> <a class="dropdown-item bg-warning text-white"
                                                                        href="{{ asset('trdigital/corrigir/') }}/{{ $n_processo->id }}">
                                                                        <i class="bi bi-exclamation-triangle me-1"></i>
                                                                        CORRIGIR</a> </center>



                                                                <center> <a class="dropdown-item bg-primary text-white"
                                                                        href="{{ asset('trdigital/aguardando_andamento') }}/{{ $n_processo->id }}">
                                                                        <i class="bi bi-alarm me-1"></i>
                                                                        Aguardando</a>
                                                            </ul>
                                                          </td>

                                                    </div>
                                                @endswitch
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->
                </section>
        </main>
    @endsection
