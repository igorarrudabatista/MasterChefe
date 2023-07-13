@extends('base.novabase')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>DRE</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">DRE</li>
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
                        <img src="{{asset('/images/violence.png')}}" height="48" class='mb-4'>
                        <h3>Cadastro de DRE</h3>
                        <p></p>
                    </div>
                </div>


                {!! Form::model($dre, ['method' => 'PATCH','route' => ['dre.update', $dre->id]]) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Nome da DRE</label>
                                        {!! Form::text('Nome', null, array('placeholder' => 'Código da Escola','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Telefone</label>
                                        {!! Form::text('Tel', null, array('placeholder' => 'Nome da Escola','class' => 'form-control')) !!}
                                </div>
                                
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Email</label>
                                        {!! Form::text('Email', null, array('placeholder' => 'Endereço da Escola','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Endereço</label>
                                        {!! Form::text('Endereco', null, array('placeholder' => 'Número','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">N°</label>
                                        {!! Form::text('Numero', null, array('placeholder' => 'Número','class' => 'form-control')) !!}
                                </div>
                                
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Bairro</label>
                                        {!! Form::text('Bairro', null, array('placeholder' => 'Bairro','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">CEP</label>
                                        {!! Form::text('Cep', null, array('placeholder' => 'CEP','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Cidade</label>
                                        <select name="cidade_id" id="cidade_id" class="form-control">
                                            <option value=""> Selecione a Cidade vinculada a esta DRE</option>
                                            @foreach ($cidade as $cidades)
                                            <option value="{{ $cidades->id}}">{{$cidades->Nome}} </option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Estado</label>
                                        <select name="estado_id" id="estado_id" class="form-control">
                                            <option value="" disabled> Selecione o Estado vinculada a esta DRE</option>
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