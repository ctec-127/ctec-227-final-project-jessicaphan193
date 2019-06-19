<?php session_start(); ?>

<?php 
$pageTitle = "Rotten Potatoe: Out";
$_SESSION['loggedin'] = Null;
session_unset();
session_destroy();
require_once("includes/header.php");

require_once("includes/nav.php");
?>

<?php
  echo '<div class="jumbotron">'; ?>
  <h2>You have been logged out from RottenPotatoe</h2>
  <br><br>
  <?php
  echo '<h1><a href="home.php" class="home" title="home">Click here</a> to go back Home</h1>';
  echo '<img src="img/rottenpotato.png" alt="icon" height="180px" width="150px" />';
  echo '</div>';
?>
<?php require_once('includes/footer.php') ?>