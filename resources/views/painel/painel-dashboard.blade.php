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
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$recibo}} </h6>
                      <span class="text-success small pt-1 fw-bold">Atualizado</span> <span class="text-muted small pt-2 ps-1">agora</span>

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
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$produtos}}</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

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
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$escolas}} </h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

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
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$dre}}</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <div class="col-xxl-3 col-xl-3">

              <div class="card info-card customers-card">


                <div class="card-body">
                  <h5 class="card-title">Total de Votos <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$qtdcurtidas}}</h6>
                   <ul>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Alta Floresta </span>  <span class="text-success small pt-1 fw-bold">- Votos: {{$qtdcurtidas}}</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>
                    <li><span class="text-muted small pt-2 ps-1">DRE - Altaaaa </span>  <span class="text-success small pt-1 fw-bold">Atualizado</span> </li>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


            <!-- Reports -->
            <!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body ">
                  <h5 class="card-title">Últimas Inscrições <span></span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Imagem</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">DRE</th>
                        <th scope="col">Situação</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" width="50px" alt=""></a></th>

                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                     
                  
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body ">
                  <h5 class="card-title">Ingredientes<span></span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Imagem</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" width="50px" alt=""></a></th>
                        <th scope="row"><a href="#">Nome</a></th>
                        <td><span class="badge bg-success">categoriaaa</span></td>
                      </tr>
                     
                  
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
          

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
       

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
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
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

@endsection