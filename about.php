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
   <title>ЗА нас</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>За нас</h3>
   <p> <a href="home.php">Начало</a> / За нас </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/DkPjJTojQzh0TDkx8OHm--3--9xhlg.jpg" alt="">
      </div>

      <div class="content">
         <h3>Защо да изберете нас?</h3>
         <p>Нашият екип е изграден от висококвалифицирани професионалисти, които са посветени на предоставянето на висококачествено обслужване и гарантирането на удовлетворението на клиентите.</p>
         <p>Нашето издателство предлага глобално най-популярните в настоящето книги.</p>
         <a href="contact.php" class="btn">Свържете се с нас</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Мнения на клиенти</h1>

   <div class="box-container">

     

   </div>

</section>

<section class="authors">

   <h1 class="title">Известни автори</h1>

   <div class="box-container">

      

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>