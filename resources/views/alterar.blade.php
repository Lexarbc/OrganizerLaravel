<!DOCTYPE html>
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
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto" rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="../assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="../assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="../assets/css/theme.bundle.css" />

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
<body>
 
  
      <!-- Main Section-->
    <section class="mt-0 vh-lg-100 d-flex">
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
                      <li class="me-4"><a class="nav-link-checkout ">Alterar Tarefa</a></li>
                    </ul>
                </nav>                        
                      
                <div class="mt-5">
                  <h3 class="fs-5 mt-5 fw-bolder mb-4 border-bottom pb-4">Alterar</h3>
                  <div class="row">

                    <!-- Nome da tarefa-->
                    <div class="col-12">
                      <form action="{{route('Alterar-tarefa',$registroTarefa->id)}}" method="post">
                        @csrf
                        @method('PUT')
                         <div class="form-group">
                          <label for="nm_tarefa" class="form-label">Nome da tarefa</label>
                          <input type="text" class="form-control" name="nm_tarefa" id="nm_tarefa" placeholder="{{$registroTarefa->nm_tarefa}}" required="">
                        </div>
                      </div>

                      <!-- Descrição-->
                      <div class="col-12">
                        <div class="form-group">
                          <label for="Descrição" class="form-label">Descrição</label>
                          <input type="text" name="conteudo_tarefa" class="form-control" id="Descrição" placeholder="{{$registroTarefa->conteudo_tarefa}}" required="">
                        </div>
                      </div>

                      <!-- Cor-->
                      <div class="col-md-6">
                      <div class="form-group">
                          <label for="cor" class="form-label">Cor</label>
                          <select name="cor" class="form-select" id="cor" required="">
                              <option value="#1C1C1C" {{ $registroTarefa->cor === '#1C1C1C' ? 'selected' : '' }}>Padrão: Preto</option>
                              <option value="#4B0082" {{ $registroTarefa->cor === '#4B0082' ? 'selected' : '' }}>Roxo</option>
                              <option value="#000080" {{ $registroTarefa->cor === '#000080' ? 'selected' : '' }}>Azul</option>
                              <option value="#8B0000" {{ $registroTarefa->cor === '#8B0000' ? 'selected' : '' }}>Vermelho</option>
                          </select>
                      </div>
                  </div>

                  
                      <div class="pt-5 mt-5 pb-5 border-top d-flex justify-content-md-end align-items-center">
                        <button type="submit" class="btn btn-dark w-100 w-md-auto">Concluído</button>
                      </div>   
                  </form>      
              </div>
            </div>

        </div>
      </div>
      
          <!-- /Page Content -->
    </section>
  
    <!-- / Main Section-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="../assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="../assets/js/theme.bundle.js"></script>
</body>

</html>