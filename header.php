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
            <a href="https://www.facebook.com/profile.php?id=100063632077219" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/hermes_bookstore/" class="fab fa-instagram"></a>
         </div>
         <p> <a href="login.php">Вход</a> | <a href="register.php">Регистър</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">ИК "Хермес" </a>  

         <nav class="navbar">
            <a href="home.php">Начало</a>
            <a href="about.php">За нас</a>
            <a href="shop.php">Магазин</a>
            <a href="contact.php">Контакти</a>
            <a href="orders.php">Поръчки</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="#" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>Потребителско име : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Излез </a>
         </div>
      </div>
   </div>

</header>