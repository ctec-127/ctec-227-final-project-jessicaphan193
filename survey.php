<?php session_start();?>

<?php
$pageTitle = "Rotten Potatoe: Sruvey";
require_once "includes/header.php";
require_once "includes/nav.php";
?>

<!DOCTYPE html>
<html>
<head></head>
<body>

<!-- <div clasas="container"> -->

<form action="" method="post">
    <p><b>Welcome to the Survey Page</b></p>

    <p>Feel free to take the survey down below!</p>

    <!-- <label class="surveylabel" for="type">1.</label> How often do you watch Netflix
		<input type="radio" name="type" value="ex-often">Extremely often
    <input type="radio" name="type" value="often">Often
    <input type="radio" name="type" value="no-often">Not at all
		<br>
		<label class="surveylabel" for="username">Username:</label>
		<input class="surveyinput" type="text" id="username" name="username" size="20" maxlength="20">
		<br>
		<label class="surveylabel" for="first_name">First Name:</label>
		<input class="surveyinput" type="text" id="first_name" name="first_name" size="20" maxlength="20">
		<br>
		<label class="surveylabel" for="last_name">Last Name:</label>
		<input class="surveyinput" type="text" id="last_name" name="last_name" size="20" maxlength="20">
		<br>
		<label class="surveylabel" for="password">Password:</label>
		<input class="surveyinput" type="password" id="password" name="password" size="20" maxlength="20">
		<br>
		<label class="surveylabel" for="email">Email:</label>
		<input class="surveyinput" type="email" id="email" name="email" size="20" maxlength="20">
		<br>
    <input class="button1" type="submit" value="Register"> -->



  <fieldset id="q1" class="border p-2">
    <legend class="w-auto">Question 1</legend>
    <p>How often do you watch Netflix </p>
      <label for="no">Not often</label>
      <input type="radio" name="netflix" id="no" value="no"/>
      <label for="often">Often</label>
      <input type="radio" name="netflix" id="often" value="often"/>
	    <label for="ex-often">Extremly Often</label>
	    <input type="radio" name="netflix" id="exoften" value="exoften"/>
  </fieldset><br />

  <fieldset id="q2" class="border p-2">
    <legend class="w-auto">Question 2</legend>
    <p>Out of all the movies you have ever seen, what are your most favorites?</p>
		<!-- <input class="favtext" type="text" id="favorite" name="favorite" size="50" maxlength="100"> -->
    <textarea cols="50" rows="4" name="favorite" maxlength="100"></textarea>
  </fieldset><br />

  <fieldset id="q3" class="border p-2">
    <legend class="w-auto">Question 3</legend>
    <p>Who is your most favorite movie celebrity living today</p>
	  <input type="text" id="celebrity" name="celebrity" size="45" maxlength="25"> 
    <!-- <textarea cols="50" rows="2" name="celebrity" maxlength="25"></textarea> -->
  </fieldset><br />

  <fieldset id="q4" class="border p-2">
    <legend class="w-auto">Question 4</legend>
    <p>What makes you see a movie</p>
	  <textarea cols="50" rows="4" name="favorite" maxlength="100"></textarea>
    <!-- <textarea cols="50" rows="2" name="celebrity" maxlength="25"></textarea> -->
  </fieldset><br />

  <fieldset id="q5" class="border p-2">
    <legend class="w-auto">Question 5</legend>
    <p>Do you think re-makes of old films are a good idea </p>
      <label for="yes">Yes</label>
      <input type="radio" name="yes" id="yes" value="yes"/>
      <label for="no">No</label>
      <input type="radio" name="no" id="no" value="no"/>
	    <label for="depend">It depends</label>
	    <input type="radio" name="depend" id="depend" value="depend"/>
  </fieldset><br />


</form>




<!-- </div> -->






<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php require_once 'includes/footer.php'?>