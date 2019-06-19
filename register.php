<?php session_start();?>
<!-- Part of Javascript final -->

<?php
$pageTitle = "Rotten Potatoe: Register";
require_once "includes/header.php";
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

    $role = $_POST['role'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = hash('sha512', $_POST['password']);
    $username = $_POST['username'];

    $sql = "INSERT INTO users (role,first_name,last_name,email,password,username)
                    VALUES('$role','$first_name','$last_name','$email','$password','$username')";
    // echo $sql;
    $result = $db->query($sql);
    if (!$result) {
        echo "<h3>There was a problem registering your account</h3>";
    } else {
        echo "<h3>You are now ready to go!</h3>";
    }
}
?>

	<h2>Register</h2>
	<form action="register.php" method="post" onsubmit="return verify()">
		<label class="reglabel" for="role">Role: </label>
		<input type="radio" name="role" id="radio-yes" value="yes"><span id="radio-user">User</span>
		<input type="radio" name="role" id="radio-no" value="no"><span id="radio-admin">Admin</span>
		<br>
		<label class="reglabel" for="username">Username:</label>
		<input class="reginput" type="text" id="username" name="username" size="20" maxlength="20">
		<br>
		<label class="reglabel" for="first_name">First Name:</label>
		<input class="reginput" type="text" id="first_name" name="first_name" size="20" maxlength="20">
		<br>
		<label class="reglabel" for="last_name">Last Name:</label>
		<input class="reginput" type="text" id="last_name" name="last_name" size="20" maxlength="20">
		<br>
		<label class="reglabel" for="password">Password:</label>
		<input class="reginput" type="password" id="password" name="password" size="20" maxlength="20">
		<br>
		<label class="reglabel" for="email">Email:</label>
		<input class="reginput" type="email" id="email" name="email" size="20" maxlength="20">
		<br>
		<input class="button1" type="submit" value="Register">
	</form>

<!-- ------------------------------------------------------------------------------------------------------- -->

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




	<?php require_once 'includes/footer.php'?>
