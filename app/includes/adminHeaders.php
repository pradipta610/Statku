<nav class="navbar navbar-expand-lg navbar-dark bg-dark navadmin">
 
      <div class="container-fluid padding-lr">
        <a class="navbar-brand" href="<?php echo BASE_URL . '/blog.php'?>"><img src="<?php echo BASE_URL.'/assets/img/Logo.png'?>" alt=""  class="d-inline-block align-top">StatKu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['username'])):?>

            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-alt"></i><?php echo $_SESSION['username']; ?>
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item " href="<?php echo BASE_URL . '/logout.php';?>">Logout</a></li>
              
              </div>
              </ul>
            </div>

          <?php endif;?>
          </div>
        </div>
      </div>
    </nav>