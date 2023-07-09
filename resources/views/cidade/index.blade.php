@extends('base.novabase')
@section('content')



<main id="main" class="main">


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
                            <th>Ações</th>
                            
                        </tr>
                    </thead>
                    @foreach ($cidade as $cidades)

                    
               
                           <td>{{$cidades->Nome}}</td>
                          
                           <td> <a class="btn btn-warning" href="{{ route('cidade.edit',$cidades->id) }}">Editar</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['cidade.destroy', $cidades->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
 
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