<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!--Css y fa -->
   <script src="https://kit.fontawesome.com/4437f1e5d2.js" crossorigin="anonymous"></script>
   <link rel="icon" href="images/loguito.png">
   <link rel="stylesheet" href="css/registro.css">

</head>
<body>



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
   
<div class="form-container">
   <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Registrate</h1>
            <p>Crea tu cuenta</p>
            <form class="inputs-container" action="register.php" method="POST">
            @csrf
                <input class="input" type="text" placeholder="Usuario" name="name" required>
                <input class="input" type="email" placeholder="Gmail" name="email" required>
                <input class="input" type="password"placeholder="Contraseña" name="password" required>
                <input class="input" type="password" placeholder="Confirma Contraseña" name="cpassword" required>
                <input type="submit" name="submit" value="Registrate" class="btn">
                <p>Ya tienes una cuenta? <span class="span"><a href="">Click aqui!</a></span></p>
            </form>
          </div>
          <img class="image-container" src="images/registerimage.jpg" alt="">
      </div>
</div>

</body>
</html>