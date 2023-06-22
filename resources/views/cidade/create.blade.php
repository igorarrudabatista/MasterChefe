@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Cidades</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro de Cidades</li>
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
                    <h3>Cadastro de Cidades</h3>
                    <p></p>
                </div>

                {!! Form::open(array('route' => 'cidade.store','method'=>'POST')) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                     <b>   <label for="first-name-column">Nome da Cidade</label> </b>
                                        {!! Form::text('Nome', null, array('placeholder' => '','class' => 'form-control')) !!}
                                </div>

                          
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Estado</label>
                                        <select name="estado_id" id="estado_id" class="form-control">
                                            <option value="" disabled> Selecione o Estado vinculada a esta Cidade</option>
                                            @foreach ($estado as $estados)
                                            <option value="{{ $estados->id}}">{{$estados->Nome}} - {{$estados->Sigla}} </option>
                                            @endforeach
                                        </select>
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