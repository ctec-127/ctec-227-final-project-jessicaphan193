<?php session_start();?>
<!-- Part of Javascript final -->

<?php
$pageTitle = "Rotten Potatoe: Login";
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
    # Set the character encoding of the database connection to UTF-8
    $db->set_charset('utf8');

    $username = $_POST['username'];
    $password = hash('sha512', $_POST['password']);

    $sql = "SELECT * FROM users WHERE username='" . $_POST["username"] . "'" . " AND password=" . "'" . $password . "' LIMIT 1";
    $result = $db->query($sql);
    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = 1;
        $_SESSION['username'] = $username;

        $row = $result->fetch_assoc();
        $_SESSION['role'] = $row['role'];
        $_SESSION['firstname'] = $row['first_name'];
        $_SESSION['lastname'] = $row['last_name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['loggedin'] = 1;
        $_SESSION['username'] = $row['username'];
      
        header('location: home.php');

    } else {
        $message = "Could not log you in. \\nPlease try again or go away.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

}
?>


<h2>Login</h2>

<form action="login.php" id="login" method="post" onsubmit="return verify()">

	<label class="reglabel" for="username">Username:</label>
	<input class="reginput" type="username" id="username" name="username" size="20" maxlength="20">
	<br>

	<label class="reglabel" for="password">Password:</label>
	<input class="reginput" type="password" id="password" name="password" size="20" maxlength="20">
	<br>

	<input class="button1" type="submit" value="Login">
</form>

<!-- ------------------------------------------------------------------------------------------------- -->

<script>
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var valid = true;

    function verify() {
    if (username.value == "") {
        username.className="form-error";
        valid = false;
    }

    if (password.value == "") {
        password.className="form-error";
        valid = false;
    }
    return valid;
    }

</script>


<?php require_once 'includes/footer.php'?>