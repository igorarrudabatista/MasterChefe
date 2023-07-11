@extends('base.novabase')
@section('content')

<main id="main" class="main">

  
    <div class="pagetitle">
        <h1>Usuários do sistema</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Início</a></li>
            <li class="breadcrumb-item ">Usuários do sistema</li>
            <li class="breadcrumb-item active">Editar Usuários do sistema</li>
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
                        <h3>Editar Usuário do sistema</h3>
                        <p></p>
                    </div>
                    </div>

        
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Nome</label>
            {!! Form::text('name', null, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                   </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Email</label>
                                        <div class="position-relative">

                                        {!! Form::text('email', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Senha</label>
                                        <div class="position-relative">

                                        {!! Form::password('password', array('placeholder' => 'Senha','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Senha</label>
                                        <div class="position-relative">

                                        {!! Form::password('confirm-password', array('placeholder' => 'Confirme a Senha','class' => 'form-control')) !!}

                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>
                                </div>

                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Perfil</label>
                                        <div class="position-relative">

                                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

                                            
                                    </div>
                                </div>

                                </div>
                             
                             <!-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Company</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                            placeholder="Company">
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-6 col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-column">Email</label>
                                        <div class="position-relative">

                                        <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                                            placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            
                                    </div>                                    </div>
                                </div> -->

                                    
                                    <!-- <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="mobile-id-icon">Mobile</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Mobile" id="mobile-id-icon">
                                                <div class="form-control-icon">
                                                    <i data-feather="phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                             
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Registrar Usuário</button>
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