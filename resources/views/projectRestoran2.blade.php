<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zelict Cafe</title>
        <!-- Buat Icon Web -->
        <link rel="shortcut icon" href="img/ZelictCafe-logo.ico">
        <!--- Bootstrap Css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Css Buatan Sendiri-->
        <link rel="stylesheet" href="/css/projectRestoran2.css">
        <!-- FontAwesome Js -->
        <script src="/js/all.js"></script>
        <!-- Lato Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet"> 
        <!-- magnific-popup Css -->
        <link rel="stylesheet" href="/css/magnific-popup.css">
    </head>
    <body>
        <!-- Social Media Icons -->
        <div class="container-fluid info p-3" id="top-icons">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-
                baseline flex-wrap">
                    <div class="info-icons-p2">

                        <a href="#" class="mr-2 primary-color">
                            <i class="fab fa-facebook fa-2x"></i></a>

                        <a href="#" class="mr-2 primary-color">
                            <i class="fab fa-instagram fa-2x"></i></a>

                        <a href="#" class="mr-2 primary-color">
                            <i class="fab fa-twitter fa-2x"></i></a>
                            
                        <a href="#" class="mr-2 primary-color">
                            <i class="fab fa-whatsapp fa-2x"></i></a>    
                    </div>

                    <a href="">
                        <img src="asset/img/ZelictCafe-logo.png" alt="ZelictCafe-logo">
                    </a>
                </div>
            </div>
        </div>


        <!-- Header Section-->
        <header id="header">
            <div class="container">
                <div class="row height-90 align-items-center justify-content-center">
                    <div class="col">
                        <div class="banner text-center">
                            <h1 class="display-1 text-capitalize w-50 mx-auto">
                                <b>Zelict</b> 
                                <small class="primary-color">Cafe</small>
                            </h1>
                            <a href="#" class="btn main-btn cafe-btn my-4 text-capitalize">
                                Order Sekarang
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <a href="#special-items" class="btn header-link primary-color">
                
                <i class="fas fa-arrow-down"></i></a>
        </header>

        <!-- Navbar Zelict Cafe -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <a class="navbar-brand" href="#"><img src="/img/ZelictCafe-logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#carouselExampleCaptions">Recommended</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#special-items">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#menu-zelict">Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                  </li>
              </ul>
              <div class="search-box">
              <form class="form-inline my-2 my-lg-0">
                <input class="input-keyword form-control mr-sm-2" type="search" placeholder="Search">
                <button class="button-cari btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
              </form>
              </div>
            </div>
          </nav>


        <!-- Untuk Caroussel atau Banner -->
        <div class="container">
            <br> <br>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/dimsum-ayamudang.jpg" class="d-block w-100" alt="dimsum-ayamudang" style="min-width: 100%; height: 600px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dimsum Ayam Udang</h5>
                    <p>Dengan isian Ayam dan Udang</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="/img/lava-cake.jpg" class="d-block w-100" alt="lava-cake" style="min-width: 100%; height: 600px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lava Cake</h5>
                    <p>Dessert dengan Dark Chocolate Melted</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="/img/martabak-mie.jpg" class="d-block w-100" alt="martabak-mie style="min-width: 100%; height: 600px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Martabak Mie</h5>
                    <p>Cocok Untuk Jajanan Santai</p>
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <!-- Untuk Menu -->
        <section class="py-5" id="special-items">
            <div class="container my-5">
                <div class="row parent-container">
                    <!-- Menu Banana Nugget -->
                    <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                        <div class="item-container">
                            <img src="/img/banana-nugget.jpg" 
                            class="img-fluid img-thumbnail item-img" 
                            alt="menu-item">
                            <a href="/img/banana-nugget.jpg">
                            <h1 class="text-uppercase text-center item-link px-3">Banana Nugget</h1>
                            </a>
                        </div>
                    </div>

                    <!-- Menu Banana Split -->
                    <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                        <div class="item-container">
                            <img src="/img/banana-split.jpg" 
                            class="img-fluid img-thumbnail item-img" 
                            alt="menu-item">
                            <a href="/img/banana-split.jpg">
                            <h1 class="text-uppercase text-center item-link px-3">Banana Split</h1>
                            </a>
                        </div>
                    </div>

                <!-- Menu Dimsum Ayam Udang -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                        <img src="/img/dimsum-ayamudang.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/dimsum-ayamudang.jpg">
                        <h1 class="text-uppercase text-center item-link px-3">Dimsum Ayam Udang</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Lava Cake -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/lava-cake.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/lava-cake.jpg">
                        <h1 class="text-uppercase text-center item-link px-3">Lava Cake</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Macaroni Schotel -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/macaroni-schotel.jpeg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/macaroni-schotel.jpeg">
                        <h1 class="text-uppercase text-center item-link px-3">Macaroni Schotel</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Martabak Mie -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/martabak-mie.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/martabak-mie.jpg">
                        <h1 class="text-uppercase text-center item-link px-3">Martabak Mie</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Nachos -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/nachos.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/nachos.jpg">
                        <h1 class="text-uppercase text-center item-link px-3">Nachos</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Onion rings -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/onion-rings.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/onion-rings.jpg">
                        <h1 class="text-uppercase text-center item-link px-3">Onion Rings</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Bubble tea -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/bubbletea-brown.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/bubbletea-brown.jpg') }}">
                        <h1 class="text-uppercase text-center item-link px-3">Bubble Tea</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Ice tea -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/ice-tea.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/ice-tea.jpg">
                        <h1 class="text-uppercase text-center item-link px-3">Ice Tea</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Kopi Gula Aren -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/kopi-gularen.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/kopi-gularen.jpg">
                        <h1 class="text-uppercase text-center item-link px-3">Kopi Gula Aren</h1>
                    </a>
                    </div>
                </div>

                <!-- Menu Blue Ocean Drink -->
                <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
                    <div class="item-container">
                    <img src="/img/blueocean-drink.jpg" 
                    class="img-fluid img-thumbnail item-img" 
                    alt="menu-item">
                    <a href="/img/blueocean-drink.jpg">
                        <h1 class="text-uppercase text-center item-link px-3">Blue Ocean</h1>
                    </a>
                    </div>
                </div>  

            </div>
        </div>
        </section>  -->


        <!-- Katalog Menu -->
        <div id="menu-zelict">
            <div class="kolom-pesan">
                <h2>Jumlah Makanan</h2>
                <p></p>
            </div>
            <div class="row">
                <div id="dataMenu" style="display: none">
                    {{ $apis ?? '' }};
                </div>
            </div>
        </div>

        <!-- About Us -->
        <section id="about" class="py-5">
            <div class="container">       
                    <div class="col-md-6">
                        <h1 class="text-uppercase display-3">About Us</h1>
                        <h2 class="text-lowercase">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Fuga ea, amet adipisci, numquam iste culpa porro delectus neque et necessitatibus asperiores 
                            in eligendi sapiente! Dicta, eligendi? Nobis, culpa reprehenderit! Tempore.</h2>
                        <a href="#" class="btn main-btn my-4 text-capitalize">More</a>
                        </div>
                
            </div>
        </section>

        <!-- Footer -->
        <div class="container-fluid info p-3" id="top-icons">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-
                baseline flex-wrap">
                    <div class="info-icons-p2">

                        <a href="#" class="mr-2 primary-color">
                            <i class="fab fa-facebook fa-2x"></i></a>

                        <a href="#" class="mr-2 primary-color">
                            <i class="fab fa-instagram fa-2x"></i></a>

                        <a href="#" class="mr-2 primary-color">
                            <i class="fab fa-twitter fa-2x"></i></a>
                            
                        <a href="#" class="mr-2 primary-color">
                            <i class="fab fa-whatsapp fa-2x"></i></a>    
                    </div>

                    <h2 class="primary-color p-2 text-uppercase">
                      &copy;copyright 2020  
                    </h2>
                </div>
            </div>
        </div>
        

        <!-- Jquery -->
        <script src="/js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="/js/bootstrap.bundle.min.js"></script>
        <!-- Jquery magnific-popup Js-->
        <script src="/js/jquery.magnific-popup.js"></script>
        <!-- magnific popup sendiri -->
        <script src="/js/magnific-popup.js"></script>
        <!-- Js Buatan Sendiri-->
        <script src="/js/projectRestoran2.js">
            var dataMenu =document.getElementById("dataMenu").innerHTML();

            console.log(JSON.parse(dataMenu));
        </script>
    </body>
</html>