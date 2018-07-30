<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">      
<title></title>
    </head>
    <body>
      
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/bunny.png"></a> <a class="navbar-brand"><i class="fas fa-futbol" id="ball"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pull-right" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Start</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">O mnie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#fotoTekst">Hobby</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Wykonane projekty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
<!--    end nav    -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100 img-fluid" src="img/main1.jpg" alt="First slide">
                  <div class="carousel-caption">
                    <h1>Poznane technologie !</h1>
                    <a href="#about"><button type="button" class="btn btn-outline-light btn-lg">Start</button></a>
                  </div>
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100 img-fluid" src="img/bootstrap1.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100 img-fluid" src="img/css.jpg" alt="Third slide">
              </div>
                <div class="carousel-item img-fluid">
                  <img class="d-block w-100" src="img/html5.jpg" alt="Fourth slide">
              </div>
                <div class="carousel-item img-fluid">
                    <img class="d-block w-100" src="img/sf.jpg" alt="Fifth slide">
              </div>
            </div>
<!--            buttons-->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

<!--end carousel-->


<!--about me-->


<div id="about">
    <div class="container-fluid text-center">
        <h2>Informacje o mnie </h2>
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-graduation-cap" id="icon"></i>
                <h3>Jestem studentem infotmatyki</h3>
                <p>Obecnie jestem studentem III-ciego roku <br>
                    informatyki na uczelni UPH w Siedlcach.<br> 
                Dotychczas poznałem podstawy programowania <br>
                w języku PHP i JAVA oraz realacyjne bazy<br>
                danych MYSQL.
                <p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-laptop" id="icon"></i>
                <h3>Znajomość języków programowania</h3>
                <p>PHP & Symfony</p>
                <p>CSS3 & HTML5</p>
                <p>MYSQL</p>
                <p>JAVA</p>
            </div>
            <div class="col-md-4">
                <i class="far fa-keyboard" id="icon"></i>
                <h3>Poznane środowiska programistyczne</h3>
                <p>NeatBeans</p>
                <p>PHP Storm</p>
                <p>XAMPP</p>
                <p>GIT</p>
                <p></p>
            </div>
        </div>
    </div>    
</div>

<!--end about me-->


<!--start figyre-->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
            
        </div>
    </div>
</figure>
<!--end figure-->



<!--sectuib text abd foto-->
<div id="fotoTekst">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-12 col-xl-4">
<!--<div class="col-xl-4">-->
                <img src="img/ball.jpeg" class="img-fluid">
            </div>
            <div class="col-lg-12 col-xl-4">
<!--<div class="col-xl-4">-->
                <h3>Programowanie i nie tylko</h3>
                <p>Programowanie na studich bardzo mi się spodobało co spowodowało,że nie tylko na zajęciach zajmowałem się kodowaniem.
                Również swój wolny czas poświęcam na zdobywanie nowej widzy, a także poznawanie nowych technologii, które pozwalają mi się rozwijać.
                W wolnym czasie jestem aktywny fizycznie, kocham chodzić po górach, jeździć na rowerze, a moją niespełnioną pasją jest piłka nożna
                w którą gram bardzo często. Nie są dla mnie przeszkodą nawet nocne turnieje rozgrywane w Stanach Zjednoczonych Ameryki, gdzie mecze 
                odbywają się w środku nocy. </p>
            </div>
            <div class="col-lg-12 col-xl-4">
<!--<div class="col-xl-4">-->
<img src="img/photo.jpg" class="img-fluid">
            </div>
        </div>
        
    </div>
</div>

<!--end fototekst-->

<!--projcets -->
<div id="projects">
    <div class="container-fluid text-center">
        <h3>Dotychczas wykonane projekty</h3>
        <hr>
        <div class="row">           
            <div class="col-xl-6">
                <h3>Zrealizowane prace:</h3>
                
                    <p>Organizer wydatków w JAVA
                    z interfejsem graficznym</p> 
                   <p> Sklep internetowy w PHP</p>
                   <p> Wypożyczalnia samochodów wykonana w Symfony</p>
                   <p> Blog wykonany w Symfony</p>
                   <p> Kilka innych zapraszam do moich repozytoriów GIT-a</p>
                
                 <div class="col-md-offset-3">
<!--                     <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">-->
                        <a href="https://www.facebook.com"><button type="button" class="btn btn-primary btn-lg">Mój Git</button></a>
<!--                     </div>-->
                </div>
                
            </div>
            <div class="col-xl-6">
                <img src="img/project.jpg" class="img-fluid" >
            </div>
        </div>
    </div>
</div>

<!--end projects-->
<div id="footer">
<footer>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-4">
                <h4>Patryk Partyn</h4>
                <hr>
                <img src="img/photo.jpg">
            </div>
             <div class="col-md-4">
                 <h4>Kontakt</h4>
                 <hr>
                 <p><i class="fas fa-envelope"></i> patryk.partyn@gmail.com</p>
                 <p><i class="fas fa-phone"></i> Phone: 500-087-069 </p>
                 <p><i class="fa fa-home" aria-hidden="true"></i> Siedlce </p>
                 <p><i class="fas fa-address-book"></i> 08-110 Poland</p>
                 
                
            </div>
             <div class="col-md-4">
                 <h4>Media społecznościowe</h4>
                 <hr>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>    
    </div>
</footer>

</div>


<!--end about me-->


    </body>
</html>
