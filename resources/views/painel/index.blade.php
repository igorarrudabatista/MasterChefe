@extends('base.base')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Cadastros Básicos e Parâmetros dos sistemas</h3>
                <p class="text-subtitle text-muted">Cadastros Básicos do sistema em um só lugar.</p>
            </div>
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb" class='breadcrumb-header text-right'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastros Básicos</li>
                    </ol>
                </nav>
            </div>
        </div>
<section id="card-caps">
    <div class="row">


        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/painel/dre.png')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark bg-overlay d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Cadastro de DRE</h4>
                            <p class="card-text text-ellipsis">
                                Cadastro e Consulta DRE.
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/dre')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/painel/escolas.jpg')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Escolas</h4>
                            <p class="card-text text-ellipsis">
                                Cadastro e Consulta de Escolas.
                            </p>
                        </div>
                        <div class="overlay-status text-right">
                            <a href="{{asset('/escola')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/painel/mapabrasil.jpg')}}" width="200px" alt="Card image">
                    <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Estados</h4>
                            <p class="card-text text-ellipsis">
                                Consulte os Estado.
                            </p>
                        </div>
                        <div class="overlay-status text-right">
                            <a href="{{asset('/estado')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/painel/cidades.jpg')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Cidade</h4>

                            <p class="card-text text-ellipsis">
                                Consulta de Cidades.
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/cidade')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/painel/cating.jpg')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark bg-overlay d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Categoria dos Ingredientes</h4>
                            <p class="card-text text-ellipsis">
                                Cadastro e Consulta de Categoria Ingredientes.
                            </p>
                        </div>
                        <div class="overlay-status">
                            <a href="{{asset('/catingrediente')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img img-fluid" src="{{asset('/images/painel/ingredientes.webp')}}" alt="Card image">
                    <div class="card-img-overlay overlay-dark d-flex justify-content-between flex-column">
                        <div class="overlay-content">
                            <h4 class="card-title mb-50">Cadastro de Ingredientes</h4>

                            <p class="card-text text-ellipsis">
                                Cadastro e Consulta de Ingredientes.
                            </p>
                        </div>
                        <div class="overlay-status text-right">
                            <a href="{{asset('/insumo')}}" class="btn btn-primary btn-sm">Clique aqui </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</section>
    </div>


@endsection