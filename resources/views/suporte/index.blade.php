@extends('base.novabase')
@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contato</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Suporte</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-6">

          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Endereço</h3>
                <p>Rua Eng. Edgard Prado Arze<br>Cuiabá - MT</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Central de Atendimento</h3>
                <p>0800 065 1717</p><br>
                            </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>E-mail</h3>
                <p><br>igor.batista@edu.mt.gov.br</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Horário</h3>
                <p>Segunda a Sexta<br>08:00h - 18:00h</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-6">
          <div class="card p-4">

            <img src="{{asset('/images/samples/note-suporte.jpg')}}">
            
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->

  @endsection