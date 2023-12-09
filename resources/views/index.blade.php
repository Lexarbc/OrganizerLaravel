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

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
        <div class="container-fluid">
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
    
                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./index.html">
                        <div class="d-flex align-items-center">
                            <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                        </div>
                    </a>
                    <!-- / Logo-->
    
                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">
    
                        <!-- Mobile Nav Toggler-->
                        <li class="d-lg-none">
                            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
                        </li>
                        <!-- /Mobile Nav Toggler-->
    
                        
                            <!-- Search navbar overlay-->
                            <div class="navbar-search d-none">
                                <div class="input-group mb-3 h-100">
                                    <span class="input-group-text px-4 bg-transparent border-0"><i
                                            class="ri-search-line ri-lg"></i></span>
                                    <input type="text" class="form-control text-body bg-transparent border-0"
                                        placeholder="Enter your search terms...">
                                    <span
                                        class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i
                                            class="ri-close-circle-line ri-lg"></i></span>
                                </div>
                            </div>
                            <div class="search-overlay"></div>
                            <!-- / Search navbar overlay-->
    
                        </li>
                        <!-- /Navbar Search-->
    
                        
    
                        
    
                    </ul>
                    <!-- Navbar Icons-->                
    
                    <!-- Main Navigation-->
                    <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1 "
                        id="navbarNavDropdown">
    
                        <!-- Menu-->
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                            <li class="nav-item  position-static">
                              <a class="nav-link " href="{{route('Criar')}}" role="button" aria-expanded="false">
                                Criar
                              </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('Atualizar')}}" role="button" aria-expanded="false">
                                  Atualizar
                                </a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" href="{{route('Visualizar')}}" role="button">
                                  Visualizar
                                </a>
                              </li>
                          </ul>                    
                          <!-- / Menu-->
    
                    </div>
                    <!-- / Main Navigation-->
    
                </div>
            </div>
        </div>
    </nav>
    <!-- / Navbar-->    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 overflow-hidden ">
        <!-- Page Content Goes Here -->

        <!-- / Top banner -->
        <section class="vh-75 vh-lg-60 container-fluid rounded overflow-hidden mb-4" data-aos="fade-in">
            <!-- Swiper Info -->
            <div class="swiper-container overflow-hidden rounded h-100 bg-light" data-swiper data-options='{
              "spaceBetween": 0,
              "slidesPerView": 1,
              "effect": "fade",
              "speed": 1000,
              "loop": true,
              "parallax": true,
              "observer": true,
              "observeParents": true,
              "lazy": {
                "loadPrevNext": true
                },
                "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
                }
              }'>
              <div class="swiper-wrapper">
            
                <!-- Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url(./assets/images/banners/banner-1.jpg)">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Everything You Need</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      <span class="text-outline-light">Organize</span> Sua Rotina</h2>
                  </div>
                </div>
                <!-- /Slide-->
            
                <!-- Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url(./assets/images/banners/banner-2.jpg)">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Relax</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      <span class="text-outline-light">Tudo </span>em um local</h2>
                  </div>
                </div>
                <!--/Slide-->
            
                <!--Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url(./assets/images/banners/banner-3.jpg)">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Look Good Feel Good</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      <span class="text-outline-light">Descomplique</span> seu dia</h2>
                  </div>
                </div>
                <!--/Slide-->
            
              </div>
            
              <div class="swiper-pagination swiper-pagination-bullet-light"></div>
            
            </div>
            <!-- / Swiper Info-->        </section>
        <!--/ Top Banner-->

        <!-- Featured Brands-->
        
        <!--/ Featured Brands-->

        <div class="container-fluid">

            <!-- Featured Categories-->
            <div class="m-0">
                    <!-- Swiper Latest -->
                    <div class="swiper-container overflow-hidden overflow-lg-visible"
                      data-swiper
                      data-options='{
                        "spaceBetween": 25,
                        "slidesPerView": 1,
                        "observer": true,
                        "observeParents": true,
                        "breakpoints": {     
                          "540": {
                            "slidesPerView": 1,
                            "spaceBetween": 0
                          },
                          "770": {
                            "slidesPerView": 2
                          },
                          "1024": {
                            "slidesPerView": 3
                          },
                          "1200": {
                            "slidesPerView": 4
                          },
                          "1500": {
                            "slidesPerView": 5
                          }
                        },   
                        "navigation": {
                          "nextEl": ".swiper-next",
                          "prevEl": ".swiper-prev"
                        }
                      }'>


                      <div class="swiper-wrapper justify-content-around">

                          <div class="swiper-slide align-self-stretch bg-transparent h-auto ">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="400">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/categories/img-1.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <h4 class="lead fw-bold">Criar</h4>
                            </div>
                          </div>
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="500">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/categories/img-4.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <h4 class="lead fw-bold">Editar</h4>
                            </div>
                          </div>
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="600">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/categories/img-3.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <h4 class="lead fw-bold">Visualizar</h4>
                            </div>
                          </div>
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="700">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/categories/img-2.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <h4 class="lead fw-bold">Excluir</h4>
                            </div>
                          </div>
                      </div>
                    
                      <div class="swiper-btn swiper-prev swiper-disabled-hide swiper-btn-side btn-icon bg-white text-dark ms-3 shadow mt-n5"><i class="ri-arrow-left-s-line "></i></div>
                      <div class="swiper-btn swiper-next swiper-disabled-hide swiper-btn-side swiper-btn-side-right btn-icon bg-white text-dark me-3 shadow mt-n5"><i class="ri-arrow-right-s-line ri-lg"></i></div>
                    
                    </div>
                    <!-- / Swiper Latest-->                <!-- SVG Used for Clipath on featured images above-->
                <svg width="0" height="0">
                  <defs>
                  <clipPath id="svg-slanted-one" clipPathUnits="objectBoundingBox">
                      <path d="M0.822,1 H0.016 a0.015,0.015,0,0,1,-0.016,-0.015 L0.158,0.015 A0.016,0.015,0,0,1,0.173,0 L0.984,0 a0.016,0.015,0,0,1,0.016,0.015 L0.837,0.985 A0.016,0.015,0,0,1,0.822,1"></path>
                  </clipPath>
                  </defs>
                </svg>            </div>
            <!-- /Featured Categories-->

            <!-- Homepage Intro-->
            <div class="position-relative row my-lg-7 pt-5 pt-lg-0 g-8">
                <div class="bg-text bottom-0 start-0 end-0" data-aos="fade-up">
                    <h2 class="bg-text-title opacity-10"><span class="text-outline-dark">Org</span>anizer</h2>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 mb-7 mb-lg-0" data-aos="fade-right">
                    <p class="text-muted title-small">Welcome</p>
                    <h3 class="display-3 fw-bold mb-5"><span class="text-outline-dark">Organizer</span> - tudo na tela do seu computador</h3>
                    <p class="lead">A Organizer existe para tornar a sua rotina apertada, em algo leve e simples.</p>
                    <p class="lead">Crie, Edite, Visualize e Exclua tarefas.</p>
                    <a href="./category.html" class="btn btn-psuedo" role="button">Organizer</a>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 pe-0" data-aos="fade-left">
                    <picture class="w-50 d-block position-relative z-index-10 border border-white border-4 shadow-lg">
                        <img class="img-fluid" src="./assets/images/banners/banner-5.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                    <picture class="w-60 d-block me-8 mt-n10 shadow-lg border border-white border-4 position-relative z-index-20 ms-auto">
                        <img class="img-fluid" src="./assets/images/banners/banner-6.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                    <picture class="w-50 d-block me-8 mt-n7 shadow-lg border border-white border-4 position-absolute top-0 end-0 z-index-0 ">
                        <img class="img-fluid" src="./assets/images/banners/banner-7.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div>
            </div>
            <!-- / Homepage Intro-->

            

            <!-- Instagram-->
            <!-- Swiper Instagram -->
            <div data-aos="fade-in">
              <h3 class="title-small text-muted text-center mb-3 mt-5"><i class="ri-instagram-line align-bottom"></i>
                #ORGANIZER
            </h3>
            <div class="overflow-hidden">
              <div class="swiper-container swiper-overflow-visible"
                data-swiper
                data-options='{
                    "spaceBetween": 20,
                    "loop": true,
                    "autoplay": {
                      "delay": 5000,
                      "disableOnInteraction": false
                    },
                    "breakpoints": {
                      "400": {
                        "slidesPerView": 2
                      },
                      "600": {
                        "slidesPerView": 3
                      },       
                      "999": {
                        "slidesPerView": 5
                      },
                      "1024": {
                        "slidesPerView": 6
                      }
                    }
                  }'>
                <div class="swiper-wrapper mb-5">
            
                  <!-- Start of instagram slideshow loop for items-->
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1586396874197-b8fc676a5187?ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib&#x3D;rb-1.2.1&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1538329972958-465d6d2144ed?ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib&#x3D;rb-1.2.1&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1503341338985-c0477be52513?ixlib&#x3D;rb-1.2.1&amp;ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1566677914817-56426959ae9c?ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib&#x3D;rb-1.2.1&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1582657233895-0f37a3f150c0?ixlib&#x3D;rb-1.2.1&amp;ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1550246140-5119ae4790b8?ixlib&#x3D;rb-1.2.1&amp;ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1520048480367-7a6a4b6efb2a?ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib&#x3D;rb-1.2.1&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <div class="swiper-slide flex-column">
                    <picture>
                      <img
                        class="rounded shadow-sm img-fluid"
                        data-zoomable
                        src="https://images.unsplash.com/photo-1550246140-29f40b909e5a?ixlib&#x3D;rb-1.2.1&amp;ixid&#x3D;MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto&#x3D;format&amp;fit&#x3D;crop&amp;w&#x3D;700&amp;h&#x3D;700"
                        title=""
                        alt="">
                    </picture>
                  </div>
                  <!-- / end of items loop-->
            
                </div>
              </div>
            </div>
            </div>
            <!-- /Swiper Instagram-->
            <!-- / Instagram-->

        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <footer class="border-top py-5 mt-4  ">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <div>
                    <ul class="list-unstyled">
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-instagram-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-facebook-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-twitter-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-snapchat-fill"></i></a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
                    <p class="small m-0 text-center text-lg-start">&copy; 2021 OldSkool All Rights Reserved. Template by <a
                            href="https://www.pixelrocket.store">Pixel Rocket</a></p>
                    <ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-paypal"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-mastercard"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-american-express"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i
                                class="pi pi-sm pi-visa"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>    <!-- / Footer-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>