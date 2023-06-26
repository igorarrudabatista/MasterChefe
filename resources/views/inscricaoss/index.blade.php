@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Inscritos </h3>
                <p class="text-subtitle text-muted">
                   <p>Informações relacionadas aos Inscritos.</p>
                   {{-- <a class="btn btn-primary" href="{{ route('ministerio.create') }}"> Cadastrar Ministério</a> --}}

        
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
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                  
                            <th>Ações</th>
                          
                        </tr>
                    </thead>

                    @foreach ($inscricao as $inscritos)
                    
               
                           <td>{{$inscritos->dre_id}}</td>
                           <td>{{$inscritos->escola_id}}</td>
                           <td>{{$inscritos->Nome}}</td>
                           <td>{{$inscritos->Telefone}}</td>
                           <td>{{$inscritos->Email}}</td>
                           <td>{{$inscritos->Email}}</td>

                           


            </tr>
                        
                                            
@endforeach
    </tbody>
                </table>
                
            </div>
        </div>
        
    </section>
</div>


@endsection