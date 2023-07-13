@extends('base.novabase')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>INGREDIENTES</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Ingredientes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <a class="btn btn-primary" href="{{ route('insumo.create') }}"> Cadastrar</a>

            <section class="section">
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
        </div>

        <table class='table datatable' id="table1">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Ação</th>
                </tr>
            </thead>
            @foreach ($insumo as $key => $ingredientes2)
                <td>
                    <img src="{{ asset('/images/ingredientes/') }}/{{ $ingredientes2->image }}" width="60px"
                        alt="...">
                </td>
                <td>{{ $ingredientes2->Nome ?? 'Não encontrado' }} </td>

                @if (
                    $ingredientes2->categoria->Nome == 'ALIMENTOS PROCESSADOS' or
                        $ingredientes2->categoria->Nome == 'ALIMENTOS ULTRAPROCESSADOS' or
                        $ingredientes2->categoria->Nome == 'INGREDIENTES CULINÁRIOS' or
                        $ingredientes2->categoria->Nome == 'ALIMENTOS PROIBIDOS')
                    <td><small class="text-danger"> <b> {{ $ingredientes2->categoria->Nome }} </b> </small></td>
                @else
                    <td> <small class="text-success"> <b> {{ $ingredientes2->categoria->Nome }} </b> </small></td>
                @endif




                </td>

                <td> <a class="btn btn-warning" href="{{ route('insumo.edit', $ingredientes2->id) }}">Editar</a>
                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['insumo.destroy', $ingredientes2->id],
                        'style' => 'display:inline',
                    ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                    {!! Form::close() !!}
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
