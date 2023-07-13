@extends('base.novabase')
@section('content')

<main id="main" class="main">



    <div class="pagetitle">
        <h1>CATEGORIA DOS INGREDIENTES</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active">Painel Gerencial</li>
                <li class="breadcrumb-item active">Cat. dos Ingredientes</li>
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

                </div>

                <div class="text-center mb-5">
                    <img src="{{asset('/images/violence.png')}}" height="48" class='mb-4'>
                    <h3>Editar Categorias de ingredientes</h3>
                    <p></p>
                </div>

                {!! Form::model($catingrediente, ['method' => 'PATCH','route' => ['catingrediente.update', $catingrediente->id]]) !!}
           {{-- {!! Form::model($escola, ['method' => 'PATCH','route' => ['escola.update', $escola->id]]) !!} --}}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Nome da Categoria</label>
                                        {!! Form::text('Nome', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Obs</label>
                                        {!! Form::text('Obs', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>
                                
                            

                               
               
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

</section> </main>
<script src="{{asset('/js/pages/form-editor.js')}}"></script>

@endsection