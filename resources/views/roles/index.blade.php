@extends('base.novabase')
@section('content')

<main id="main" class="main">

  
    <div class="pagetitle">
        <h1>Perfil do sistema</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Início</a></li>
            <li class="breadcrumb-item active">Perfil do sistema</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
           @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
                
                <table class='table datatable' >
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Ações</th>
                          
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($roles as $key => $role)
                        <tr>
               
                           <td>{{ $role->name }}</td>
                          <td>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
                
            </div>
        </div>
        
    </section>
</div>
</main>

@endsection