

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="La sencilla receta de Mary para las donas de tocino
           y arce es una golosina dulce y pegajosa con solo un
           toque de sal que siempre volverás a buscar.">
  <title>INmo</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
 

</head>

<body  class= "jumbotron-fluid">

  <style>
    
    @media all and (min-width: 992px) {
      .navbar .dropdown-menu-end {
        right: 0;
        left: auto;
      }

      .navbar .nav-item .dropdown-menu {
        display: block;
        opacity: 0;
        visibility: hidden;
        transition: .3s;
        margin-top: 0;
      }

      .navbar .nav-item:hover .nav-link {
        color: #fff;
      }

      .navbar .dropdown-menu.fade-down {
        top: 80%;
        transform: rotateX(-75deg);
        transform-origin: 0% 0%;
      }

      .navbar .dropdown-menu.fade-up {
        top: 180%;
      }

      .navbar .nav-item:hover .dropdown-menu {
        transition: .3s;
        opacity: 1;
        visibility: visible;
        top: 100%;
        transform: rotateX(0deg);
      }
    }
  </style>


 
  
  
  
  
  <style>
    <?php
    include('../2menu/css/style.css');
 
    ?>
  </style>
 
  <main class="site-wrapper">


      <?php

include "../modules/menu2.php"
  ?>




</head>

<nav class=" navbar-expand-lg navbar-dark bg-dark" >

 <div class="d-flex justify-content-center">
  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <div class="dropdown  ml-5 mb-1">

  <button id="dropdown-button2"  class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  Tipo de Inmueble
  <span class="caret"></span>
  </button> 
  <ul class="dropdown-menu" id="dropdownList2">
  <li> <a class="dropdown-item" href="#">Apartamentos</a></li>
    <li> <a class="dropdown-item" href="#">Casas</a></li>
    <li> <a class="dropdown-item" href="#">Oficinas</a></li>
    <li> <a class="dropdown-item" href="#">Locales</a></li>
    <li> <a class="dropdown-item" href="#">Bodegas</a></li>
    <li> <a class="dropdown-item" href="#">Lotes</a></li>
    <li> <a class="dropdown-item" href="#">Fincas</a></li>
    <li> <a class="dropdown-item" href="#">Edificio de Oficinas</a></li>
    <li>  <a class="dropdown-item" href="#">Consultorios</a></li>
    <li>  <a class="dropdown-item" href="#">Edificio de Apartamentos</a></li>
    </ul>
  </div>  
</div>

<div class="dropdown  ml-3 mb-1">
  <button  id="dropdown-button"  class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  Condición
    <span class="caret1"></span>
  </button> 

<ul class="dropdown-menu" id="dropdownList">
<li> <a class="dropdown-item" href="#" >Alquilado  </a></li>
<li> <a class="dropdown-item" href="#">Sin Alquilar  </a></li>
  <li>  <a class="dropdown-item" href="#">Nuevo Sin comprar</a></li>
  <li> <a class="dropdown-item" href="#">Usado Sin comprar</a></li>
  <li> <a class="dropdown-item" href="#">Usado en venta </a></li>
  <li> <a class="dropdown-item" href="#">Arriendo </a></li>
  <li> </ul>
  </div>
</div>
</div>




  </div>
  
 </div>   
 
</nav>

      <div class="wrapper d-flex align-items-stretch">
    
        <nav id="sidebar">
          <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary" aria-label="search">
              <i class="bi bi-list text-dark"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
          </div>
          <h1><a href="index.php" class="logo text-dark">Navegación</a></h1>
          <ul class=" navTopNavSector list-unstyled components mb-5 ">
            <li onclick="somethingSector(this)" class="active">
              <a href="../index.php"style='color: #fff;'><i class="bi bi-clipboard2-data-fill" ></i> Tablero</a>
            </li>
            <li onclick="somethingSector(this)">
              <a href="#"style='color: #fff;'><span class="bi bi-house-fill"></span> Propiedades</a>
            </li>
            <li onclick="somethingSector(this)">
              <a href="#"style='color: #fff;'><i class="bi bi-people-fill"></i> Inquilinos</a>
            </li>
            <li onclick="somethingSector(this)">
              <a href="#"style='color: #fff;'><i class="bi bi-key-fill"></i> Alquileres</a>
            </li>
            <li onclick="somethingSector(this)">
              <a href="#"style='color: #fff;'><i class="bi bi-file-earmark"></i> Inventarios</a>
            </li>
            <li onclick="somethingSector(this)">
              <a href="#" style='color: #fff;'><i class="bi bi-calculator-fill"></i> Finanzas</a>
            </li>
            <li onclick="somethingSector(this)">
              <a href="#"style='color: #fff;' ><i class="bi bi-file-earmark-pdf-fill"></i> Documentos</a>
            </li>
            </li>
            <li onclick="somethingSector(this)">
              <a href="#"style='color: #fff;'><i class="bi bi-person-square"></i> Contactos</a>
            </li>
            <li onclick="somethingSector(this)">
              <a href="#"style='color: #fff;'><i class="bi bi-chat-left-dots-fill"></i> Mensajes</a>
            </li>
             </ul>
             
             
        </nav>
       
  



        <iframe id="section" src="tabla.php" class="container-fluid mt-5  p-0" title="hola"  > </iframe> 
        <br>
      
        <br>
        <br>
      

        
                </div>

             <br>




<br>


<style>
body {

  margin-bottom: 60px;
  background-image: url('../img/skyskapes.jpg'); background-size: cover; background-repeat: no-repeat;  

}

.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px;
  background-color: #f5f5f5;
}
</style>


<div class="d-flex flex-column" style="min-height: 100vh">
 <main class="flex-fill"></main>
<footer  class="text-center text-lg-start text-white"
          style="background-color: #1c2331">  <section
             class="d-flex justify-content-between p-4"
             style="background-color: #6351ce"
             >

      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
  
      <div>
       
          <i class="bi bi-facebook"></i>
      
          <i class="bi bi-twitter"></i>
       
     
          <i class="bi bi-google"></i>
       
       
          <i class="bi bi-instagram"></i>
       
          <i class="bi bi-linkedin"></i>
        
       
          <i class="bi bi-github"></i>
        
      </div>

    </section>

    <section class="">
      <div class="container text-center text-md-start mt-5">

        <div class="row mt-3">
        
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-5">
     
            <span class="text-uppercase ">Useful links</span>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
        
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
         
            <span class="text-uppercase ">Useful links</span>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#" class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a href="#" class="text-white">MDWordPress</a>
            </p>
            <p>
              <a href="#" class="text-white">BrandFlow</a>
            </p>
            <p>
              <a href="#" class="text-white">Bootstrap Angular</a>
            </p>
          </div>
        
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          
            <span class="text-uppercase ">Useful links</span>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#" class="text-white">Your Account</a>
            </p>
            <p>
              <a href="#" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#" class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a href="#" class="text-white">Help</a>
            </p>
          </div>
         
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-5">
       
            <span class="text-uppercase ">Useful lidnks</span>
            <hr
                class=" mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
           <p class="mt-2">
            <a href="#" class="text-white">Your Account</a>
            </p>
            <p><i class="bi bi-house"></i> New York, NY 10012, US</p>
            <p><i class="bi bi-envelope "></i> info@example.com</p>
            <p><i class="bi bi-phone"></i> + 01 234 567 88</p>
            <p><i class="bi bi-print "></i> + 01 234 567 89</p>
          </div>
         
        </div>
     
      </div>
    </section>
  </footer>
</div>


                                   
</div>
    <div class ="navbar navbar-expand-sm bg-dark fixed-bottom text-white text-center fixed-buttom"> 
                                        
                                        <hr>
                                        
                                        <i class="bi bi-c-circle"></i>  <span class="container-fluid text-center">Todos los derechos reservados. 2018,  <?php echo date ("Y"); ?></span>
                                        
                                        </div>    
                      



</script>
        <script src="../js/jquery.min.js"></script>
        <script src="./js/bundle.js"></script>

        <script >(function($) {

"use strict";

var fullHeight = function() {

  $('.js-fullheight').css('height', $(window).height());
  $(window).resize(function(){
    $('.js-fullheight').css('height', $(window).height());
  });

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

})(jQuery);
</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
        
      
<script>  $(document).ready(function() {
    $('#dropdownList  li').find("a").click(function(){

      $('#dropdown-button').html($(this).html()).append("    <span class='caret'></span>");
    });
  });
  
 
  
  
  </script>
  <script>  $(document).ready(function() {
    $('#dropdownList1  li').find("a").click(function(){

      $('#dropdown-button').html($(this).html()).append("    <span class='caret'></span>");
      
    });

    $('#dropdownList2  li').find("a").click(function(){

$('#dropdown-button2').html($(this).html()).append("    <span class='caret'></span>");

});



  });
  
 
  
  
  </script>

<script>
function somethingSector(el) {
  document.querySelector('.navTopNavSector .active').classList.remove("active");
  el.classList.add("active");
} 
  </script>
       
</body>



    
</html>