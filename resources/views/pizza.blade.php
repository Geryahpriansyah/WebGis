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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- linkfontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <title>Hello, world!</title>
  </head>
  <body >
    <!-- <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo-removebg-preview.png" alt="" width="80" height="46">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">
                  <img src="icon/rent.png" alt="" width="25" height="29" class="d-inline-block align-text-top">
                  home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <img src="icon/promoicon.png" alt="" width="24" height="28" class="d-inline-block align-text-top">
                  promo
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="icon/Menu.png" alt="" width="25" height="29" class="d-inline-block align-text-top">
                  Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"> 
                    <img src="img/card1.jpg" alt="" width="25" height="29" class="d-inline-block align-text-top">
                    Burger</a></li>
                  <li><a class="dropdown-item" href="#"> <img src="img/card2.jpg" alt="" width="25" height="29" class="d-inline-block align-text-top">
                    Pizza</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="img/card3.jpg" alt="" width="25" height="29" class="d-inline-block align-text-top">
                   Minuman
                  </a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <img src="icon/driver.png" alt="" width="24" height="28" class="d-inline-block align-text-top">
                  Lacak Pesanan
                </a>
              </li>
            </ul>
            <a href="#" class="btn btn-outline-danger " style="margin-right: 5px;">Login</a> 
            <a href="#" class="btn btn-outline-danger">Daftar</a>
          </div>
        </div>
      </nav> -->

<!-- akhir nav -->


<!-- 
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Agasa Food  Delivery</h1>
          <p class="lead"  ><i class="fa-solid fa-clock" style="color: #d5d8dd;" ></i> 9:00 - 20:00</p>
          <p class="lead"><i class="fa-solid fa-location-dot" style="color: #d5d8dd;"></i> Kota Banjar</p> <br>
          <button type="button" class="btn btn-jumbotron">Order Now</button>
        </div>
      </div> -->

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
        <div class="kembali">
         <a href="{{route('welcome')}}"><img src="icon/arrow-right_2267911.png" alt=""  ></a>
        </div>
       </div>

<div class="menu-pizza">

<div class="container">
    <h2 class="text-center" style="color: black;" > <strong>Our </strong>Menu</h2>
    <div class="row">
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-20231222115654fNRE.png" class="card-img-top" alt="...">
        </div>
        <p  >Pizza Capricciosa</p>
        <p>Rp.320.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/seafood-pizza-removebg-preview.png" class="card-img-top" alt="...">
         
        </div>
        <p>Pizza Seafood</p>
        <p>Rp.300.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-20231226170718pimd.png" class="card-img-top" alt="...">
          
        </div>
        <p>Pizza Pepperoni</p>
        <p>Rp.130.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-202312211530073qRB.png" class="card-img-top" alt="...">
          
        </div>
        <p>Pizza Mushroom Truffle Oil</p>
        <p>Rp.150.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/wepik-export-20231226165748eSys.png" class="card-img-top" alt="...">
          
        </div>
        <p>Pizza Capricciosai</p>
        <p>Rp.320.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
      <div class="col-4">
        <div class="card" >
          <img src="img/Delicious_potato_onion_caramelized_pizza_-11-removebg-preview.png"  class="card-img-top" alt="...">
          
        </div>
        <p>Pizza Potato Onion</p>
        <p>Rp.130.000,-</p>
        <button type="button" class="btn btn-order">Order Now</button>
      </div>
    </div>
    
  </div>
</div>

<!-- best favorite -->







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