<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'Продуктът вече е добавен в количката!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Продуктът е добавен в количката!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Начало</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>СПЕЦИАЛНО ПОДБРАНА КНИГА ДО ВАШАТА ВРАТА.</h3>
      <p>Специално подбраните книги, които ви представяме, са като ключът към свят, който ще ви изненада, вдъхнови и промени в добра насока.</p>
      <a href="about.php" class="white-btn">Повече</a>
   </div>

</section>

<section class="products">

   <h1 class="title">Последни книги</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">BGN<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">Все още няма добвени книги!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">Зареди още</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/3.png" alt="">
      </div>

      <div class="content">
         <h3>За нас</h3>
         <p>Нашето издателство се отличава с изключителния си редакторски екип, който предоставя цялостна подкрепа и насоки на авторите през целия процес на публикуване, като гарантира висококачествени, добре популяризирани книги, които резонират с читателите.</p>
         <a href="about.php" class="btn">Прочете още</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Имате въпроси?</h3>
      <p>Ако имате някакви въпроси, не се колебайте да ги зададете и аз ще направя всичко възможно да ви предоставя точна и полезна информация</p>
      <a href="contact.php" class="white-btn">Свържете се с нас</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>