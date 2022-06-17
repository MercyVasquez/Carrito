<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login');
}

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'payment status has been updated!';

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_orders.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">Facturas</h1>

   <div class="box-container">
      <?php
      $print_id = $_GET['print'];
      $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE id = '$print_id'") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
      ?>
      <div class="box">
         <p> Id del usuario : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
         <p> Fecha : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
         <p> Cliente: <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> Telefono: <span><?php echo $fetch_orders['number']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> Direccion : <span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> Productos : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
         <p> Precio total : <span>$<?php echo $fetch_orders['total_price']; ?></span> </p>
         <p> Metodo de pago : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> Estado: <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
        
           <a href="" onClick="print();" class="option-btn"><i class="fa fa-print"> Imprime</i></a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

</section>