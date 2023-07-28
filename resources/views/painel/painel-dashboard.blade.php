@extends('base.novabase')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card sales-card">



                                <div class="card-body">
                                    <h5 class="card-title">Inscrições <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6> </h6>
                                            <span class="text-success small pt-1 fw-bold">Recebidas</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-3 col-md-3">
                            <div class="card info-card revenue-card">



                                <div class="card-body">
                                    <h5 class="card-title">Ingredientes <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-basket"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6></h6>
                                            <span class="text-success small pt-1 fw-bold">Cadastradas</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-3 col-xl-3">

                            <div class="card info-card customers-card">


                                <div class="card-body">
                                    <h5 class="card-title">Escolas <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bx bxs-school"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6> </h6>
                                            <span class="text-danger small pt-1 fw-bold">Cadastradas</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                        <div class="col-xxl-3 col-xl-3">

                            <div class="card info-card customers-card">


                                <div class="card-body">
                                    <h5 class="card-title">DRES <span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6></h6>
                                            <span class="text-danger small pt-1 fw-bold">Cadastradas</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        

                        <div class="col-xxl-4 col-xl-4">

                          <div class="card info-card customers-card">


                              <div class="card-body">
                                  <h5 class="card-title"> Total de Votos <span></span></h5>

                                  <div class="d-flex align-items-center">
                                      <div
                                          class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <i class="bi bi-hand-thumbs-up"> </i>

                                      </div>

                         

                                      <div class="ps-3">
                                        <h6></h6>
                                        <span class="text-success small pt-1 fw-bold">Contabilizados</span>

                                    </div>
                                  </div>

                              </div>
                          </div>

                      </div><!-- End Customers Card -->

                      @if (Auth::check() && Auth::user()->hasRole('Admin'))

                        <div class="col-xxl-4 col-xl-4">

                          <div class="card info-card customers-card">


                              <div class="card-body">
                                  <h5 class="card-title"> N° da Inscrição Vencedora <span></span></h5>

                                  <div class="d-flex align-items-center">
                                      <div
                                          class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <i class="bx bxs-trophy"> </i>

                                      </div>
                                      <div class="ps-3">
                                        {{-- @foreach ($result as $item)
                                        <h6>Recibo ID: {{ $item->recibo_id }}</h6>
                                    @endforeach --}}
                                    <hr>
                                    <span class="text-success small pt-1 fw-bold">
                                        <h6>Votos:<span>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div><!-- End Customers Card -->
                        @endif

                        <!-- Reports -->
                        <!-- End Reports -->

                        <!-- Recent Sales -->
                        @if (Auth::check() && Auth::user()->hasRole('seduc'))

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">


                                <div class="card-body ">
                                    <h5 class="card-title">Lista de Votos<span></span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">DRE</th>
                                                <th scope="col">Escola</th>
                                                <th scope="col">Votos</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($recibos as $recibo)
                                                <tr>

                                                    <th scope="row"><a href="{{asset('/inscricao/'.$recibo->id)}}">{{ $recibo->id }}</a></th>
                                                    <td>{{ $recibo->Nome }}</td>
                                                    <td><a href="{{asset('/inscricao/'.$recibo->id)}}" class="text-primary">{{ $recibo->dre->Nome }}</a>
                                                    </td>
                                                    <td><a href="{{asset('/inscricao/'.$recibo->id)}}"
                                                            class="text-primary">{{ $recibo->escola->EscolaNome }}</a></td>

                                                    <td> <button type="button" class="btn btn-success mb-2">
                                                            {{ $recibo->likes->count() }}
                                                        </button> </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
                        @endif


                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->


                <!-- News & Updates Traffic -->
                {{-- <div class="card">
          
                    <div class="card-body pb-0">
                        <h5 class="card-title">Seduc - TI <span>| Informações</span></h5>

                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <h4><a href="#">Portal de Serviços</a></h4>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                <h4><a href="#">Central Help</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-3.jpg" alt="">
                                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-4.jpg" alt="">
                                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-5.jpg" alt="">
                                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div> --}}
                <!-- End News & Updates -->

            </div><!-- End Right side columns -->

            </div>
        </section>
    </main>
@endsection
