<nav class="blacknav navbar navbar-expand-lg navbar-dark" >
 
 <div class="container-fluid padding-lr">
   <a class="navbar-brand" href="<?php echo BASE_URL.'/blog.php'?>">
   <img src="<?php echo BASE_URL.'/assets/img/Logo.png'?>" alt=""  class="d-inline-block align-top">StatKu
   </a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav ml-auto">
       <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL.'/index.php'?>">Home</a>
       <a class="nav-link" href="<?php echo BASE_URL.'/contact.php'?>">Contact</a>
       <a class="nav-link" href="<?php echo BASE_URL.'/blog.php'?>">Blog</a>
       
       <?php  if(isset($_SESSION['id'])): ?>
       <div class="dropdown">
         <button class="btn btn-primary dropdown-toggle " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
         <i class="fas fa-user-alt"></i><?php echo $_SESSION['username'];?>
         </button>
         <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
          <?php if($_SESSION['admin']):?>
         <li><a class="dropdown-item " href="<?php echo BASE_URL.'/admin/dashboard.php'?>">Dashboard</a></li>
          <?php endif; ?>
            
         <li><a class="dropdown-item " href="<?php echo BASE_URL.'/logout.php'?>">Logout</a></li>
         
         </div>

      <?php else: ?>
        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL.'/register.php'?>">Sign Up</a>
       <a class="nav-link" href="<?php echo BASE_URL.'/login.php'?>">Login</a>
      <?php endif; ?>
         
         </ul>
       </div>
     </div>
   </div>
 </div>
</nav>