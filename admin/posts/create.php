 <?php include('../../path.php'); ?>
 <?php include(ROOT_PATH . "/app/controllers/posts.php");
 adminOnly();
 ?>
    <!--https://www.youtube.com/watch?v=eU9rZpbfWwk&t=3255s-->
    <!--https://www.youtube.com/watch?v=MBaw_6cPmAw-->
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!--My Css-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/nav-color.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/adminblog.css">
     <link rel="stylesheet" href="../../assets/css/register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
   
  </head>
  <body>

    <title>StatKu</title>

    <!--navbar-->
    <?php include(ROOT_PATH . '/app/includes/adminHeaders.php'); ?>
<!--akhir-navbar-->



<!-- page-wrapper-->
<div class="admin-wrapper">
   <!-- sidebar-kiri -->
   <?php include(ROOT_PATH . '/app/includes/adminSidebar.php'); ?>
   <!-- akhir-sidebar-kiri -->

   <!-- admin-content -->
   <div class="admin-content">
    <div class="button-group">
        <a href="create.php" class="btn btn-big">Add Post</a>
        <a href="index.php" class="btn btn-big">Manage Post</a>
    </div>

    <div class="content">
        <h2 class="page-title">Add Post</h2>
        <?php include(ROOT_PATH."/app/helpers/formErrors.php"); ?>
        <form action="create.php" method="post" enctype="multipart/form-data">

            <div>
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
            </div>
            <div>
                <label>Body</label>
                <textarea name="body" id="body"><?php echo $body;?></textarea>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" class="text-input">
            </div>
            <div>
            <label>Topic</label>
                <select name="topic_id" class="text-input">
                <option value=""></option>
                <?php foreach($topics as $key => $topic): ?>
                    <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                    <option selected value="<?php echo $topic['id']?>"><?php echo $topic['name']?></option>
                    <?php else: ?>
                    <option value="<?php echo $topic['id']?>"><?php echo $topic['name']?></option>
                    <?php endif; ?>
                <?php endforeach;?>
                </select>
            </div>
            <div>
            <?php if(empty($published)):?>
                    <label><input type="checkbox" name="published"> Publish</label>
            <?php else:?>
                    <label><input type="checkbox" name="published" checked> Publish</label>
            <?php endif; ?>
            </div>
            <div>
                <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
            </div>
        </form>
    </div>
   </div>
   <!-- akhir-admin-content -->
</div>
<!--akhir-page-wrapper-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
    <script src="../../ckfinder/ckfinder.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
    <script src="../../assets/js/admin.js"></script>

  </body>
</html>