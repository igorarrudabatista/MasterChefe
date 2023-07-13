@extends('base.novabase')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>ESCOLA</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active">Painel Gerencial</li>
                <li class="breadcrumb-item active">Escola</li>
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
                    <img src="{{asset('/images/search-student.png')}}" height="48" class='mb-4'>
                    <h3>Editar Escola</h3>
                    <p></p>
                </div>

                {!! Form::model($escola, ['method' => 'PATCH','route' => ['escola.update', $escola->id]]) !!}


                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                   
                                        <label for="first-name-column">Cóidigo da Escola</label>
                                        {!! Form::text('EscolaCod', null, array('placeholder' => 'Código da Escola','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Nome da Escola</label>
                                        {!! Form::text('EscolaNome', null, array('placeholder' => 'Nome da Escola','class' => 'form-control')) !!}
                                </div>
                                
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Endereço da Escola</label>
                                        {!! Form::text('EscolaEndereco', null, array('placeholder' => 'Endereço da Escola','class' => 'form-control')) !!}
                                </div>

                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">N°</label>
                                        {!! Form::text('EscolaNumero', null, array('placeholder' => 'Número','class' => 'form-control')) !!}
                                </div>
                                
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Bairro</label>
                                        {!! Form::text('EscolaBairro', null, array('placeholder' => 'Bairro','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">CEP</label>
                                        {!! Form::text('EscolaCep', null, array('placeholder' => 'CEP','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Cidade</label>
                                        <select name="EscolaCidade" id="EscolaCidade" class="form-control">
                                            <option value="" disabled> Selecione o Município</option>
                                            @foreach ($cidade as $cidades)
                                            <option value="{{ $cidades->id}}">{{$cidades->Nome}} </option>
                                            @endforeach
                                        </select>                                     </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Estado</label>
                                        <select name="cidade_id" id="cidade_id" class="form-control">
                                            <option value="" disabled> Selecione o Estado</option>
                                            @foreach ($estado as $estados)
                                            <option value="{{ $estados->id}}">{{$estados->Nome}} </option>
                                            @endforeach
                                        </select>                                </div>
                             
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">Telefone da Escola</label>
                                        {!! Form::text('EscolaTel', null, array('placeholder' => 'Telefone da Escola','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 col-12">
                                        <label for="first-name-column">E-mail da Escola</label>
                                        {!! Form::text('EscolaEmail', null, array('placeholder' => 'E-mail da Escola','class' => 'form-control')) !!}
                                </div>

                                
                 
                             
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                    <label for="first-name-column"> <b> SELECIONE A DRE</b></label>
                  
        
                                    <select name="dre_id" id="dre_id" class="form-control">
                                        <option value="" disabled> Selecione a DRE desta escola</option>
                                        @foreach ($dre as $dres)
                                        <option value="{{ $dres->id}}">{{$dres->Nome}} </option>
                                        @endforeach
                                    </select>
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

</section> </main>
<script src="{{asset('/js/pages/form-editor.js')}}"></script>

@endsection