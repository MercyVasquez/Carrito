<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login');
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

   <!-- link del css -->
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="css/circle.css">

</head>
<body>
   
<?php include 'header.php'; ?>
<section>
   <div class="circle"></div>
   <div class="content">
      <div class="textBox">
         <h2>Tu parada de manga <span> Favorita.</span></h2>
      </div>       
      <div class="imgBox">
         <img src="./images/loguito.png" class="Hongito">
      </div> 
   </div>
   <ul class="thumb">
      <li><img src="./images/loguito.png" onclick="imgSlider('./images/loguito.png')"></img></li>
      <li><img src="./images/ed1.gif" onclick="imgSlider('./images/ed1.gif')"></img></li>
      <li><img src="./images/ed2.gif" onclick="imgSlider('./images/ed2.gif')"></img></li>
      <li><img src="./images/ed3.gif" onclick="imgSlider('./images/ed3.gif')"></img></li>

   </ul>
</section>
<!-- Aqui la parte de descuento en novelas BL-->
<!-- Aqui la parte de la review-->
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
<section>
<!-- Aqui el JS  -->
<script src="js/script.js"></script>
<script type="text/javascript">
    function imgSlider(anything){
        document.querySelector('.Hongito').src = anything
    }
</script>
<script type="text/javascript">

var swiper = new Swiper(".books-slider", {
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
</script>
</body>
</html>