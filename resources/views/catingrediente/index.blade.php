@extends('base.base')
@section('content')



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>CATEGORIA INGREDIENTES </h3>
                <p class="text-subtitle text-muted">
                   <p>Cadastro de Categorias dos Ingredientes</p>
                 <a class="btn btn-primary" href="{{ route('catingrediente.create') }}"> Cadastrar</a>

        
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel Gerencial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categorias das Categorias / Tipo de  Ingredientes</li>
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
                            <th>Obs.</th>
                            <th>Ações</th>
                            
                        </tr>
                        @foreach ($catingrediente as $cat_ingredientes2)
                    </thead>

                    
               
                           <td><b> {{$cat_ingredientes2->Nome}} </b></td>
                           <td><b> {{$cat_ingredientes2->Obs}} </b></td>
                           <td> <a class="btn btn-warning" href="{{ route('catingrediente.edit',$cat_ingredientes2->id) }}">Editar</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['catingrediente.destroy', $cat_ingredientes2->id],'style'=>'display:inline']) !!}
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