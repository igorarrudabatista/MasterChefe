@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3> Inscrição Master Chef</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Formulário Violência Escolar</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
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
                    <h3>Formulário Violência Escolar</h3>
                    <p></p>
                </div>

                {!! Form::open(array('route' => 'escola.store','method'=>'POST')) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Nome Completo</label>
                                        {!! Form::text('Nome', null, array('placeholder' => 'Código da Escola','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Telefone</label>
                                        {!! Form::text('Telefone', null, array('placeholder' => 'Nome da Escola','class' => 'form-control')) !!}
                                </div>
                                
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Email</label>
                                        {!! Form::text('Email', null, array('placeholder' => 'Endereço da Escola','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Selecione a sua escola</label>
                                        {!! Form::select('EscolaStatus', ['Ativa' => 'Ativa', 'Inativa' => 'Inativa'], null, ['class' => 'choices form-select']) !!}
                                    </div>
                            </div>
                                
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Selecione os ingredientes que contém na sua receita:</label>
                                        {!! Form::select('EscolaStatus', ['Ativa' => 'Ativa', 'Inativa' => 'Inativa'], null, ['class' => 'choices form-select']) !!}
                                    </div>
                                    
                                    <div class="col-md-6 col-12">
                                        <label for="first-name-column">Outros ingredientes</label>
                                        {!! Form::text('Outros_ingredientes', null, array('placeholder' => 'Informe aqui','class' => 'form-control')) !!}
                                </div>

                                <div class="row">
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Descreva a forma de prepara da receita:</label>
                                        {!! Form::text('Preparo', null, array('placeholder' => 'Cidade','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Estado</label>
                                        {!! Form::text('EscolaEstado', null, array('placeholder' => 'Estado','class' => 'form-control')) !!}
                                </div>

                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                    <label for="first-name-column"> <b> Escola Ativa? </b></label>
                  
        
                                {!! Form::select('EscolaStatus', ['Ativa' => 'Ativa', 'Inativa' => 'Inativa'], null, ['class' => 'choices form-select']) !!}


                                                                </div>

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

</section>
<script src="{{asset('/js/pages/form-editor.js')}}"></script>

@endsection