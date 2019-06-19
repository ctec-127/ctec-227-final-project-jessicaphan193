<?php session_start(); ?>

<?php 
$pageTitle = "Rotten Potatoe: Admin";
require_once("includes/header.php");
?>

<!-- Alert box if not admin -->
<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == "no"){
?>

<h2>Welcome Back, <?php echo $_SESSION['firstname'] ?></h2>
<br>
<h3>What do you want to do today?</h3>
<br>
<h3>
<ul>
  <li><a href="addmovie.php" class="addmovie" title="addmovie">Add movie</a></li>
  <li><a href="deletemovie.php" class="deletemovie" title="deletemovie">Delete movie</a></li>
</ul> 
</h3> 


<h4>
<br><br>
<p>Maecenas hendrerit feugiat nulla eget rutrum. Mauris ac ex eget mi fringilla volutpat. Suspendisse hendrerit malesuada eros, eget scelerisque nulla vehicula eget. Nam condimentum orci sit amet tempus iaculis. Aenean nec fermentum justo, quis consectetur tortor. Integer fringilla, purus at blandit accumsan, purus felis tempor nibh, nec mollis leo turpis et ex. Maecenas vel accumsan tortor. Curabitur elementum aliquam nunc aliquet fermentum.</p>
<br><br>
<p>Maecenas hendrerit feugiat nulla eget rutrum. Mauris ac ex eget mi fringilla volutpat. Suspendisse hendrerit malesuada eros, eget scelerisque nulla vehicula eget. Nam condimentum orci sit amet tempus iaculis. Aenean nec fermentum justo, quis consectetur tortor. Integer fringilla, purus at blandit accumsan, purus felis tempor nibh, nec mollis leo turpis et ex. Maecenas vel accumsan tortor. Curabitur elementum aliquam nunc aliquet fermentum.</p>
<br><br>
<p>Maecenas hendrerit feugiat nulla eget rutrum. Mauris ac ex eget mi fringilla volutpat. Suspendisse hendrerit malesuada eros, eget scelerisque nulla vehicula eget. Nam condimentum orci sit amet tempus iaculis. Aenean nec fermentum justo, quis consectetur tortor. Integer fringilla, purus at blandit accumsan, purus felis tempor nibh, nec mollis leo turpis et ex. Maecenas vel accumsan tortor. Curabitur elementum aliquam nunc aliquet fermentum.</p>
</h4>



<?php
} else {
  echo '<script language="javascript">';
  echo 'alert("You are not authorized to view this page.")';
  echo '</script>';
  echo '<div class="jumbotron">';
  echo '<h1><a href="home.php" class="home" title="home">Click here</a> to go back Home</h1>';
  echo '<img src="img/rottenpotato.png" alt="icon" height="180px" width="150px" />';
  echo '</div>';
}
 ?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>   
</body>
</html>

<?php require_once('includes/footer.php') ?>