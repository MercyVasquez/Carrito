<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="https://www.facebook.com/nisakacomics" class="fab fa-facebook-square"></a>
            <a href="https://www.instagram.com/nisakacomicsrd/" class="fab fa-instagram"></a>
            <a href="https://www.instagram.com/mangastoprd/" class="fab fa-instagram"></a>
         </div>
         <p> nuevo <a href="login">login</a> | <a href="register">register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">SHIMEJIRD</a>
         <nav class="navbar">
            <a href="/">Inicio</a>
            <a href="abouthome">Nosotros</a>
         </nav>
         <div class="icons">
            <div id="user-btn" class="fas fa-book">
            </div>
         </div>
      </div>
   </div>

</header>