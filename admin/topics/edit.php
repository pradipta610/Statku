<?php include('../../path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
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
    <link rel="stylesheet" href="../../assets/css/blog.css">
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
        <a href="create.php" class="btn btn-big">Add topic</a>
        <a href="index.php" class="btn btn-big">Manage topics</a>
    </div>

    <div class="content">
        <h2 class="page-title">Edit Topic</h2>
        <?php include(ROOT_PATH."/app/includes/messageadmin.php"); ?>
        
        <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>" >
            <div>
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $name;?>" class="text-input">
            </div>
            <div>
                <label>Description</label>
                <textarea name="description" id="body"><?php echo $description;?> </textarea>
            </div>
            <div>
                <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
    <script src="../../assets/js/admin.js"></script>
    <script src="../../assets/js/blog.js"></script>

  </body>
</html>