@extends('base.novabase')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>ESCOLA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                    <li class="breadcrumb-item active">Painel Gerencial</li>
                    <li class="breadcrumb-item active">Escola</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <a class="btn btn-primary" href="{{ route('escola.create') }}"> Cadastrar</a>


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
        </div>

        <table class='table datatable' id="table1">
            <thead>
                <tr>
                    <th>Código da Escola</th>
                    <th>Nome da Escola</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ação</th>
                </tr>
            </thead>
            @foreach ($escola as $key => $escolas)
                <td>{{ $escolas->EscolaCod ?? 'Não encontrado' }} </td>
                <td>{{ $escolas->EscolaNome ?? 'Não encontrado' }} </td>
                <td>{{ $escolas->EscolaCidade ?? 'Sem registros' }} - {{ $escolas->EscolaEstado ?? 'Sem registros' }}</td>
                <td>{{ $escolas->EscolaTel ?? 'Sem registros' }}</td>
                <td>{{ $escolas->EscolaEmail ?? 'Não encontrado' }} </td>
                {{-- <td>
                            @if ($escolas->EscolaStatus == 'Ativa')
                            <span class="badge bg-success">Ativa</span>

                            @else

                            <span class="badge bg-danger">Inativa</span>


                            @endif

                        </td> --}}

                </td>

                <!-- <td> <a class="btn btn-primary" href="{{ route('escola.show', $escolas->id) }}">Ver</a> -->
                <td> <a class="btn btn-warning" href="{{ route('escola.edit', $escolas->id) }}">Editar</a>
                    {{-- {!! Form::open(['method' => 'DELETE','route' => ['escola.destroy', $escolas->id],'style'=>'display:inline']) !!}
                           {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 

                           {!! Form::close() !!} --}}
                </td>
                </tr>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        </div>

        </section>
        </div>
    </main>
    @endsection
