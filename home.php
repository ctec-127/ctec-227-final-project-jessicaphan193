<?php session_start(); ?>

<?php 
$pageTitle = "Rotten Potatoe: Home";
require_once("includes/header.php");
?>

<div class="container">
<div class="jumbotron">
  <h1 class="display-5 text-center">Editor's Choice:</h1>
</div>

<div class="row justify-content-md-center carousel-holder">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href='review.php?id=3'><img src="img/pikachu.jpg" class="d-block" alt="pikachu"></a>
    </div>
    <div class="carousel-item">
      <a href='review.php?id='><img src="img/endgame.jpg" class="d-block" alt="endgame"></a>
    </div>
    <div class="carousel-item">
      <a href='review.php?id='><img src="img/ts4.jpg" class="d-block" alt="toystory4"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<p><b>Maecenas hendrerit feugiat nulla eget rutrum. Mauris ac ex eget mi fringilla volutpat. Suspendisse hendrerit malesuada eros, eget scelerisque nulla vehicula eget. Nam condimentum orci sit amet tempus iaculis. Aenean nec fermentum justo, quis consectetur tortor. Integer fringilla, purus at blandit accumsan, purus felis tempor nibh, nec mollis leo turpis et ex. Maecenas vel accumsan tortor. Curabitur elementum aliquam nunc aliquet fermentum.</b></p>
<br><br>
<p><b>Maecenas hendrerit feugiat nulla eget rutrum. Mauris ac ex eget mi fringilla volutpat. Suspendisse hendrerit malesuada eros, eget scelerisque nulla vehicula eget. Nam condimentum orci sit amet tempus iaculis. Aenean nec fermentum justo, quis consectetur tortor. Integer fringilla, purus at blandit accumsan, purus felis tempor nibh, nec mollis leo turpis et ex. Maecenas vel accumsan tortor. Curabitur elementum aliquam nunc aliquet fermentum.</b></p>
<br><br>
<p><b>Maecenas hendrerit feugiat nulla eget rutrum. Mauris ac ex eget mi fringilla volutpat. Suspendisse hendrerit malesuada eros, eget scelerisque nulla vehicula eget. Nam condimentum orci sit amet tempus iaculis. Aenean nec fermentum justo, quis consectetur tortor. Integer fringilla, purus at blandit accumsan, purus felis tempor nibh, nec mollis leo turpis et ex. Maecenas vel accumsan tortor. Curabitur elementum aliquam nunc aliquet fermentum.</b></p>
</div>
</div>
</div>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>   
</body>
</html>

<?php require_once('includes/footer.php') ?>