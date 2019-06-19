<?php session_start();?>
<!-- Survey.php for Javascript final -->

<?php
$pageTitle = "Rotten Potatoe: Sruvey";
require_once "includes/header.php";
?>

<form action="" method="post" onsubmit="return verify()">
    <h3><b>Welcome to the Survey Page</b></h3>
    <h4>Feel free to take the survey down below!</h4>

  <fieldset id="q1" class="border p-2">
    <legend class="w-auto">Question 1</legend>
    <p>How often do you watch Netflix </p>   
    <input type="radio" name="not-often" id="radio-not-oft" value="not-of"><span id="not-oft">Not often</span>
    <input type="radio" name="often" id="radio-oft" value="often"><span id="oft">Often</span>
    <input type="radio" name="ex-often" id="radio-ex-oft" value="ex-often"><span id="ex-oft">Extremly often</span>

  </fieldset><br />

  <fieldset id="q2" class="border p-2">
    <legend class="w-auto">Question 2</legend>
    <p>Out of all the movies you have ever seen, what are your most favorites?</p>
    <textarea cols="50" rows="4" name="favorite" id="favorite" maxlength="100"></textarea>
  </fieldset><br />

  <fieldset id="q3" class="border p-2">
    <legend class="w-auto">Question 3</legend>
    <p>Who is your most favorite movie celebrity living today</p>
	  <input type="text" name="celebrity" id="celebrity" size="45" maxlength="25">
  </fieldset><br />

  <fieldset id="q4" class="border p-2">
    <legend class="w-auto">Question 4</legend>
    <p>What makes you see a movie</p>
	  <textarea cols="50" rows="4" name="see" id="see" maxlength="100"></textarea>
  </fieldset><br />

  <fieldset id="q5" class="border p-2">
    <legend class="w-auto">Question 5</legend>
    <p>Do you think re-makes of old films are a good idea?</p>
      <input type="radio" name="yes" id="radio-yes" value="yes"><span id="radio-yess">Yes</span>
      <input type="radio" name="no" id="radio-no" value="no"><span id="radio-noo">No</span>
    </fieldset><br />

  <input class="button1" type="submit" value="Submit">
</form>

<!-- ---------------------------------------------------------------------------------------------------  -->


<script>
    var radio_not_oft = document.getElementById("radio-not-oft");
    var not_oft = document.getElementById("not-oft");
    var radio_oft = document.getElementById("radio-oft");
    var oft = document.getElementById("oft");
    var radio_ex_oft = document.getElementById("radio-ex-oft");
    var ex_oft = document.getElementById("ex-oft");
    
    var favorite = document.getElementById("favorite");
    var celebrity = document.getElementById("celebrity");
    var see = document.getElementById("see");

    var radio_yes = document.getElementById("radio-yes");
    var radio_yess = document.getElementById("radio-yess");
    var radio_no = document.getElementById("radio-no");
    var radio_noo = document.getElementById("radio-noo");
    var valid = true;

    function verify() {
    if (!radio_not_oft.checked && !radio_oft.checked && !radio_ex_oft.checked){
        not_oft.className="radio-error";
        oft.className="radio-error";
        ex_oft.className="radio-error";
        valid = false;
    }

    if (favorite.value == "") {
        favorite.className="form-error";
        valid = false;
    }

    if (celebrity.value == "") {
          celebrity.className="form-error";
          valid = false;
    }

    if (see.value == "") {
          see.className="form-error";
          valid = false;
    }

    if (!radio_yes.checked && !radio_no.checked){
        radio_yess.className="radio-error";
        radio_noo.className="radio-error";
        valid = false;
    }

    return valid;
    }

</script>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php require_once 'includes/footer.php'?>