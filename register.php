<?php session_start(); ?>

<?php 
$pageTitle = "Rotten Potatoe: Register";
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
            # Set the character encoding of the database connection to UTF-8
			$db->set_charset('utf8');
			
            $type = $_POST['type'];
            $first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$password = hash('sha512',$_POST['password']);
			$username = $_POST['username'];
            $sql = "INSERT INTO user (type,first_name,last_name,email,password,username) 
                    VALUES('$type','$first_name','$last_name','$email','$password','$username')";
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
	<form action="register.php" method="post">		
		<label class="reglabel" for="type">Role: </label>
		<input type="radio" name="type" value="yes">User
		<input type="radio" name="type" value="no">Admin
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
	<?php require_once('includes/footer.php') ?>
