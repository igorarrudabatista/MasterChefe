@extends('base.novabase')
@section('content')

<main id="main" class="main">

    
    
    <div class="pagetitle">
        <h1>ESTADOS DO BRASIL</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active">Painel Gerencial</li>
                <li class="breadcrumb-item active">Estados do Brasil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <a class="btn btn-primary" href="{{ route('estado.create') }}"> Cadastrar</a>
  

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
                
                <table class='table datatable'>
                    <thead>
                        
                        
                        <tr>
                            <th>Nome</th>
                            <th>Ações</th>
                            
                        </tr>
                    </thead>
                    @foreach ($estado as $estados)

                    
               
                           <td><b> {{$estados->Nome}} - {{$estados->Sigla}} </b></td>
                           <td> <a class="btn btn-warning" href="{{ route('estado.edit',$estados->id) }}">Editar</a>
                            {{-- {!! Form::open(['method' => 'DELETE','route' => ['estado.destroy', $estados->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
 
                            {!! Form::close() !!} --}}
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