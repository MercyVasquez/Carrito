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
   <link rel="stylesheet" href="css/estilos.css">
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

<h1 class="title">Proximamente Webtoons</h1>
<div class="container__slider">

    <div class="container">
        <input type="radio" name="slider" id="item-1"  checked>
        <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3">

        <div class="cards">
            <label class="card" for="item-1" id="selector-1">
                <img src="https://swebtoon-phinf.pstatic.net/20210721_119/1626817818964FzTvJ_JPEG/thumbnail.jpg">
            </label>
            <label class="card" for="item-2" id="selector-2">
                <img src="https://jernih.co/wp-content/uploads/bts-6.jpg">
            </label>
            <label class="card" for="item-3" id="selector-3">
                <img src="https://img.wattpad.com/899858ead8db48b9b7288fb94ea8f01cc901b0ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f6537306734506d4e4930742d42673d3d2d3638323734383639392e313537616133356638383963623231633338353835343432373131332e6a7067?s=fit&w=720&h=720">
            </label>
        </div>
    </div>		
</div>
<div class="body">
	<h1 class="h1">Nuestros mangas bl más vendidos</h1>
	<div class="contentlist">
		<div class="layerlist">
			<h2 class="h2">01</h2>
			<div class="songdetails">
				<h4>BJ Alex</h4>
				<h5>Webmanga</h5>
			</div>
			<img src="./images/bj-alex-1.jpg" alt="imageAlbum">
		</div>
		<div class="layerlist">
			<h2 class="h2">02</h2>
			<div class="songdetails">
				<h4>Pintor nocturno</h4>
				<h5>Webmanga</h5>
			</div>
			<img src="./images/pintor.jpg" alt="imageAlbum">
		</div>
		<div class="layerlist">
			<h2 class="h2">03</h2>
			<div class="songdetails">
				<h4>King's maker</h4>
				<h5>Webmanga</h5>
			</div>
			<img src="./images/king.jpg" alt="imageAlbum">
		</div>
		<div class="layerlist">
			<h2 class="h2">04</h2>
			<div class="songdetails">
				<h4>Love or Hate</h4>
				<h5>Webmanga</h5>
			</div>
			<img src="./images/lovehate.jpg" alt="imageAlbum">
		</div>
      <div class="layerlist">
			<h2 class="h2">05</h2>
			<div class="songdetails">
				<h4>Our Omega L...</h4>
				<h5>Webmanga</h5>
			</div>
			<img src="./images/omega.jpg" alt="imageAlbum">
		</div>

      <div class="layerlist">
			<h2 class="h2">06</h2>
			<div class="songdetails">
				<h4>Te encontre</h4>
				<h5>Webmanga</h5>
			</div>
			<img src="./images/found.jpg" alt="imageAlbum">
		</div>
		
	</div>
</div>

<footer class="sticky-footer">
        <!-- <h2>Footer Stick to the Bottom</h2> -->
        <ul>
            <li><a href="home.php">Inicio</a></li>
            <li><a href="email">Contacto</a></li>
            <li><a href="shop.php">Carrito</a></li>
            <li><a href="checkout.php">Checkout</a></li>
            <li><a href="login">Login</a></li>
        </ul>
        <p> &copy; Copyright Mercy V - Jennifer G     <?php echo date('Y'); ?>.</p>
    </footer>

<!-- Aqui el JS  -->
<script src="js/script.js"></script>
<script src="js/loading.js"></script>
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