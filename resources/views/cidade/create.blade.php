@extends('base.novabase')
@section('content')

    <main id="main" class="main">

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
                            <img src="{{ asset('/images/violence.png') }}" height="48" class='mb-4'>
                            <h3>Cadastro de Cidades</h3>
                            <p></p>
                        </div>

                        {!! Form::open(['route' => 'cidade.store', 'method' => 'POST']) !!}


                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-6 col-12">

                                            <b> <label for="first-name-column">Nome da Cidade</label> </b>
                                            {!! Form::text('Nome', null, ['placeholder' => '', 'class' => 'form-control']) !!}
                                        </div>


                                        <div class="col-md-6 col-12">
                                            <label for="first-name-column">Estado</label>
                                            <select name="estado_id" id="estado_id" class="form-control">
                                                <option value="" disabled> Selecione o Estado vinculada a esta Cidade
                                                </option>
                                                @foreach ($estado as $estados)
                                                    <option value="{{ $estados->id }}">{{ $estados->Nome }} -
                                                        {{ $estados->Sigla }} </option>
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
    </main>
    <script src="{{ asset('/js/pages/form-editor.js') }}"></script>

@endsection
