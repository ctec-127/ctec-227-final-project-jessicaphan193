<?php session_start(); ?>

<?php 
$pageTitle = "Rotten Potatoe: Out";
require_once("includes/header.php");
require_once("includes/nav.php");
?>
<!-- ------------------------------------------- -->

<?php session_destroy(); ?>


<?php require_once('includes/nav.php'); ?>

<div>You have been logged out from RottenPotatoe</div>
<?php require_once('includes/footer.php') ?>