<?php session_start();?>

<?php
$pageTitle = "Rotten Potatoe: Delete-Request";
require_once "includes/header.php";
?>

<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == "no"){
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    print_r($_GET); 
    # Create a new connection to the database
    $db = new mysqli('localhost', 'root', '', 'phpfinal');
    # If there was an error connecting to the database
    if ($db->connect_error) {
        $error = $db->connect_error;
        echo $error;
    }
    # Set the character encoding of the database connection to UTF-8
    $db->set_charset('utf8');

    $id = $_GET['id'];

    $sql="DELETE FROM movies WHERE id = '".$id."'";
    $result = $db->query($sql);
}
?>


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

<?php require_once 'includes/footer.php'?>
