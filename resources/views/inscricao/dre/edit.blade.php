@extends('base.novabase')
@section('content')
    <main id="main" class="main">

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">

                    <div class="card-content">
                        <div class="card-body">
                            <div class="container">

                                <section class="section">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="container">
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-sm">
                                                            </div>
                                                            <div class="d-flex justify-content-center">
                                                                <B>
                                                                    <h2> Inscrição SuperChef da Educação de MT </h2>
                                                                </B>

                                                            </div>
                                                            <div class="col-sm">
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row justify-content-md-center">
                                                            <div class="col-sm">
                                                            </div>
                                                            <div class="col-md-auto ">
                                                                <big> <code> Inscrição N°: {{ $recibo->id }}</code> </big>
                                                            </div>
                                                            <div class="col-sm">
                                                            </div>
                                                        </div>

                                                        <br>



                                                        <h5 class="card-title justify-content-md-center">DADOS DO
                                                            PARTICIPANTE</h5>
                                                        <div class="card-body">
                                                            <code> Inscrição N°: {{ $recibo->id }}</code> <br>
                                                            <code> Data da Inscrição: </code>   {{$recibo->created_at->format("m/d/Y") ?? 'Não informado'}}<br>
                                                            <code> Nome: </code> {{ $recibo->Nome ?? 'Sem registros' }}<br>
                                                            <code> CPF: </code> {{ $recibo->cpf ?? 'Sem registros' }}<br>
                                                            <code> Telefone: </code> {{ $recibo->Telefone ?? 'Sem registros' }}<br>
                                                            <code> Munícipio: </code> {{ $recibo->cidade->Nome ?? 'Sem registros' }}<br>
                                                            <code> Email: </code> {{ $recibo->Email ?? 'Sem registros' }}<br>
                                                            <code> DRE: </code> {{ $recibo->dre->Nome }}<br>
                                                            <code> Escola: </code>
                                                            {{ $recibo->escola->EscolaNome ?? 'Sem registros' }}<br>
                                                                <br>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="alert alert-danger"
                                                            role="alert">
                                                       <center> <h4 class="alert-heading">Nome da Receita: </h4> </center>
                                                            <p class="text-center"> <b> {{$recibo->Nome_Prato}} </b></p>
                                                        </div>                                             
                                                    </div>
                                                    
                                                    <hr>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row">

                                                                <div class="col-12 col-sm-12 col-md-4 ">
                                                                    <div class="list-group" role="tablist">
                                                                        <a class="list-group-item list-group-item-action active"
                                                                            id="list-home-list" data-bs-toggle="list"
                                                                            href="#list-home" role="tab">1.
                                                                            Ingredientes</a>

                                                                        <a class="list-group-item list-group-item-action"
                                                                            id="list-profile-list" data-bs-toggle="list"
                                                                            href="#list-profile" role="tab">2. Modo de
                                                                            Preparo</a>

                                                                        <a class="list-group-item list-group-item-action"
                                                                            id="list-settings-tramitar"
                                                                            data-bs-toggle="list" href="#list-tramitar"
                                                                            role="tab">3. Imagem do prato </a>

                                                                        <a class="list-group-item list-group-item-action"
                                                                            id="list-settings-seduc" data-bs-toggle="list"
                                                                            href="#list-seduc" role="tab">4. Avaliação
                                                                            SEDUC - <b> Etapa 1 </b> </a>

                                                                        <a class="list-group-item list-group-item-action"
                                                                            id="list-settings-seduc2" data-bs-toggle="list"
                                                                            href="#list-seduc2" role="tab"> 5. Avaliação
                                                                            SEDUC - <b> Etapa 2 </b></a>

                                                                        <a class="list-group-item list-group-item-action"
                                                                            id="list-settings-dre1" data-bs-toggle="list"
                                                                            href="#list-dre1" role="tab"> 6. Avaliação
                                                                            DRE - <b> Etapa 2 </b></a>

                                                                        {{-- <a class="list-group-item list-group-item-action"
                                                                            id="list-settings-dre2" data-bs-toggle="list"
                                                                            href="#list-dre2" role="tab">6. Avaliação
                                                                            DRE - Diretor</a> --}}

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-12 col-md-8 mt-1">
                                                                    <div class="tab-content text-justify"
                                                                        id="nav-tabContent">

                                                                        
                                                                        <div class="tab-pane show active" id="list-home"
                                                                            role="tabpanel"
                                                                            aria-labelledby="list-home-list">


                                                                            <div class="alert alert-primary" role="alert">
                                                                                <h4 class="alert-heading">Ingredientes
                                                                                    escolhidos pelo candidato: </h4>
                                                                          

                                                                            <div class="card-body">

                                                                                <button type="button"
                                                                                    class="btn btn-success btn-sm mb-2">
                                                                                    ALIMENTOS IN NATURA E MINIMAMENTE
                                                                                    PROCESSADOS
                                                                                    <span
                                                                                        class="badge bg-white text-success">{{ $recibo->produto->where('categoria.Nome', 'ALIMENTOS IN NATURA E MINIMAMENTE PROCESSADOS')->count() }}

                                                                                    </span>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn btn-primary btn-sm mb-2">
                                                                                    INGREDIENTES CULINÁRIOS <span
                                                                                        class="badge bg-white text-primary">{{ $recibo->produto->where('categoria.Nome', 'INGREDIENTES CULINÁRIOS')->count() }}
                                                                                    </span>
                                                                                </button>
                                                                                <button type="nota_seduc4"
                                                                                    class="btn btn-warning btn-sm mb-2">
                                                                                    ALIMENTOS PROCESSADOS <span
                                                                                        class="badge bg-white text-warning">
                                                                                        {{ $recibo->produto->where('categoria.Nome', 'ALIMENTOS PROCESSADOS')->count() }}
                                                                                    </span>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn btn-secondary btn-sm mb-2">
                                                                                    ALIMENTOS ULTRAPROCESSADOS <span
                                                                                        class="badge bg-white text-secondary">
                                                                                        {{ $recibo->produto->where('categoria.Nome', 'ALIMENTOS ULTRAPROCESSADOS')->count() }}

                                                                                    </span>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn btn-danger btn-sm mb-2">
                                                                                    ALIMENTOS PROIBIDOS <span
                                                                                        class="badge bg-white text-danger">{{ $recibo->produto->where('categoria.Nome', 'ALIMENTOS PROIBIDOS')->count() }}
                                                                                    </span>
                                                                                </button>

                                                                            </div>
                                                                        </div>


                                                                            <div class="form-group">
                                                                                <table class="table table-striped">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Imagem</th>
                                                                                            <th>Ingredientes</th>
                                                                                            <th>Quantidade</th>
                                                                                            <th>
                                                                                                <center>Unid. de medida
                                                                                            </th>
                                                                                            <th>
                                                                                                <center>Categoria do
                                                                                                    Ingrediente
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>

                                                                                    <tbody>
                                                                                        <tr>
                                                                                            @foreach ($recibo->produto as $item)
                                                                                                </td>
                                                                                                <td>
                                                                                                    <img src="{{ asset('/images/ingredientes/') }}/{{ $item->image }}"
                                                                                                        width="60px">
                                                                                                </td>
                                                                                                <td>{{ $item->Nome }}
                                                                                                </td>

                                                                                                <td>{{ $item->pivot['Quantidade'] }}
                                                                                                </td>
                                                                                                <td> {{ $item->pivot['unidade'] }}
                                                                                                </td>

                                                                                                @if ($item->categoria->Nome == 'ALIMENTOS PROCESSADOS')
                                                                                                    <td> <small
                                                                                                            class="text-warning">
                                                                                                            <span
                                                                                                                class="badge bg-warning">{{ $item->categoria->Nome }}</span>
                                                                                                    </td>
                                                                                                @endif
                                                                                                @if ($item->categoria->Nome == 'ALIMENTOS ULTRAPROCESSADOS')
                                                                                                    <td> <small
                                                                                                            class="text-secondary">
                                                                                                            <span
                                                                                                                class="badge bg-secondary">{{ $item->categoria->Nome }}</span>
                                                                                                    </td>
                                                                                                @endif

                                                                                                @if ($item->categoria->Nome == 'INGREDIENTES CULINÁRIOS')
                                                                                                    <td> <small
                                                                                                            class="text-primary">
                                                                                                            <span
                                                                                                                class="badge bg-primary">{{ $item->categoria->Nome }}

                                                                                                            </span>
                                                                                                    </td>
                                                                                                @endif
                                                                                                @if ($item->categoria->Nome == 'ALIMENTOS PROIBIDOS')
                                                                                                    <td> <small
                                                                                                            class="text-danger">
                                                                                                            <span
                                                                                                                class="badge bg-danger">{{ $item->categoria->Nome }}</span>
                                                                                                    </td>
                                                                                                @endif

                                                                                                @if ($item->categoria->Nome == 'ALIMENTOS IN NATURA E MINIMAMENTE PROCESSADOS')
                                                                                                    <td> <small
                                                                                                            class="text-success">
                                                                                                            <span
                                                                                                                class="badge bg-success">{{ $item->categoria->Nome }}</span>

                                                                                                    </td>
                                                                                                @endif


                                                                                        </tr>
                                                                                        @endforeach

                                                                                    </tbody>
                                                                                </table>
                                                                                <div class="alert alert-primary"
                                                                                    role="alert">
                                                                                    <h4 class="alert-heading">Outros
                                                                                        ingedientes da receita: </h4>
                                                                                    <p class="mb-0">
                                                                                        {{ $recibo->Outros_ingredientes }}
                                                                                    </p>
                                                                                </div>

                                                                            </div>



                                                                        </div>

                                                                        <div class="tab-pane" id="list-profile"
                                                                            role="tabpanel"
                                                                            aria-labelledby="list-profile-list">
                                                                            <div class="row">

                                                                                <div class="form-group">
                                                                                    <div class="alert alert-primary"
                                                                                        role="alert">
                                                                                        <h4 class="alert-heading">Modo de
                                                                                            Preparo: </h4>
                                                                                        <p class="mb-0"></p>
                                                                                    </div>
                                                                                    {!! nl2br(e($recibo->Preparo)) !!}

                                                                                </div>
                                                                            </div>
                                                                        </div>



                                                                        <div class="tab-pane" id="list-tramitar"
                                                                            role="tabpanel"
                                                                            aria-labelledby="list-settings-list">
                                                                            <div class="row">

                                                                                <div class="col-xl-12 col-sm-12 col-12">
                                                                                    <div
                                                                                        class="card text-center bg-lighten-2">
                                                                                        <div class="card-content d-flex">
                                                                                            <div class="card-body">
                                                                                                <div class="alert alert-primary"
                                                                                                    role="alert">
                                                                                                    <h4
                                                                                                        class="alert-heading">
                                                                                                        Imagem enviada pelo
                                                                                                        candidato:</h4>
                                                                                                    <p> Os campos de notas
                                                                                                        abaixo são para o
                                                                                                        uso exclusivo da
                                                                                                        Seduc - MT </p>
                                                                                                    <hr>
                                                                                                    <p class="mb-0"></p>
                                                                                                    <img src="{{ asset('/images/inscricao/' . $recibo->image) ?? 'Sem registros' }}"
                                                                                                        width="600px">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>




                                                                        <div class="tab-pane" id="list-seduc"
                                                                        role="tabpanel"
                                                                        aria-labelledby="list-settings-list">
                                                                        <div class="row">
                                                                            <div class="col-xl-12 col-sm-12 col-12">
                                                                                <div
                                                                                    class="card text-center bg-lighten-2">
                                                                                    <div class="card-content d-flex">
                                                                                        <div class="card-body">
                                                                                     
                                                                                            <div class="alert alert-primary"
                                                                                                role="alert">
                                                                                                <h4
                                                                                                    class="alert-heading">
                                                                                                    Avaliação SEDUC - MT <br><b> ETAPA 1 </b>
                                                                                                </h4>
                                                                                                
                                                                                            </div>

                                                                                            {!! Form::model($recibo, ['method' => 'PATCH', 'route' => ['inscricao_update', $recibo->id]]) !!}

                                                                                            <div class="row">

                                                                                                <ul class="list-group">
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">Alimentos
                                                                                                            in natura e
                                                                                                            minimamente
                                                                                                            processado
                                                                                                            (Até 5
                                                                                                            itens) </a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_seduc1 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">Alimentos
                                                                                                            in
                                                                                                            natura e
                                                                                                            minimamente
                                                                                                            processado
                                                                                                            (Mais
                                                                                                            de 6
                                                                                                            itens) </a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_seduc2 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                 
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">
                                                                                                            Processados
                                                                                                        </a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_seduc3 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">
                                                                                                            Ultraprocessados
                                                                                                        </a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_seduc4 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">
                                                                                                            Criatividade
                                                                                                            (inovação
                                                                                                            e
                                                                                                            originalidade)
                                                                                                        </a>
                                                                                                      <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_seduc5 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>

                                                                                                </ul>



                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="tab-pane" id="list-seduc2"
                                                                        role="tabpanel"
                                                                        aria-labelledby="list-settings-list2">
                                                                        <div class="row">
                                                                            <div class="col-xl-12 col-sm-12 col-12">
                                                                                <div
                                                                                    class="card text-center bg-lighten-2">
                                                                                    <div class="card-content d-flex">
                                                                                        <div class="card-body">
                                                                                            <img src="https://www.onlyoffice.com/blog/wp-content/uploads/2022/09/Blog_fillable_form_in_PDF.jpg"
                                                                                                alt=""
                                                                                                height="100"
                                                                                                class="mb-1">
                                                                                            <div class="alert alert-primary"
                                                                                                role="alert">
                                                                                                <h4
                                                                                                    class="alert-heading">
                                                                                                    Avaliação SEDUC - MT <br><b> ETAPA 2 </b>
                                                                                                </h4>
                                                                                                
                                                                                            </div>

                                                                                            {!! Form::model($recibo, ['method' => 'PATCH', 'route' => ['inscricao_update', $recibo->id]]) !!}

                                                                                            <div class="row">

                                                                                                <ul class="list-group">
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}"> Viabilidade
                                                                                                            no PNAE</a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_drenutricao1 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">Valorização
                                                                                                            dos
                                                                                                            hábitos
                                                                                                            alimentares
                                                                                                            locais </a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_drenutricao2 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">
                                                                                                            Alimentos
                                                                                                                    da
                                                                                                                    Agricultura
                                                                                                                    Familiar(Até
                                                                                                                    3 itens)
                                                                                                        </a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_drenutricao3 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">
                                                                                                            Alimentos
                                                                                                            da
                                                                                                            Agricultura
                                                                                                            Familiar(Acima
                                                                                                                    de 3
                                                                                                                    itens)
                                                                                                        </a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_drenutricao4 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                                                                        <a
                                                                                                            href="{{ asset('/inscricao/dre/drealtafloresta') }}">
                                                                                                            Criatividade
                                                                                                            (inovação
                                                                                                            e
                                                                                                            originalidade)
                                                                                                        </a>
                                                                                                        <span
                                                                                                            class="badge bg-primary rounded-pill">
                                                                                                            {{ $recibo->nota_drenutricao5 ?? 'Avaliação não informada' }}</span>
                                                                                                    </li>
                                                                                                    

                                                                                                </ul>



                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                        <div class="tab-pane" id="list-seduc2"
                                                                            role="tabpanel"
                                                                            aria-labelledby="list-settings-seduc2">
                                                                            <div class="row">
                                                                                <div class="col-xl-12 col-sm-12 col-12">
                                                                                    <div
                                                                                        class="card text-center bg-lighten-2">
                                                                                        <div class="card-content d-flex">
                                                                                            <div class="card-body">
                                                                                                <img src="https://www.onlyoffice.com/blog/wp-content/uploads/2022/09/Blog_fillable_form_in_PDF.jpg"
                                                                                                    alt=""
                                                                                                    height="100"
                                                                                                    class="mb-1">
                                                                                                <div class="alert alert-primary"
                                                                                                    role="alert">
                                                                                                    <h4
                                                                                                        class="alert-heading">
                                                                                                        Avaliação
                                                                                                        SEDUC - <b> ETAPA
                                                                                                            2</b>
                                                                                                    </h4>
                                                                                                    <p> Os campos de notas
                                                                                                        abaixo são para o
                                                                                                        uso exclusivo da
                                                                                                        SEDUC
                                                                                                    </p>
                                                                                                    <hr>
                                                                                                    <p class="mb-0"></p>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-md-6 col-8">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>
                                                                                                                    Viabilidade
                                                                                                                    no PNAE
                                                                                                                </strong>
                                                                                                                <br><small
                                                                                                                    class="text-danger">
                                                                                                                    Pontuação
                                                                                                                    3 Pontos
                                                                                                                </small>
                                                                                                            </label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_drenutricao1', null, [
                                                                                                                    'placeholder' => 'Insira a nota',
                                                                                                                    'class' => 'form-control',
                                                                                                                    'max="3"',
                                                                                                                ]) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 col-6">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>Valorização
                                                                                                                    dos
                                                                                                                    hábitos
                                                                                                                    alimentares
                                                                                                                    locais
                                                                                                                </strong>
                                                                                                                <br><small
                                                                                                                    class="text-danger">
                                                                                                                    Pontuação
                                                                                                                    máxima:
                                                                                                                    4 Pontos
                                                                                                                </small></label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_drenutricao2', null, [
                                                                                                                    'placeholder' => 'Insira a nota',
                                                                                                                    'class' => 'form-control',
                                                                                                                    'max="4"',
                                                                                                                ]) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 col-6">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>
                                                                                                                    Alimentos
                                                                                                                    da
                                                                                                                    Agricultura
                                                                                                                    Familiar
                                                                                                                </strong>
                                                                                                                <br><small
                                                                                                                    class="text-danger">(Até
                                                                                                                    3 itens)
                                                                                                                    -
                                                                                                                    Pontuação
                                                                                                                    máxima:
                                                                                                                    3 Pontos
                                                                                                                </small></label>
                                                                                                            </label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_drenutricao3', null, [
                                                                                                                    'placeholder' => 'Insira a nota',
                                                                                                                    'class' => 'form-control',
                                                                                                                    'max="3"',
                                                                                                                ]) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 col-6">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>
                                                                                                                    Alimentos
                                                                                                                    da
                                                                                                                    Agricultura
                                                                                                                    Familiar
                                                                                                                </strong>
                                                                                                                <br><small
                                                                                                                    class="text-danger">(Acima
                                                                                                                    de 3
                                                                                                                    itens) -
                                                                                                                    Pontuação
                                                                                                                    máxima:
                                                                                                                    5 Pontos
                                                                                                                </small></label>
                                                                                                            </label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_drenutricao4', null, [
                                                                                                                    'placeholder' => 'Insira a nota',
                                                                                                                    'class' => 'form-control',
                                                                                                                    'max="5"',
                                                                                                                ]) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 col-6">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>
                                                                                                                    Criatividade
                                                                                                                    (inovação
                                                                                                                    e
                                                                                                                    originalidade)
                                                                                                                </strong>
                                                                                                                <br> <small
                                                                                                                    class="text-danger">Pontuação
                                                                                                                    máxima:
                                                                                                                    5 Pontos
                                                                                                                </small></label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_drenutricao5', null, [
                                                                                                                    'placeholder' => 'Insira a nota',
                                                                                                                    'class' => 'form-control',
                                                                                                                    'max="5"',
                                                                                                                ]) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-12 col-12">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <br>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                <button
                                                                                                                    type="submit"
                                                                                                                    class="btn btn-primary white">
                                                                                                                    Salvar</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane" id="list-dre1"
                                                                            role="tabpanel"
                                                                            aria-labelledby="list-settings-dre1">
                                                                            <div class="row">
                                                                                <div class="col-xl-12 col-sm-12 col-12">
                                                                                    <div
                                                                                        class="card text-center bg-lighten-2">
                                                                                        <div class="card-content d-flex">
                                                                                            <div class="card-body">
                                                                                                <img src="https://www.onlyoffice.com/blog/wp-content/uploads/2022/09/Blog_fillable_form_in_PDF.jpg"
                                                                                                    alt=""
                                                                                                    height="100"
                                                                                                    class="mb-1">
                                                                                                <div class="alert alert-primary"
                                                                                                    role="alert">
                                                                                                    <h4
                                                                                                        class="alert-heading">
                                                                                                        Avaliação
                                                                                                        DRE
                                                                                                    </h4>
                                                                                                    <p> Os campos de notas
                                                                                                        abaixo são para o
                                                                                                        uso exclusivo da
                                                                                                        DRE
                                                                                                    </p>
                                                                                                    <hr>
                                                                                                    <p class="mb-0"></p>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-md-6 col-8">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>
                                                                                                                    Viabilidade
                                                                                                                    no PNAE
                                                                                                                </strong>
                                                                                                                <br><small
                                                                                                                    class="text-danger">
                                                                                                                    Pontuação
                                                                                                                    3 Pontos
                                                                                                                </small>
                                                                                                            </label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_dre1', null, ['placeholder' => 'Insira a nota', 'class' => 'form-control', 'max="3"']) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 col-6">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>Valorização
                                                                                                                    dos
                                                                                                                    hábitos
                                                                                                                    alimentares
                                                                                                                    locais
                                                                                                                </strong>
                                                                                                                <br><small
                                                                                                                    class="text-danger">
                                                                                                                    Pontuação
                                                                                                                    máxima:
                                                                                                                    4 Pontos
                                                                                                                </small></label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_dre2', null, ['placeholder' => 'Insira a nota', 'class' => 'form-control', 'max="4"']) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 col-6">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>
                                                                                                                    Alimentos
                                                                                                                    da
                                                                                                                    Agricultura
                                                                                                                    Familiar
                                                                                                                </strong>
                                                                                                                <br><small
                                                                                                                    class="text-danger">(Até
                                                                                                                    3 itens)
                                                                                                                    -
                                                                                                                    Pontuação
                                                                                                                    máxima:
                                                                                                                    3 Pontos
                                                                                                                </small></label>
                                                                                                            </label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_dre3', null, ['placeholder' => 'Insira a nota', 'class' => 'form-control', 'max="3"']) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 col-6">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>
                                                                                                                    Alimentos
                                                                                                                    da
                                                                                                                    Agricultura
                                                                                                                    Familiar
                                                                                                                </strong>
                                                                                                                <br><small
                                                                                                                    class="text-danger">(Acima
                                                                                                                    de 3
                                                                                                                    itens) -
                                                                                                                    Pontuação
                                                                                                                    máxima:
                                                                                                                    5 Pontos
                                                                                                                </small></label>
                                                                                                            </label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_dre4', null, ['placeholder' => 'Insira a nota', 'class' => 'form-control', 'max="5"']) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 col-6">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <label
                                                                                                                for="email-id-column"><strong>
                                                                                                                    Criatividade
                                                                                                                    (inovação
                                                                                                                    e
                                                                                                                    originalidade)
                                                                                                                </strong>
                                                                                                                <br> <small
                                                                                                                    class="text-danger">Pontuação
                                                                                                                    máxima:
                                                                                                                    5 Pontos
                                                                                                                </small></label>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                {!! Form::number('nota_dre5', null, ['placeholder' => 'Insira a nota', 'class' => 'form-control', 'max="5"']) !!}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-12 col-12">
                                                                                                        <div
                                                                                                            class="form-group has-icon-left">
                                                                                                            <br>
                                                                                                            <div
                                                                                                                class="position-relative">
                                                                                                                <button
                                                                                                                    type="submit"
                                                                                                                    class="btn btn-primary white">
                                                                                                                    Salvar</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>



                                                                        {{-- 
                    <div class="tab-pane" id="list-dre2" role="tabpanel"
                    aria-labelledby="list-settings-dre2">
                    <div class="row">
                    <div class="col-xl-12 col-sm-12 col-12">
                        <div class="card text-center bg-lighten-2">
                            <div class="card-content d-flex">
                                <div class="card-body">
                                    <img src="https://www.onlyoffice.com/blog/wp-content/uploads/2022/09/Blog_fillable_form_in_PDF.jpg" alt="" height="100"
                                        class="mb-1">
                                        <div class="alert alert-primary" role="alert">
                                          <h4 class="alert-heading">Avaliação Diretor - DRE </h4>
                                          <p> Os campos de notas abaixo são para o uso exclusivo da  Nutricionista DRE </p>                                                                                  <hr>
                                          <p class="mb-0"></p>
                                        </div>
                               
                                    <div class="row">
                                    <div class="col-md-6 col-8">
                                      <div class="form-group has-icon-left">
                                          <label for="email-id-column"><strong> Viabilidade no PNAE </strong>
                                             <br><small class="text-danger"> Pontuação 3 Pontos </small> </label>
                                          <div class="position-relative">
                                            {!! Form::number('nota_dre1', null, array('placeholder' => 'Insira a nota','class' => 'form-control', 'max="3"' )) !!}            
                                      </div>
                                  </div>
                                  </div>
                                    <div class="col-md-6 col-6">
                                      <div class="form-group has-icon-left">
                                          <label for="email-id-column"><strong>Valorização dos hábitos alimentares locais </strong>
                                              <br><small class="text-danger"> Pontuação máxima: 4 Pontos </small></label>
                                          <div class="position-relative">
                                            {!! Form::number('nota_dre2', null, array('placeholder' => 'Insira a nota','class' => 'form-control','max="4"')) !!}            
                                      </div>
                                  </div>
                                  </div>
                                    <div class="col-md-6 col-6">
                                      <div class="form-group has-icon-left">
                                          <label for="email-id-column"><strong> Alimentos da Agricultura Familiar </strong>
                                            <br><small class="text-danger">(Até 3 itens) - Pontuação máxima: 3 Pontos </small></label>
                                          </label>
                                          <div class="position-relative">
                                            {!! Form::number('nota_dre3', null, array('placeholder' => 'Insira a nota','class' => 'form-control','max="3"')) !!}            
                                      </div>
                                  </div>
                                  </div>
                                    <div class="col-md-6 col-6">
                                      <div class="form-group has-icon-left">
                                          <label for="email-id-column"><strong> Alimentos da Agricultura Familiar </strong>
                                          <br><small class="text-danger">(Acima de 3 itens) - Pontuação máxima: 5 Pontos </small></label>
                                        </label>
                                          <div class="position-relative">
                                            {!! Form::number('nota_dre4', null, array('placeholder' => 'Insira a nota','class' => 'form-control', 'max="5"')) !!}            
                                      </div>
                                  </div>
                                  </div>
                                          <div class="col-md-6 col-6">
                                      <div class="form-group has-icon-left">
                                          <label for="email-id-column"><strong> Criatividade (inovação e originalidade) </strong>
                                            <br> <small class="text-danger">Pontuação máxima: 5 Pontos </small></label>
                                          <div class="position-relative">
                                            {!! Form::number('nota_dre5', null, array('placeholder' => 'Insira a nota','class' => 'form-control', 'max="5"')) !!}            
                                      </div>
                                  </div>
                                  </div>
                                          <div class="col-md-12 col-12">
                                      <div class="form-group has-icon-left">
                                         <br>
                                          <div class="position-relative">
                                            <button type="submit" class="btn btn-primary white"> Salvar</button>
                                          </div>
                                  </div>
                                  </div>
                                    </div> --}}


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>









                                            </div>








                                        </div>
                                    </div>
                                </section>
    </main>










    <!-- List group navigation ends -->


    <script src="{{ asset('/js/pages/form-editor.js') }}"></script>
@endsection
