<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&family=Poppins&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style2.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="dist/img/gitacorp.png">
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
  <link rel="stylesheet" href="src/css/font-awesome-4.6.3/css/font-awesome.min.css">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="src/css/materialize.min.css"  media="screen,projection"/>
  <!-- animate css -->
  <link rel="stylesheet" href="src/css/animate.css-master/animate.min.css">
  <!-- My own style -->
  <link rel="stylesheet" href="src/css/style.css">
  <!-- Progress bar -->
  <link rel='stylesheet' href='src/css/nprogress.css'/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <title>MyPoll</title>
</head>
<body>
  <style>
    /* navbar */
.navbar-brand {
    font-family: "Poppins";
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
    font-family: "Ubuntu";
    background-image: url(dist/img/bghelpcenter4.jpeg);
    background-size: cover;
    height: 550px;
    text-align: center;
    font-size: 20px;
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
</style>
</body>
</html>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
  <div class="container">
    <a class="navbar-brand" href="http://localhost:8080/skripsi/home.php">
    <img src="dist/img/gitacorp.png" width="30" height="30" alt="" loading="lazy">MyPoll
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" href="login.php">LOGIN <span class="sr-only">(current)</span></a>
        <a class="btn button-rounded" href="add_pengguna.php">DAFTAR</a>
      </div>      
    </div>
  </div>
</nav>
<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h3>Panduan</h3>
        <br>
        <p>Di MyPoll, kami menyusun daftar artikel yang bermanfaat tentang topik yang mungkin tidak mudah ditemukan. 
          Lihat daftar di bawah ini untuk mengetahui fitur-fitur lanjutan untuk membantu Anda.</p>
        <div class="text-justify">
            <h4>Daftar Panduan</h4>
            <u><p><a href="http://localhost:8080/skripsi/guidesdeadline.php" style="color:black">1. Bagaimana cara menetapkan tenggat waktu polling Anda</a></p></u>
            <u><p><a href="http://localhost:8080/skripsi/guidesimage.php" style="color:black">2. Bagaimana cara menambahkan gambar ke polling Anda</a></p></u>
            <u><p><a href="" style="color:black">3. Bagaimana cara menghapus polling</a></p></u>
        </div>
            
    </div>
</div>
 <!-- end jumbotron -->
 <hr>
<div class="container">
  <section class="section-footer">
    <footer>
      <div class="row">
        <div class="col">
          <div class="wrapper-col-1">
            <h1><img src="dist/img/gitacorp.png" width="30" height="30" alt=""> MyPoll</h1>
            <p>Memudahkan pembuatan polling instan dan real-time secara gratis</p>
            <div class="wrapper-icon">
              <a href="https://www.instagram.com/mypollid/" class="fa fa-instagram" style="font-size:30px; color:red;"></a>
              <!--<a href="https://twitter.com/gitaairlangga/" class="fa fa-twitter" style="font-size:30px;"></a> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="wrapper-col-2">
            <h1>Support</h1>
            <a href="http://localhost:8080/skripsi/helpcenter.php">Help Center</a>
            <a href="">Guides</a>
            <a href="http://localhost:8080/skripsi/faq.php">FAQ</a>
          </div>
        </div>
        <div class="col">
          <div class="wrapper-col-3">
              <h1>Information</h1>
              <a href="http://localhost:8080/skripsi/about.php">About</a>
              <a href="http://localhost:8080/skripsi/contact.php">Contact</a>          
          </div>
        </div>
        <div class="col">
          <div class="wrapper-col-4">
              <h1>Legal</h1>
              <a href="http://localhost:8080/skripsi/terms.php">Terms</a>          
          </div>
        </div>
        </div>
      </div>    
      <hr>
      <footer class="main-footer text-center">
      &copy; 2022. All rights reserved. MyPoll
      </footer>
      <br>
      <br>
    </footer>
  </section>
</div>