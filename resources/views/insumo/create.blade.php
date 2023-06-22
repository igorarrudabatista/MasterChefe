@extends('base.base')
@section('content')
<link rel="stylesheet" href="{{asset('/css/upload_image/style.css')}}">


<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Cadastro de Ingrediente</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Painel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro de Ingrediente</li>
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
                    <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                    <h3>Cadastro de Ingrediente</h3>
                    <p></p>
                </div>

                {!! Form::open(['route' => 'insumo.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Nome do Ingrediente</label>
                                        {!! Form::text('Nome', null, array('placeholder' => 'Ex. Tomate, Páprica, Sal, Açúcar...','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Categoria</label>
                                        <select name="cat_ingredientes_id" id="cat_ingredientes_id" class="form-control">
                                            <option value="" disabled> Selecione a Categoria deste ingrediente</option>
                                            @foreach ($insumo as $cat_ingredientes)
                                            <option value="{{ $cat_ingredientes->id}}">{{$cat_ingredientes->Nome}}  </option>
                                            @endforeach
                                        </select>
                                    </div>
                                
                              

                                <div class="upload">
                                    <input type="file" title="" id="image" name="image"  class="drop-here">
                                    <div class="text text-drop">Imagem</div>
                                    <div class="text text-upload">Enviando</div>
                                    <svg class="progress-wrapper" width="300" height="300">
                                      <circle class="progress" r="115" cx="150" cy="150"></circle>
                                    </svg>
                                    <svg class="check-wrapper" width="130" height="130">
                                      <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                    </svg>
                                    <div class="shadow"></div>
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
<script src="{{ asset('/js/upload_image/script.js') }}"></script>

@endsection