<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SHIMEJIRD</title>
   <link rel="shortcut icon" href="images/loguito.png" type="image/x-icon">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/about.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Sobre nosotros</h3>
   <p> <a href="home.php">Inicio</a> / nosotros </p>
</div>
<br>
<br>
<br>
<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/anime2.gif" alt="">
      </div>

      <div class="content">
         <h3>Quienes somos</h3>
         <p>Bienvenido Cliente, conocenos un poco mas accediendo a nuestras sucursales, ademas, aqui en nuestra pagina te daremos la facilidad de poder ver donde queda ubicada.</p>
         <p>En la tienda virtual de nuestra empresa llamada Shimeji rd encargada de la distribucion de mangas/manhuas/manwhuas, podras adquirir cualquier producto que deseas. ¿Que esperas para ordenar?</p>
         <a href="email" class="btn">contactanos aqui</a>
      </div>

   </div>

</section>
<br>
<div class="wrapper"> 
    <div class="box"> 
      <i class="fas fa-quote-left quote"></i> 
      <p class="p">Ofrecer un servicio de calidad a nuestros cliente, siempre respetando sus necesidades y ofreciendo productos honestamente.       <i class="fas fa-quote-right quote"></i> </p> 
      <br> <br>
      <div class="content"> 
        <div class="info"> 
          <div class="name">Visión</div> 
          <br>
          <div class="job">Shimeji | Manga store</div> 
        </div> 
        <div class="image"> 
          <img src="images/ed1.gif" alt=""> 
        </div> 
      </div> 
    </div> 
    <div class="box"> 
      <i class="fas fa-quote-left quote"></i> 
      <p class="p">Gracias a nuestros servicios y nuestro producto, a la vez de llegar nuestros clientes, surcar nuevos horizontes con nuestro negocio, ampliándonos moral y empresarialmente para as convertirnos en la empresa número uno, no en producción, sino para los clientes.      <i class="fas fa-quote-right quote"></i> </p> 
      <div class="content"> 
        <div class="info"> 
          <div class="name">Objetivos</div> 
          <br>
          <div class="job">Shimeji | Manga store</div> 
     
        </div> 
        <div class="image"> 
          <img src="images/ed2.gif" alt=""> 
        </div> 
      </div> 
    </div> 
    <div class="box"> 
      <i class="fas fa-quote-left  quote"></i> 
      <p class="p">Poder convertirnos en una de las principales librerías a recurrir en el país, además de poder vender productos accesibles y de mejor calidad posible.       <i class="fas fa-quote-right quote"></i> </p> 
      <br> <br>
      <div class="content"> 
        <div class="info"> 
          <div class="name">Misión</div> 
          <br>
          <div class="job">Shimeji | Manga store</div> 
        </div> 
        <div class="image"> 
          <img src="images/ed3.gif" alt=""> 
        </div> 
      </div> 
    </div> 
  </div>
<section class="Maps">

<h1>Visitanos!</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d946.5251451592569!2d-70.70123495250397!3d19.45001098686458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf5bbfa0777d%3A0xb89fe119a67a7ed4!2sC.%20Gral.%20Cabrera%2031%2C%20Santiago%20De%20Los%20Caballeros%2051000!5e1!3m2!1ses-419!2sdo!4v1654005630430!5m2!1ses-419!2sdo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>