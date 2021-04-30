<!--https://www.youtube.com/watch?v=eU9rZpbfWwk&t=3255s--><!--Layout web home WPA-->
<!--https://www.youtube.com/watch?v=MBaw_6cPmAw--><!--animasi form home-->
<!--https://www.youtube.com/watch?v=8kTPtrz7PiU--><!--contact layout-->
<!--https://www.youtube.com/watch?v=N6_0L6Ie9io--><!--form contact-->
<?php include('path.php'); 
include(ROOT_PATH . "/app/database/db.php");
?>
<?php include 'sendmail.php'?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!--My Css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact1.css">
    <link rel="stylesheet" href="assets/css/nav-color.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  </head>
  <body>

    <title>StatKu</title>

<!--navbar-->
    <?php include(ROOT_PATH."/app/includes/headerfirst.php"); ?>
<?php include(ROOT_PATH."/app/includes/message.php"); ?>
<!--akhir-navbar-->
<!--alert message-->
<?php echo $alert;?>
<!--akhir alert message-->
<!--Contact Form-->
<div class="bg-light p-5 rounded-lg ">
  <div class="contact-section">
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post" enctype= multipart/form-data>
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="abstrak"  rows="5" placeholder="Variabel Yang Diteliti(Mohon cantumkan abstrak penelitian)" required></textarea>
          <textarea name="metodologi"  rows="5" placeholder="Metode Penelitian" ></textarea>
          <input type="file" class="text-box input " name="file" id="file">
          <div class="inputdiv">
          <input type="submit" name="submit" class="send-btn" value="Send">
          </div>
        </form>
      </div>
  </div>
</div>


<!--Akhir Contact Form-->


<!-- footer -->
<?php include(ROOT_PATH."/app/includes/footer.php"); ?>
<!-- akhir-footer -->















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
 
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
    <!--<script src="index.js"></script>-->
<script src="assets/js/contact.js"></script>

  </body>
</html>