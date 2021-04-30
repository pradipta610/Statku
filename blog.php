<?php include('path.php');
include(ROOT_PATH . "/app/controllers/topics.php");


$posts =array();
$postsTitle = 'RecentPosts';
if(isset($_GET['t_id'])){
$posts = getPostsByTopicId($_GET['t_id']);
$postsTitle = "You Search For Post Under ' ". $_GET['name']. " ' ";
}else if(isset($_POST['search-terms'])){
  $postsTitle = "You Search For ' ". $_POST['search-terms']. " ' ";
  $posts = searchPosts($_POST['search-terms']);
}else{
  $posts = getPublishedPosts();

}
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
<?php include(ROOT_PATH."/app/includes/message.php"); ?>
<!--akhir-navbar-->

<!-- page wrapper --> 
<div class="page-wrapper">
  <!-- post slider -->
  <div class="post-slider">
   <h1 class="slider-title">Trending Post</h1>
   <i class="fas fa-angle-left prev"></i>
   <i class="fas fa-angle-right next"></i>
    <div class="post-wrapper">

      <?php foreach($posts as $post):?>
        <div class="post">
          <img src="<?php echo BASE_URL . "/assets/img/" . $post['image'];?>" class="slider-image" alt="iu">
          <div class="post-info">
            <h4><a href="single-page.php?id=<?php echo $post['id']?>"><?php echo $post['title']; ?></a></h4>
            <i class="fas fa-user"><?php echo $post['username'];?></i>
            &nbsp;
            <i class="fas fa-calendar"><?php echo date('j F Y',strtotime($post['created_at']));?></i>
          </div>
        </div>

      <?php endforeach;?>

      
    </div>
  </div>
  <!-- akhir post slider -->

<!-- konten -->
<!-- main-content -->
<div class="content clearfix">
  <div class="main-content">
    <div class="recent-post-title"><?php echo $postsTitle ;?></div>
        <?php foreach($posts as $post):?>

    <div class="post clearfix">
      <img src="<?php echo BASE_URL . "/assets/img/" . $post['image'];?>" alt="" class="post-image">
      <div class="post-preview">
        <h3><a href="single-page.php?id=<?php echo $post['id']?>"><?php echo $post['title'];?></a></h3>
        <i class="fas fa-user"><?php echo $post['username'];?></i>
        &nbsp;
        <i class="fas fa-calendar"><?php echo date('j F Y',strtotime($post['created_at']));?></i>
        <div class="overflow">
        <p class="preview-text"><?php echo html_entity_decode(substr($post["body"],0,15) . '...'); ?></p>
        </div>
        
        <a href="single-page.php?id=<?php echo $post['id']?>" class="btn read-more">Read More</a>
      </div>
    </div>
        <?php endforeach;?>

       
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
      <?php foreach($topics as $key => $topic): ?>
        <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] .'&name='.$topic['name']; ?>"><?php echo $topic['name']?></a></li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>
<!-- akhir-konten -->

</div>
<!-- akhir page wrapper -->



<!-- footer -->
<?php include(ROOT_PATH."/app/includes/footer.php"); ?>
<!-- akhir-footer -->












<script type="text/javascript" src="assets/js/anticopas.js"></script>
<!-- jquery -->
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
    <script src="assets/js/blog.js"></script>

  </body>
</html>