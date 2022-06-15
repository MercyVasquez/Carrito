<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="icon" href="images/Logo.jpg" type="image/x-icon">
   <link rel="stylesheet" href="css/login.css">

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
            <h1 class="title">Entrar</h1>
            <p>Inicia sesion</p>
            <form class="inputs-container" action="login.php" method="POST">
            @csrf
                <input class="input" type="email" placeholder="Gmail" name="email" required>
                <input class="input" type="password" placeholder="Contraseña" name="password" required>
                <span class="msg-error error"></span>
                <div id="recaptcha" class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI" data-theme="dark"></div>
                <input type="submit" name="submit" value="Entrar" class="btn">
                <p>Ya tienes una cuenta? <span class="span"><a href="register">Click aqui!</a></span></p>
            </form>
          </div>
            <img class="image-container" src="images/844213.png" alt="">
      </div>
</div>
<script src="https://www.recaptcha.net/recaptcha/api.js" async defer></script>
    <script>
      grecaptcha.ready(() => {
        grecaptcha.render('html_element', {
           'sitekey' : '6LdbZmogAAAAAHGyn8Q5kwzrZvKPZguOg8G0aeBY'
        });
      });
    </script>
    </script>
</body>
</html>