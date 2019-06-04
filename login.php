<?php session_start(); ?>

<?php 
$pageTitle = "Rotten Potatoe: Login";
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
	 
     $username = $_POST['username'];
	 $password = hash('sha512',$_POST['password']);
	 
	 $sql = "SELECT * FROM users WHERE username='" . $_POST["username"] . "'" . " AND password=" . "'" . $password . "' LIMIT 1";
    //  echo $sql;
     $result = $db->query($sql);
     if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = 1;
		$_SESSION['username'] = $username;

		// $_SESSION['username'] = $row['username'];
        $row = $result->fetch_assoc();
        $_SESSION['type'] = $row['type'];
		$_SESSION['firstname'] = $row['first_name'];
		$_SESSION['lastname'] = $row['last_name'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['loggedin'] = 1;
		$_SESSION['username'] = $row['username'];
        header('location: home.php');
        
     } else {
        //  echo '<p>Could not log you in. \\nPlease try again or go away</p>';
        $message = "Could not log you in. \\nPlease try again or go away.";
        echo "<script type='text/javascript'>alert('$message');</script>";
     }
     
    }
    ?>


<h2>Login</h2>

<form action="login.php" id="login" method="post">

	<label class="reglabel" for="username">Username:</label>
	<input class="reginput" type="username" id="username" name="username" size="20" maxlength="20">
	<br>

	<label class="reglabel" for="password">Password:</label>
	<input class="reginput" type="password" id="password" name="password" size="20" maxlength="20">
	<br>

	<input class="button1" type="submit" value="Login">
</form>
<?php ?>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
        // logger function
        // write stuff out to the console
        function logger(message) {
            console.log("Logger: ", message);
        }

        $(document).ready(function () {
            // bind submit button to an event for the form
            $('#login').on('submit',function (evt) {

                var flag = true;

                // check first name field
                var username = $('#username').val();
                logger('username = ' + username);
                if (username === '') {
                    $('#username').css('border', '2px solid red');
                    flag = false; //false to prevent 
                }

                // last name
                // check first name field
                var password = $('#password').val();
                logger('password = ' + password);
                if (last === '') {
                    $('#password').css('border', '2px solid red');
                    flag = false;
                }

                

                // this will not submit the form
                // note the parameter in the .ready function
                // use this to stop the form in it's tracks. That means don't submit it.
                if (!flag) {
                    evt.preventDefault();
                }

            });

            // when you leave the first field do something
            $('#first:text').blur(function () {
                logger('you moved from the first field');
            });

            $('#state').change(function () {
                logger('State: Something changed');
            });

        });
    </script>




<?php require_once('includes/footer.php') ?>