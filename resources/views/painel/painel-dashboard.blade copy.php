@extends('base.novabase')
@section('content')


<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">Acompanhe aqui o resumo do sistema</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>INSCRIÇÕES</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{$recibo}} </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas1" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>INGREDIENTES</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p> {{$produtos}} </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>ESCOLAS</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>{{$escolas}} </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas3" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>DREs</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p> {{$dre}} </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas4" style="height:100px !important"> </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Quantidade de Curtidas</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p> {{$qtdcurtidas}} </p>
                          
                                </div>
                            </div>
                     
                        </div>
                    </div>
                </div>
            </div>




            @foreach($curtidas as $likes)
            <p> {{$likes->dre->Nome}} - {{$likes->dre->id}} </p>
            @endforeach










        </div>
        {{-- <div class="row mb-4">
            <div class="col-md-12">
              
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">ÚLTIMOS INGREDIENTES</h4>                   
                    </div>

                    @foreach ($produto  as $key =>  $produtos)
                    <div class="card-group">
                        <div class="card">
                          <img class="rounded mx-auto d-block" src="{{asset('/images/ingredientes/')}}/{{$produtos->image}}" width="60px" alt="Card image cap">
                          <div class="card-body">
                              <h5 class="card-title">{{$produtos->Nome}}</h5>
                          </div>
                        </div>
                    </div>
                    @endforeach 
             
    
                        
                        
                    </div>
                   
            </div> --}}


@endsection