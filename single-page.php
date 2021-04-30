<?php include("path.php");
include(ROOT_PATH . '/app/controllers/posts.php');

if(isset($_GET['id'])){
  $post = selectOne('posts',['id'=>$_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts',['published'=> 1]);
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
    <link rel="stylesheet" href="assets/css/blog.css">
    <!-- css buaut navbar -->
    <link rel="stylesheet" href="assets/css/navbar.css">
    <!-- css buat single-page -->
    <link rel="stylesheet" href="assets/css/single-page.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  
  </head>
  <body>

    <title><?php echo $post['title']?> | StatKu</title>

<!--navbar-->
<?php include(ROOT_PATH."/app/includes/header.php"); ?>
<!--akhir-navbar-->

<!-- page wrapper --> 
<div class="page-wrapper">
  <!-- post slider -->
  
  <!-- akhir post slider -->


<!-- konten -->
<div class="content clearfix">


<!-- main-content -->
<div class="main-content-wrapper">
<div class="main-content single">
    <h1 class="post-title"><?php echo $post['title']?></h1>

    <div class="post-content">
       <?php echo html_entity_decode($post['body']);?>
    </div>
</div> 
</div>
<!-- akhir-main-content -->


<!-- sidebar -->
  <div class="sidebar single">

  <div class="section popular">
      <h2 class="section-title">Popular</h2>


      <?php foreach($posts as $p): ?>
        <div class="post clearfix">
          <img src="<?php echo BASE_URL . '/assets/img/' . $p['image'];?>"  alt="iu">
          <a href="" class="title"><h6><?php echo $p['title']; ?></h6></a>
        </div>

      <?php endforeach; ?>

  </div>


    <div class="section search">
      <h2 class="section-title">Search</h2>
      <form action="#" method="POST">
        <input type="text" name="search-terms" class="text-input" placeholder="Search...">
      </form>
    </div>
    <div class="section topics">
      <h2 class="section-title">Topics</h2>
      <ul>
      <?php foreach($topics as $topic): ?>
      <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] .'&name='.$topic['name']; ?>"><?php echo $topic['name']?></a></li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
<!-- akhir-sidebar -->
<!-- akhir-konten -->
</div>
<!-- akhir page wrapper -->



<!-- footer -->
<?php include(ROOT_PATH."/app/includes/footer.php"); ?>
<!-- akhir-footer -->














<!-- jquery -->
<script type="text/javascript" src="assets/js/anticopas.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- slick js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- blog js -->
<script type="text/javascript" src="assets/js/aku.js"></script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->


  </body>
</html>