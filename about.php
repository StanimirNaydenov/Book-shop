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
   <title>За нас</title>

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

   <div class="box">
         <img src="images/Джамал.jpg" alt="">
         <p>"Убийство на кръстопът" от Харпър Лий: Шедьовър, който е актуален днес колкото и при първото му издаване, изследващ теми като несправедливост, расизъм и морал с невероятна проницателност и състрадание. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Джамал Тундере</h3>
      </div>

      <div class="box">
         <img src="images/Иван.jpg" alt="">
         <p>"Великият Гетсби" от Ф. Скот Фицджералд: Красиво написан роман, който предлага ядовита критика на Американската мечта и корумпиращото въздействие на богатството и излишъка.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Иван Сотиров</h3>
      </div>

      <div class="box">
         <img src="images/Георги.png" alt="">
         <p>"1984" от Джордж Оруел: Замразяващо мислене роман, който изрисува мрачна картина на дистопично бъдеще, където индивидуалността и свободата са потиснати от тоталитарен режим.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Жоро Игнатов</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"Гордост и предразсъдъци" от Джейн Остин: Класическа любовна история, която продължава да пленява читателите със своята умност, очарование и инсайтов коментар върху социалните конвенции на началото на 19 век в Англия.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Оливия Недева</h3>
      </div>

      <div class="box">
         <img src="images/Евгени.jpg" alt="">
         <p>"Хвърлете камък в мен" от Дж.Д. Селинджър: Контроверсиална, но важна книга, която улавя тъгата и объркването на юношите и предизвиква читателите да размислят за смисъла и целите на своя живот.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Евгени Миланов</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"Властелинът на пръстените" от Дж.Р.Р. Толкин: Епична фантастична поредица, която пренася читателите в изобилния свят на магия, приключения и героизъм, с вечни теми за приятелството, жертвата и битката между доброто и злото.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Сара Янг</h3>
      </div>

     

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