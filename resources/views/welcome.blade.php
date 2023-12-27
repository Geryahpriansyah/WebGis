<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- linkcss -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">

    <!-- linkfontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <title>Agasa Delivery</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{asset("img/logo-removebg-preview.png")}}" alt="" width="80" height="46">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">
                  <img src="icon/home-button_5974636.png" alt="" width="25" height="25" class="d-inline-block align-text-top">
                  home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('promo')}}">
                  <img src="icon/megaphone_7495807.png" alt="" width="24" height="28" class="d-inline-block align-text-top">
                  promo
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="icon/restaurant-menu_5383086.png" alt="" width="25" height="29" class="d-inline-block align-text-top">
                  Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('burger')}}"> 
                    <img src="icon/burger_877951.png" alt="" width="25" height="29" class="d-inline-block align-text-top">
                    Burger</a></li>
                  <li><a class="dropdown-item" href="{{route('pizza')}}"> <img src="icon/pizza_3595458.png" alt="" width="25" height="29" class="d-inline-block align-text-top">
                    Pizza</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{route('minuman')}}">
                    <img src="icon/frappe_1880440.png" alt="" width="25" height="29" class="d-inline-block align-text-top">
                   Minuman
                  </a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <img src="icon/delivery_3063758.png" alt="" width="24" height="28" class="d-inline-block align-text-top">
                  Lacak Pesanan
                </a>
              </li>
              <li class="nav-item" >
                <a class="nav-link" href="">

                  <img src="icon/carts_891462.png" alt="" width="25" height="25"class="d-inline-block align-text-top"> 
                  keranjang
                </a>
              </li>
            </ul>
            <a href="#" class="btn btn-outline-danger " style="margin-right: 5px; margin-left:47px">Login</a> 
            
          </div>
        </div>
      </nav>

<!-- akhir nav -->



      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Agasa Food  Delivery</h1>
          <p class="lead"  ><i class="fa-solid fa-clock" style="color: #d5d8dd;" ></i> 9:00 - 20:00</p>
          <p class="lead"><i class="fa-solid fa-location-dot" style="color: #d5d8dd;"></i> Kota Banjar</p> <br>
          <button type="button" class="btn btn-jumbotron">Order Now</button>
        </div>
      </div>

<!-- akhir jumbotron -->
      <!-- <div class="about">

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                     <img src="img/logo-removebg-preview.png" class="img-fluid" alt="" >
                    </div>
                    <div class="col-lg-6" >
                        <h2>About Us</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequatur dolore deserunt dolor eos suscipit tempora aspernatur expedita, qui eaque, enim ullam optio fugiat cumque molestiae unde corporis aliquid esse quasi assumenda doloribus blanditiis beatae? Exercitationem minus debitis quidem cum dolore accusamus maxime esse eligendi!</p>
                    </div>
                    
                  </div>
              </div>
            </div>
          </div>
      </div> -->

<div class="container">
  <div class="services">
 
    <div class="row justify-content-center">
      <div class="col-2 col-4">
        <div class="card  text-white">
          <img src="icon/banquet_10390707.png" class="card-img" alt="...">
          <div class="card-img">
           
            <p class="card-text">Dine In</p>
           
          </div>
        </div>
      </div>
      <div class="col-2 col-4">
        <div class="card text-white">
          <img src="icon/hamburger_3161891.png" class="card-img" alt="...">
          <div class="card-img">
          
            <p class="card-text">Pick Up</p>
           
          </div>
        </div>
      </div>
      <div class="col-2 col-4">
        <div class="card text-white">
          <img src="icon/driver.png" class="card-img" alt="...">
          <div class="card-img">
            <p class="card-text">Delivery</p>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="menu">

<div class="container">
    <h2 class="text-center" > <strong>Our </strong>Menu</h2>
    <div class="row">
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-1.png" class="card-img-top" alt="..."  >
        </div>
        <p>Bacon Cheeseburger</p>
        <p>Rp.35.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-20231226162753wycC.png" class="card-img-top" alt="...">
         
        </div>
        <p>Mexican Burger</p>
        <p>Rp.40.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-20231226163447z7P7.png" class="card-img-top" alt="..."  >
          
        </div>
        <p>Burger Klasik</p>
        <p>Rp.30.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-20231226165748eSys.png" class="card-img-top" alt="...">
          
        </div>
        <p>Pizza Margherita</p>
        <p>Rp.240.495 ,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-20231226170718pimd.png" class="card-img-top" alt="...">
          
        </div>
        <p>Pizza Pepperoni</p>
        <p>Rp.288.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/seafood-pizza-removebg-preview.png"  class="card-img-top" alt="...">
          
        </div>
        <p>Pizza Seafood</p>
        <p>Rp.260.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
    </div>
    
  </div>
</div>

<!-- best favorite -->

<div class="container">
  <div class="best-eat">

    <div class="row">
      <div class="col-md-6">
        <img src="img/seafood-pizza-removebg-preview.png"  class="rounded-6"     alt="">
      </div>
      <div class="col-md-6">
        <h2>People who like to eat are always the best people</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
           Dolore illum nobis corrupti vitae sint autem recusandae dolor, quae accusamus! Vero ullam nam ipsum magni ab.</p>
           <button type="button" class="btn btn-best">Order Now</button>
      </div>
    </div>
  </div>
</div>




<!-- promosi -->
<div class="container">
  <div class="promosi">
    <h2 class="text-center" >% Promo %</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Promo1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Promo2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Promo3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>

<!-- footer -->
<div class="card footer">
 
  <div class="card-body">
    <h5 class="card-title">Hubungi Kami :</h5>
    
    <p class="card-text">
      <ul class="wrapper">
        <li class="icon facebook">
          
          <span><i class="fab fa-facebook-f"></i></span>
      </li>
        <li class="icon instagram">
          
          <span><i class="fab fa-instagram"></i></span>
      </li>
        <li class="icon whatsapp">
         
          <span><i class="fab fa-whatsapp"></i></span>
      </li>
     
    
    
    </ul>
      </p>
      <h6>Credit by: Gery Ahpriansyah</h6>
  </div>
</div>
<!-- footer -->













 <!-- Swiper JS -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- linkjs -->
  <script src="script.js" ></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>