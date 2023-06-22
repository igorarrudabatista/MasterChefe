@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DRE </h3>
                <p class="text-subtitle text-muted">
                   <p>Cadastro de DRE no sistema.</p>
                 <a class="btn btn-primary" href="{{ route('dre.create') }}"> Cadastrar</a>

        
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel Gerencial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inscritos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card">
        
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            
                @elseif ($message = Session::get('edit'))
                   <div class="alert alert-warning">
                        <p>{{ $message }}</p>
                    </div>

                @elseif ($message = Session::get('delete'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            </div>
                @endif
                
                <table class='table table-striped' id="table1">
                    <thead>
                        
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Endereco</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th>Ações</th>
                            
                        </tr>
                    </thead>
                    
                    @foreach ($dre as $dres)
                    
               
                           <td><b> {{$dres->Nome?? 'Não informado'}} </b></td>
                           <td>{{$dres->Email ?? 'Não informado'}}</td>
                           <td>{{$dres->Endereco?? 'Não informado'}}</td>
                           <td>{{$dres->Tel?? 'Não informado'}}</td>
                           <td>{{$dres->cidade_id?? 'Não informado'}}</td>
                           <td> <a class="btn btn-warning" href="{{ route('dre.edit',$dres->id) }}">Editar</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['dre.destroy', $dres->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
 
                            {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
                
            </div>
        </div>
        
    </section>
</div>


@endsection