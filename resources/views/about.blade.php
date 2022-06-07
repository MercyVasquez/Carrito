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

<section class="review">
   
<div class="review">
   <div class="head-review">
      <img src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Nathan D.</div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Mary Will</div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>
<div class="review">
   <div class="head-review">
      <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" width="250px">
   </div>
   <div class="body-review">
      <div class="name-review">Kevin Tuck</div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>
</section>

<section class="Maps">

<h1>Visitanos!</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d946.5251451592569!2d-70.70123495250397!3d19.45001098686458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf5bbfa0777d%3A0xb89fe119a67a7ed4!2sC.%20Gral.%20Cabrera%2031%2C%20Santiago%20De%20Los%20Caballeros%2051000!5e1!3m2!1ses-419!2sdo!4v1654005630430!5m2!1ses-419!2sdo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>