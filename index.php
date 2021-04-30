<?php include('path.php');
include(ROOT_PATH . "/app/database/db.php");
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/nav-color.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
   
  </head>
  <body>

    <title>StatKu</title>

<!--navbar-->
<?php include(ROOT_PATH."/app/includes/headerfirst.php"); ?>
<?php include(ROOT_PATH."/app/includes/message.php"); ?>
<!--akhir-navbar-->

<!--Jumbotron-->
<div class="bg-light p-5 rounded-lg ">
  <h1 class="display-4">Layanan Statistik</h1>
  <p class="lead">Professional & Reliable</p>
 
</div>
<!--Akhir Jumbotron-->

<!--Container-->

<div class="container">
  <h2>Layanan Kami</h2>
  <div class="row">

  
<div class="col-sm">
  <ul class="list-group">
    <li class="list-group-item">Uji Komparasi</li>
    <li class="list-group-item">Independent-samples t-test</li>
    <li class="list-group-item">Paired-samples t-test</li>
    <li class="list-group-item">One-way ANOVA</li>
    <li class="list-group-item">Repeated measures ANOVA</li>
    <li class="list-group-item">Two-way ANOVA</li>
    <li class="list-group-item">Mann-Whitney U test</li>
    <li class="list-group-item">Wilcoxon signed-rank test</li>
    <li class="list-group-item">Kruskal-Wallis H test</li>
    <li class="list-group-item">Friedman test</li>
    <li class="list-group-item">McNemar's test</li>
    <li class="list-group-item">Sign test</li>
    <li class="list-group-item">Test of two proportions</li>
  </ul>

  <ul class="list-group">
    <li class="list-group-item">One sample</li>
    <li class="list-group-item">One-sample t-test</li>
    <li class="list-group-item">Chi-square goodness-of-fit</li>
  </ul>
  <ul class="list-group">
  </ul>
  <ul class="list-group">
    <li class="list-group-item">Reliability</li>
    <li class="list-group-item">Cronbach's Alpha</li>
    <li class="list-group-item">Cohen's kappa</li>
    <li class="list-group-item">Kendall's W</li>
  </ul>
</div>
    
<div class="col-sm">
  <ul class="list-group">
    <li class="list-group-item">Prediksi</li>
    <li class="list-group-item">Linear regression</li>
    <li class="list-group-item">Multiple regression</li>
    <li class="list-group-item">Logistic regression</li>
  </ul>

  <ul class="list-group">
    <li class="list-group-item">Asosiasi</li>
    <li class="list-group-item">Pearson's correlation</li>
    <li class="list-group-item">Pearson's partial correlation</li>
    <li class="list-group-item">Spearman's correlation</li>
    <li class="list-group-item">Kendall's τb (tau-b)</li>
    <li class="list-group-item">Mantel-Haenszel test of trend</li>
    <li class="list-group-item">Chi-square test for association (2x2)</li>
    <li class="list-group-item">Chi-square test of independence (RxC)</li>
    <li class="list-group-item">Fisher's exact test (2x2) for independence</li>
    <li class="list-group-item">Relative risk (2 x 2)</li>
    <li class="list-group-item">Odds ratio (2 x 2)</li>
  </ul>

  <ul class="list-group">
    <li class="list-group-item">Data reduction</li>
    <li class="list-group-item">Principal components analysis</li>
  </ul>

  <ul class="list-group">
  </ul>

  <ul class="list-group">
  </ul>
</div>
    
<div class="col-sm">
  <ul class="list-group">
  <li class="list-group-item">GIS</li>
  <li class="list-group-item">Mapping</li>
  <li class="list-group-item">Spatial Cluster Analysis & Other Exploratory Analysis</li>
  </ul>
  <ul class="list-group">
  <li class="list-group-item">Others</li>
  <li class="list-group-item">Asumption Testing</li>
  <li class="list-group-item">Graps</li>
  <li class="list-group-item">Meta-Analysis</li>
  <li class="list-group-item">Research Metodologi Consultation</li>
  </ul>
</div>
    
    
  </div>
</div>
<!--Akhir-Container-->






<!-- footer -->
<?php include(ROOT_PATH."/app/includes/footer.php"); ?>
<!-- akhir-footer -->

















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->
 

  </body>
</html>