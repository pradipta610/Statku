<?php include('../../path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
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
        <a href="create.php" class="btn btn-big">Add User</a>
        <a href="index.php" class="btn btn-big">Manage Users</a>
    </div>

    <div class="content">
        <h2 class="page-title">Manage Users</h2>
        <?php include(ROOT_PATH."/app/includes/message.php"); ?>
        <table>
            <thead>
                <th>N</th>
                <th>Username</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
            <?php foreach($admin_users as $key => $user):?>
                <tr>
                    <td><?php echo $key + 1;?></td>
                    <td><?php echo $user['username'];?></td> 
                    <td><?php echo $user['email'];?></td>
                    <td><a href="edit.php?id=<?php echo $user['id'];?>" class="edit">edit</a></td>
                    <td><a href="index.php?delete_id=<?php echo $user['id'];?>" class="delete">delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
   </div>
   <!-- akhir-admin-content -->
</div>
<!--akhir-page-wrapper-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
    <!-- <script src="./js/index.js"></script> -->
    <script src="../../assets/js/blog.js"></script>
  </body>
</html>