<?php session_start();?>

<?php
$pageTitle = "Rotten Potatoe: Add Movie";
require_once "includes/header.php";
?>

<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == "no"){
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # Create a new connection to the database
    $db = new mysqli('localhost', 'root', '', 'phpfinal');
    # If there was an error connecting to the database
    if ($db->connect_error) {
        $error = $db->connect_error;
        echo $error;
    }

    $db->set_charset('utf8');

    $title = $_POST['title'];
    $year = $_POST['year'];
    $runtime = $_POST['runtime'];
    $description = $_POST['description'];
    // $img = $_POST['img_url'];

    

    $sql = "INSERT INTO movies (title,year,runtime,description)
                         VALUES('$title','$year','$runtime','$description')";
    $result = $db->query($sql);
    if (!$result) {
        echo "<h3>There was a problem adding the movie</h3>";
    } else {
        echo "<h3>Ready to be reviewed!</h3>";
    }
}
?>


	<h2>Add a Movie!</h2>

    <form action="addmovie.php" method="post" onsubmit="return verify()">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTitle">Movie Title</label>
      <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Movie title">
    </div>
    <div class="form-group col-md-6">
      <label for="inputRuntime">Runtime</label>
      <input type="text" class="form-control" id="inputRuntime" name="runtime" placeholder="Minutes">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDescription">Description</label>
      <input type="text" class="form-control" id="inputDescription" name="description">
    </div>
    <div class="form-group col-md-4">
      <label for="inputDate">Released Date</label>
      <input type="date" class="form-control" id="inputDate" placeholder="date" name="year">
    </div>
    <div class="form-group col-md-2">
      <label for="inputImgUrl">Img_url</label>
      <input type="text" class="form-control" id="inputImgUrl" name="img_url" disabled>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
<!-- ------------------------------------------------------------------ -->

	<script>
    var radio_yes = document.getElementById("radio-yes");
    var radio_no = document.getElementById("radio-no");
    var radio_user = document.getElementById("radio-user");
    var radio_admin = document.getElementById("radio-admin");


    var username = document.getElementById("username");
	  var first_name = document.getElementById("first_name");
  	var last_name = document.getElementById("last_name");
	  var password = document.getElementById("password");
  	var email = document.getElementById("email");
    var valid = true;

    function verify() {
    if (!radio_yes.checked && !radio_no.checked){
        radio_user.className="radio-error";
        radio_admin.className="radio-error";
        valid = false;
    }


    if (username.value == "") {
        username.className="form-error";
        valid = false;
    }
	
	if (first_name.value == "") {
        first_name.className="form-error";
        valid = false;
	}
	
	if (last_name.value == "") {
        last_name.className="form-error";
        valid = false;
	}
	
	if (password.value == "") {
        password.className="form-error";
        valid = false;
	}
	
	if (email.value == "") {
        email.className="form-error";
        valid = false;
    }

    return valid;
    }

	</script>


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
