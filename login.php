<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>
    <!--https://www.youtube.com/watch?v=eU9rZpbfWwk&t=3255s-->
    <!--https://www.youtube.com/watch?v=MBaw_6cPmAw-->
    <!-- https://www.youtube.com/watch?v=dIaATEa__fc      navbar -->
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!--My Css-->
    <!-- normal css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- css buat blog -->
    <link rel="stylesheet" href="assets/css/logres.css">
    <!-- css buaut navbar -->
    <link rel="stylesheet" href="assets/css/navbar.css">
    <!-- css buat single-page -->
    <link rel="stylesheet" href="assets/css/single-page.css">
    <!-- css buat register -->
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  
  </head>
  <body>

    <title>StatKu</title>

<!--navbar-->
<?php include(ROOT_PATH."/app/includes/header.php"); ?>
<!--akhir-navbar-->


<div class="auth-content">
    <form action="login.php" method="POST">
        <h2 class="form-title">Login</h2>
        <?php include(ROOT_PATH."/app/helpers/formErrors.php"); ?>
        <div>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username ;?>" class="text-input">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password ;?>" class="text-input">
        </div>
        <div class="buttondiv">
        <button type="submit" name="login-btn" class="btn btn-big ">Login</button>
        </div>
        <p>Or <a href="<?php echo BASE_URL.'/register.php'?>">Sign Up</a></p>
    </form>
</div>












<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->


  </body>
</html>