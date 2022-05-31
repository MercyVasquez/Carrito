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
   <title>home</title>
   <link rel="icon" href="images/Logo.jpg" type="image/x-icon">

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

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script type="text/javascript">
    function imgSlider(anything){
        document.querySelector('.Hongito').src = anything
    }
</script>
</body>
</html>