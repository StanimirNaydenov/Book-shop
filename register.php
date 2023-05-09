<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'Потребителя вече съществува!';
   }else{
      if($pass != $cpass){
         $message[] = 'Паролата за потвърждение не съвпада!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'Регистрацията е успешна!';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Регистрация</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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

   <form action="" method="post">
      <h3>Регистрирайте се сега</h3>
      <input type="text" name="name" placeholder="Въведете вашето име" required class="box">
      <input type="email" name="email" placeholder="Въведете вашия email" required class="box">
      <input type="password" name="password" placeholder="Въведетe вашата парола " required class="box">
      <input type="password" name="cpassword" placeholder="Потвърдете паролата" required class="box">
      <select name="user_type" class="box">
         <option value="user">Потребител</option>
         <option value="admin">Администратор</option>
      </select>
      <input type="submit" name="submit" value="Регистрирай се сега" class="btn">
      <p>Вече имате акаунт? <a href="login.php">Влезте сега</a></p>
   </form>

</div>

</body>
</html>