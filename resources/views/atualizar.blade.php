<!doctype html>
<html lang="en">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" integrity="sha384-eS9WEtGlA6ZN3S4Iv7NUvAg0GPuqPoNQIoG0C92YkT95BrVLlOZPb5NhunEWkp0Z" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>OldSkool | Bootstrap 5 HTML Template</title>

</head>
<body class="">

    <!-- Main Section-->
    <section class="mt-0 overflow-lg-hidden  vh-lg-100">
        <!-- Page Content Goes Here -->
        <div class="container">
            <div class="row g-0 vh-lg-100">
                <div class="col-12  pt-5 pt-lg-10">
                    <div class="pe-lg-5">
                        <!-- Logo-->
                        <a class="navbar-brand fw-bold fs-3 flex-shrink-0 mx-0 px-0" href="./index.html">
                                <div class="d-flex align-items-center">
                                    <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                                </div>
                            </a>
                        <!-- / Logo-->
                        <nav class="d-none d-md-block">
                            <ul class="list-unstyled d-flex justify-content-start mt-4 align-items-center fw-bolder small">
                                <li class="me-4"><a class="nav-link-checkout "
                                        href="{{route('Index')}}">Home</a></li>
                                <li class="me-4"><a class="nav-link-checkout active"
                                        href="{{route('Atualizar')}}">Atualizar</a></li>
                                
                            </ul>
                        </nav>                       
                         <div class="mt-5">
                            <h2 class="fs-5 fw-bolder mb-0 border-bottom pb-4">Suas tarefas</h2>
                            <div class="table-responsive">


                            @foreach($dadosTarefa as $registrosTarefa)

                                <div class="card m-2" id="card_{{$registrosTarefa->id}}">
                                    <div class="card-header d-flex justify-content-between" style="background-color:{{$registrosTarefa->cor}}; border-radius:15px">
                                        <h5 class="text-white">{{$registrosTarefa->nm_tarefa}}</h5>
                                        <button class="btn btn-toggle-content btn-sm text-white border-0" style="background-color:{{$registrosTarefa->cor}}; " data-card-id="{{$registrosTarefa->id}}">+</button>
                                    </div>
                                    <div class="card-body" style="display:none;" id="content_{{$registrosTarefa->id}}">
                                        <blockquote class="blockquote mb-0">
                                            <p>{{$registrosTarefa->conteudo_tarefa}}</p>
                                        </blockquote>
                                        <div class="d-flex justify-content-start">
                                            <a class="btn btn-sm" href="{{ route('Alterar' , $registrosTarefa->id) }}">
                                                <img src="./assets/images/alterar.png" alt="Alterar" width="25px">
                                            </a>

                                            <form action="{{ route('Apagar', $registrosTarefa->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                                @method('DELETE')
                                                @csrf

                                                <button type="submit" class="btn btn-sm">
                                                    <img src="./assets/images/apagar.png" alt="Apagar" width="25px">
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                <script>
                                    $(document).ready(function(){
                                        $('.btn-toggle-content').on('click', function(){
                                            var cardId = $(this).data('card-id');
                                            $('#content_' + cardId).slideToggle(); 
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>