@extends('base.novabase')
@section('content')

<style>
    .checkbox {
  display: block;
  margin-bottom: 10px;
}

.checkbox label {
  display: flex;
  align-items: center;
}

.checkbox input[type="checkbox"] {
  margin-right: 10px;
}

.checkbox span {
  font-weight: normal;
}

    </style>

<main id="main" class="main">

  
    <div class="pagetitle">
        <h1>Editar Perfil de usuário do sistema</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Início</a></li>
            <li class="breadcrumb-item active">Perfil de Usuário</li>
            <li class="breadcrumb-item active">Editar Perfil</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-center mb-5">
                        <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                        <h3>Editar Perfil</h3>
                    </div>

                </div>


                {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column"><strong> Nome do Perfil </strong></label>
                                        {!! Form::text('name', null, array('placeholder' => 'Nome do Perfil','class' => 'form-control')) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column"><strong> Permissão </strong></label>
                                        <div class="position-relative">

                      @foreach($permission as $value)
                      <div class="checkbox">
                          <label>
                              {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions), ['class' => 'permission-checkbox']) }}
                              <span>{{ $value->name }}</span>
                          </label>
                      </div>
                  @endforeach
                    </div>
                  </div>
                                           
                                                   
                                    </div>
                                </div>
                                </div>
                                </div>
                                
                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Voltar </a>
                                <div class="col-12 d-flex justify-content-end">
                                    
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>

</section>

</main>
@endsection