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
    <link rel="stylesheet" href="./css/style.css">
    <!-- css buat blog -->
    <link rel="stylesheet" href="./css/blog.css">
    <!-- css buaut navbar -->
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  
  </head>
  <body>

    <title>LabBuddy</title>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
      <div class="container-fluid padding-lr">
        <a class="navbar-brand" href="#">LabBuddy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            <a class="nav-link" href="./contact.php">Contact</a>
            <a class="nav-link" href="./Blog.php">Blog</a>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-alt"></i>User
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item " href="#">Dashboard</a></li>
              <li><a class="dropdown-item " href="#">Logout</a></li>
              
              </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
<!--akhir-navbar-->

<!-- page wrapper --> 
<div class="page-wrapper">
  <!-- post slider -->
  <div class="post-slider">
   <h1 class="slider-title">Trending Post</h1>
   <i class="fas fa-angle-left prev"></i>
   <i class="fas fa-angle-right next"></i>
    <div class="post-wrapper">
      <div class="post">
        <img src="keperluan-statistik/iu.jpg" class="slider-image" alt="iu">
        <div class="post-info">
          <h4><a href="#">Iu Hotel Del Luna</a></h4>
          <i class="fas fa-user">kim haneul</i>
          &nbsp;
          <i class="fas fa-calendar">jan 10,2021</i>
        </div>
      </div>

      <div class="post">
        <img src="keperluan-statistik/yejin.jpg" class="slider-image" alt="iu">
        <div class="post-info">
          <h4><a href="#">Son Ye Jin Crash Landing On You</a></h4>
          <i class="fas fa-user">kim haneul</i>
          &nbsp;
          <i class="fas fa-calendar">jan 10,2021</i>
        </div>
      </div><div class="post">
        <img src="keperluan-statistik/suzy.jpg" class="slider-image" alt="iu">
        <div class="post-info">
          <h4><a href="#">Bae Suzy Vagabond</a></h4>
          <i class="fas fa-user">kim haneul</i>
          &nbsp;
          <i class="fas fa-calendar">jan 10,2021</i>
        </div>
      </div><div class="post">
        <img src="keperluan-statistik/Sejeong.jpg" class="slider-image" alt="iu">
        <div class="post-info">
          <h4><a href="#">Sejeong Uncanny Counter</a></h4>
          <i class="fas fa-user">kim haneul</i>
          &nbsp;
          <i class="fas fa-calendar">jan 10,2021</i>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir post slider -->

<!-- konten -->
<!-- main-content -->
<div class="content clearfix">
  <div class="main-content">
    <div class="recent-post-title">Recent Post</div>

    <div class="post clearfix">
      <img src="keperluan-statistik/iu.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h3><a href="#">Iu release new album "celebrity"</a></h3>
        <i class="fas fa-user">Pradipta</i>
        &nbsp;
        <i class="fas fa-calendar">Jan 1,2021</i>
        <p class="preview-text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elitaaa. Quam esse doloremque repellat quis eum, perferendis laborum adipisci 
        </p>
        <a href="#" class="btn read-more">Read More</a>
      </div>
    </div>

    <div class="post clearfix">
      <img src="keperluan-statistik/Sejeong.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h3><a href="#">Sejeong Uncanny Counter</a></h3>
        <i class="fas fa-user">Pradipta</i>
        &nbsp;
        <i class="fas fa-calendar">Jan 1,2021</i>
        <p class="preview-text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elitaaa. Quam esse doloremque repellat quis eum, perferendis laborum adipisci 
        </p>
        <a href="#" class="btn read-more">Read More</a>
      </div>
    </div>

    <div class="post clearfix">
      <img src="keperluan-statistik/yejin.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h3><a href="#">Son Ye Jin Crash Landing On You</a></h3>
        <i class="fas fa-user">Pradipta</i>
        &nbsp;
        <i class="fas fa-calendar">Jan 1,2021</i>
        <p class="preview-text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elitaaa. Quam esse doloremque repellat quis eum, perferendis laborum adipisci 
        </p>
        <a href="#" class="btn read-more">Read More</a>
      </div>
    </div>

    <div class="post clearfix">
      <img src="keperluan-statistik/suzy.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h3><a href="#">Bae Suzy Vagabond</a></h3>
        <i class="fas fa-user">Pradipta</i>
        &nbsp;
        <i class="fas fa-calendar">Jan 1,2021</i>
        <p class="preview-text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elitaaa. Quam esse doloremque repellat quis eum, perferendis laborum adipisci 
        </p>
        <a href="#" class="btn read-more">Read More</a>
      </div>
    </div>

    <div class="post clearfix">
      <img src="keperluan-statistik/iu.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h3><a href="#">Iu release new album "celebrity"</a></h3>
        <i class="fas fa-user">Pradipta</i>
        &nbsp;
        <i class="fas fa-calendar">Jan 1,2021</i>
        <p class="preview-text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elitaaa. Quam esse doloremque repellat quis eum, perferendis laborum adipisci 
        </p>
        <a href="#" class="btn read-more">Read More</a>
      </div>
    </div>

    <div class="post clearfix">
      <img src="keperluan-statistik/iu.jpg" alt="" class="post-image">
      <div class="post-preview">
        <h3><a href="#">Iu release new album "celebrity"</a></h3>
        <i class="fas fa-user">Pradipta</i>
        &nbsp;
        <i class="fas fa-calendar">Jan 1,2021</i>
        <p class="preview-text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elitaaa. Quam esse doloremque repellat quis eum, perferendis laborum adipisci 
        </p>
        <a href="#" class="btn read-more">Read More</a>
      </div>
    </div>
  </div>
  <!-- akhir-main-content -->
  <div class="sidebar">
    <div class="section search">
      <h2 class="section-title">Search</h2>
      <form action="#" method="POST">
        <input type="text" name="search-terms" class="text-input" placeholder="Search...">
      </form>
    </div>
    <div class="section topics">
      <h2 class="section-title">Topics</h2>
      <ul>
      <li><a href="#">Poems</a></li>
      <li><a href="#">Quotes</a></li>
      <li><a href="#">Fiction</a></li>
      <li><a href="#">Biography</a></li>
      <li><a href="#">Motivation</a></li>
      <li><a href="#">Inspiration</a></li>
      <li><a href="#">Life Lesson</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- akhir-konten -->

</div>
<!-- akhir page wrapper -->



<!-- footer -->
<footer class="bg-dark text-white pt-5 pb-4 clear" >
<div class="container text-center text-md-left">
  <div class="row text-center text-md-left">
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold text-warning">LabBuddy</h5>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe exercitationem autem cupiditate quidem, explicabo perferendis fugiat porro dolores hic, eos adipisci velit. Corporis blanditiis aspernatur delectus nemo ea iure libero.</p>
    </div>
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold text-warning">PRODUCT</h5>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">aaaaaaaaaaaa</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">aaaaaaaaaaaa</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">aaaaaaaaaaaa</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none">aaaaaaaaaaaa</a>
      </p>
    </div>

    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Quick Links</h5>
      <p>
        <a href="#" class="text-white" style="text-decoration:none;">bbbbbbbbbbbb</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none;">bbbbbbbbbbbb</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none;">bbbbbbbbbbbb</a>
      </p>
      <p>
        <a href="#" class="text-white" style="text-decoration:none;">bbbbbbbbbbbb</a>
      </p>
    </div>

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
      <p>
        <i class="fas fa-home mr-3"></i>bbbbbbbbbbbbb
      </p>
      <p>
        <i class="fas fa-envelope mr-3"></i> bbbbbbbbbbbbb
      </p>
      <p>
        <i class="fas fa-phone mr-3"></i> bbbbbbbbbbbbb
      </p>
      <p>
        <i class="fas fa-print mr-3"></i> bbbbbbbbbbbbb
      </p>
    </div>
</div>
    <hr class="mb-4">
  <div class="row align-items-center">
    <div class="col-md-7 col-lg-8">
      <p>Copyright @2020 All rights reserved by :
        <a href="#" style="text-decoration: none;">
      <strong class="text-warning">The Providers</strong>
    </a>
      </p>
    </div>
     
    <div class="col-md-5 col-lg-4">
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;">
              <i class="fab fa-facebook"></i>
            </a>
          </li>

          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;">
              <i class="fab fa-twitter"></i>
            </a>
          </li>

          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;">
              <i class="fab fa-google-plus"></i>
            </a>
          </li>

          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="font-size:23px;">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</div>
</footer>
<!-- akhir-footer -->














<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- slick js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- blog js -->
<script type="text/javascript" src="./js/aku.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
    <script src="./js/index.js"></script>

  </body>
</html>