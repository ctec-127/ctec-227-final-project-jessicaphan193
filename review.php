<?php session_start(); ?>

<?php 
$pageTitle = "Rotten Potatoe: Review";
require_once("includes/header.php");
require_once("includes/nav.php");
?>


<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
		# Create a new connection to the database
		$db = new mysqli('localhost','root','','phpfinal');
		# If there was an error connecting to the database
		if ($db->connect_error) {
				$error = $db->connect_error;
				echo $error;
		}	

		// $movie=$_POST["movies"];
		// echo "<br>"; 
		// echo $movie;


	
?>


<!-- ------------------------------------------ --------------- -->



<form action="review.php" method="post"> 
<fieldset id="selectmenu">
	<legend>Choose a movie</legend>
	  <select name="movies">
		<option value="sample">Select a movie</option>
		<option value="it">It</option>
		<option value="pikachu">Detective Pikachu</option>
		<option value="spirited">Spirited Away</option>
        <option value="escape">Escape Room</option>
		<option value="hsm">High School Musical</option>
	  </select>
	</fieldset>
    <input type="submit" value="Submit">
</form>


<!-- ------------------------------------------ --------------- -->


<?php

$movie=$_POST["movies"];
		echo "<br>"; 
		echo $movie;
	}
?>

<!-- ------------------------------------------ --------------- -->













<?php require_once('includes/footer.php') ?>