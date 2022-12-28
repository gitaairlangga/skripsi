<?php
session_start();

if (!isset($_GET['search'])) {
  header('Location: home');
}
else {
  $word = $_GET['searched'];
}
include 'inc/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
  <link rel="stylesheet" href="src/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&family=Poppins&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style2.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="dist/img/gitacorp.png">
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
  <link rel="stylesheet" href="src/css/font-awesome-4.6.3/css/font-awesome.min.css">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="src/css/materialize.min.css"  media="screen,projection"/>
  <!-- animate css -->
  <link rel="stylesheet" href="src/css/animate.css-master/animate.min.css">
  <!-- My own style -->
  <!-- Progress bar -->
  <link rel='stylesheet' href='src/css/nprogress.css'/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <title>MyPoll</title>
</head>
<body>
<style>
    /* navbar */
.navbar-brand {
    font-family: Poppins;
    font-size: 25px;
}

.nav-link{
    text-transform: uppercase;
    margin-right: 30px;
}

.nav-link:hover::after{
    content: '';
    display:block;
    border-bottom: 3px solid #A52A2A;
    width: 50%;
    margin: auto;
    padding-bottom: 5px;
    margin-bottom: -8px;
}

.tombol {
    text-transform: uppercase;
    border-radius: 40px;
}

.jumbotron {
    background-color:white;
    background-size: cover;
    height: 750px;
    text-align: center;

}

.jumbotron .display-4 {
    color: white;
    margin-top: 150px;
    font-weight: 200px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6);
    font-size: 62px;
}

.footer {
    padding: 10rem 0px;
}

.wrapper-col-1 h1{
    font-weight: 900;
    font-size: 2rem;
    margin-bottom: 1rem;
}

.wrapper-col-1 p{
    font-size: 14px;
    width: 90%;
}

.wrapper-col-2 {
    display: flex;
    flex-direction: column;
}

.wrapper-col-2 h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.wrapper-col-2 a {
    color: black;
    font-size: 16px;
    text-decoration: none;
    margin-bottom: 0.5rem;
}

.wrapper-col-3 {
    display: flex;
    flex-direction: column;
}

.wrapper-col-3 h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.wrapper-col-3 a {
    color: black;
    font-size: 16px;
    text-decoration: none;
    margin-bottom: 0.5rem;
}

.wrapper-col-4 {
    display: flex;
    flex-direction: column;
}

.wrapper-col-4 h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.wrapper-col-4 a {
    color: black;
    font-size: 16px;
    text-decoration: none;
    margin-bottom: 0.5rem;
}

.button-rounded {
    border-radius: 20px;
    background-color: #81C689;
    /* padding: 26px 25px 22px; */
    margin-top: 20px;
    box-shadow: 0 2px 6px 0 rgba(129, 198, 137, 0.6), 0 2px 10px 0 rgba(129, 198, 137, 0.42);
}
#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}
</style>
</body>
</html>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white; ">
  <div class="container">
    <a class="navbar-brand" href="http://localhost:8080/e_voting2/home.php">
    <img src="dist/img/gitacorp.png" width="30" height="30" alt="" loading="lazy">MyPoll
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="#">ABOUT</a>
        <a class="btn button-rounded" href="login.php">LOGIN</a>
      </div>      
    </div>
  </div>
</nav>

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
<nav class="navbar navbar-expand-lg navbar-light" style="background: #494551; margin-top: 0px; background-size:100px; ">
  <div class="container">
    <div class="wrapper-icon">
      <a   href="home.php" style="font-size:20px; color:white; padding: 25px 21px;"> Home</a>
      <label for="search.php" style="font-size:20px;"><b> > </b> 
      <a href="#" style="font-size:20px; color:white; padding: 25px 21px;">Search</a></label>
    </div>
  </div>
</nav>

    <?php

      //pages links
      $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      $perpage = isset($_GET['per-page']) && $_GET['per-page'] <= 16 ? (int)$_GET['per-page'] : 16;
      $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;
      $query = "SELECT SQL_CALC_FOUND_ROWS daftarvote_id, nama, keterangan FROM tb_daftarvote WHERE nama LIKE '%{$word}%' ORDER BY daftarvote_id DESC LIMIT {$start}, 16";
      $result = $koneksi->query($query);

      //pages
      $total = $koneksi->query("SELECT FOUND_ROWS() as total")->fetch_assoc()['total'];
      $pages = ceil($total / $perpage);

      if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
          $daftarvote_id = $row['daftarvote_id'];
          $nama = $row['nama'];
          $keterangan = $row['keterangan'];
          ?>
          
        <div class="wrapper-col-1">
          <ul id="myUL">
            <!-- <li align="left"><a href="product.php?id=<?= $daftarvote_id; ?>"><span class="card-title blue-text "><?= $nama; ?></span> -->
            <li align="left"><a href="#"><span class="card-title blue-text "><?= $nama; ?></span>
          <br> <label for="test"><?= $keterangan; ?></label></a></li>
          </ul>
        </div>
      <?php }
      } 
      else {
        echo "<div class='container center-align'><h4 class='black-text'>Item not found</h4></div>";
      }?>
</div>
<!-- <div class="col">
   <div class="wrapper-col-2">
      <nav>
        <div class="nav-wrapper">
          <div class="col">
            <a href="search.php" class="breadcrumb">Search</a>
          </div>
        </div>
      </nav>
    </div>
</div> -->


<div class="container">
  <section class="section-footer">
      <br>
      <footer class="main-footer text-center">
      &copy; 2022. All rights reserved. MyPoll
      </footer>
      <br>
      <br>
    
  </section>
</div>
<script src="src/js/jquery-2.1.4.js"></script>
<!-- Typed Js -->
<script type="text/javascript" src="src/js/typed.js"></script>
<!-- Progress bar -->
<script src='src/js/nprogress.js'></script>
<!-- wow js-->
<script src="src/js/wow.min.js"></script>
<!-- Materialize Js -->
<script src="src/js/materialize.min.js"></script>
