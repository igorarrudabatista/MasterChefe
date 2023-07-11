@extends('base.novabase')
@section('content')


<main id="main" class="main">

  
    <div class="pagetitle">
        <h1>Usuários do sistema</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Início</a></li>
            <li class="breadcrumb-item active">Usuários do sistema</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


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
                
           
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Perfil de Acesso</th>
                            <th>Data de Criação</th>
                            <th>Data de Atualização</th>
                            <th>Ações</th>
                          
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($data as $key => $user)
                        <tr>
               
                           <td>{{ ++$i }}</td>

                           <td>{{$user->name?? 'Sem registros'  }}</td>
                           
                           <td>{{$user->email ?? 'Sem registros'}}</td>

                           <td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                @endforeach
            @endif
        </td>
                           <td>{{$user->created_at ??  'Sem registros'}} </td>
                           <td>{{$user->updated_at ??  'Sem registros'}} </td>
                           <td> <a class="btn btn-warning" href="{{ route('users.edit',$user->id) }}">Editar</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
</main>

@endsection