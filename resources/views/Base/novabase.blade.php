<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SuperChef </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('/images/chef.svg')}}" type="image/x-icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendor/quill/quill.snow.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendor/quill/quill.bubble.csS')}}">
<link rel="stylesheet" href="{{asset('/assets/vendor/remixicon/remixicon.css')}}">
<link rel="stylesheet" href="{{asset('/assets/vendor/simple-datatables/style.css')}}">

<link rel="stylesheet" href="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.css')}}">


  <!-- Template Main CSS File -->
  {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{asset('/painel')}}" class="logo d-flex align-items-center">
        <img src="{{asset('/images/logo_seduc_chef2.jpg')}}" width="160px" height="160px" alt="" srcset=""> 
        <span class="d-none d-lg-block"></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center">
        <input type="text" name="query" placeholder="" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item">

          <a class="nav-link nav-icon" href="{{asset('/Site/formulario')}}">
            <i class="bi bi-layout-text-sidebar-reverse"></i>
          </a><!-- End Notification Icon -->

        

        </li><!-- End Notification Nav -->
        <li class="nav-item">

          <a class="nav-link nav-icon" href="{{asset('/Site')}}">
            <i class="bi bi-link-45deg"></i>
          </a><!-- End Notification Icon -->

        

        </li><!-- End Notification Nav -->

        {{-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav --> --}}

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('/images/avatar/chef.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Olá, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->name }}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->name }}}</h6>
              <span> <b> Perfil: </b> </span>
              @foreach(auth()->user()->roles as $role)
              <span> {{ $role->name }}</span>
          @endforeach
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{asset('/profile')}}">
                <i class="bi bi-person"></i>
                <span>Meu perfil</span>
              </a>
            </li>
          

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{asset('suporte')}}">
                <i class="bi bi-question-circle"></i>
                <span>Precisa de ajuda?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{asset('/logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sair do sistema</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{asset('/painel')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="{{asset('/calendar/index#')}}">
          <i class="bi bi-calendar-check"></i>
          <span>Agenda</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="{{asset('/painel/index')}}">
          <i class="bi  bi-layout-text-window-reverse"></i>
          <span>Painel Gerencial</span>
        </a>
      </li><!-- End Dashboard Nav -->
      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-text"></i><span>SEDUC</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{asset('/inscricao')}}">
              <i class="bi bi-circle"></i><span> <b> Todas as Inscrições </b> </span>
            </a>
          </li>
          <li>
            <a class="text-success" href="{{asset('/inscricao/classificados')}}">
              <i class="bi bi-circle"></i><span>  <b>  Inscrições Classificadas  </b> <small> <br>Disp. no Site </small> </span>
            </a>
          </li>
          <li>
            <a class="text-danger" href="{{asset('/inscricao/desclassificados')}}">
              <i class="bi bi-circle"></i><span>  <b>  Inscrições Desclassificadas  </b>  </span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/semnotas')}}">
              <i class="bi bi-circle"></i><span><b> ETAPA 1 </b>-  Inscrições não avaliadas</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/semnotas_etapa2')}}">
              <i class="bi bi-circle"></i><span><b> ETAPA 2 </b>-  Inscrições não avaliadas</span>
            </a>
          </li>
    
            



        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav-dre" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-text"></i><span>DRE</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-dre" class="nav-content collapse " data-bs-parent="#sidebar-nav">

        
          <li>
            <a href="{{asset('/inscricao/dre/drealtafloresta')}}">
              <i class="bi bi-circle"></i> 
              <span>DRE - Alta Floresta</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/drebarradogarcas')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Barra do Garças</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/drecaceres')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Cáceres</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/dreconfresa')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Confresa</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/drecuiaba')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Cuiabá</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/drevarzeagrande')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Várzea Grande</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/drediamantino')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Diamantino</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/drejuina')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Juína</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/drematupa')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Matupá</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/dreponteselacerda')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Pontes e Lacerda</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/dreprimaveradoleste')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Primavera do Leste</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/drerondonopolis')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Rondonópolis</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/dresinop')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Sinop</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/inscricao/dre/dretangaradaserra')}}">
              <i class="bi bi-circle"></i>
              <span>DRE - Tangará da Serra</span>
            </a>
          </li>



        </ul>
      </li>
      <!-- End Components Nav -->



    
      </li><!-- End Icons Nav -->

      
      <li class="nav-heading">Conf. Sistema</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Usuários</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{asset('/users')}}">
              <i class="bi bi-circle"></i><span>Lista de usuários</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/users/create')}}">
              <i class="bi bi-circle"></i><span>Criar usuários</span>
            </a>
          </li>
          <li>
            <a href="{{asset('/roles')}}">
              <i class="bi bi-circle"></i><span>Perfil de Usuários</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

<hr>
    

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{asset('/suporte')}}">
          <i class="bi bi-question-circle"></i>
          <span>Suporte</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" >
          <i class="bi bi-question-circle"></i>
          <span>Usuários online:</span>
          {{-- @foreach ($user as $users_logado)
        <small> <ul>
          <li> {{$users_logado->name}} </li> </small>
          @endforeach --}}
        {{-- </a>
      </li>  --}}
      <!-- End F.A.Q Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->
  @yield('content')
<!-- 
  Aqui termina a base -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
     Desenvolvido pela  Equipe de TI  da<p>  <strong>
      <span> <big> SEDUC - MT</span></strong>
    </div>

    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <a href="https://www3.seduc.mt.gov.br/">www3.seduc.mt.gov.br</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/assets/js/main.js')}}"></script>

  {{-- <script src="assets/vendor/apexcharts/apexcharts.min.js"></script> --}}
  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  {{-- <script src="assets/vendor/chart.js/chart.umd.js"></script> --}}
  {{-- <script src="assets/vendor/echarts/echarts.min.js"></script> --}}
  {{-- <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  {{-- <script src="assets/js/main.js"></script> --}}

</body>

</html>