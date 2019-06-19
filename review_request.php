<?php session_start();?>

<?php
$pageTitle = "Rotten Potatoe: Review-Request";
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

    $movie_id = $_POST['id'];
    $title = $_POST['reviewtitletext'];
    $content = $_POST['reviewtext'];

     $sql = "INSERT INTO posts (movie_id,title,content)
                        VALUES('$movie_id','$title','$content')";

     $result = $db->query($sql);
}
else {
    $movie_id = $_GET['id'];



    // $result = $db->query($sql);
    // if (!$result) {
    //     echo "<h3>You got an error</h3>";
    // } 
    // else {
    //     $movie_id = $_GET['id'];
        // echo "<h3>Your review is complete!</h3>";
        
    

}
    
?>
<div class="container">
    <form action="review_request.php" method="post">
    <?php
    echo '<input type="hidden" id="movies" name="id" value="'.$movie_id.'">';
    ?>
    
	<fieldset id="reviewtitletext" class="border p-2">
    <legend class="w-auto">Review Title*</legend> 
        <input type="text" name="reviewtitletext" size="25" maxlength="25" required>
	</fieldset><br />

	<fieldset id="reviewtext" class="border p-2">
    <legend class="w-auto">Review*</legend>
	  <textarea cols="50" rows="4" name="reviewtext" maxlength="100" required></textarea>
 		</fieldset><br />

	<input class="button1" type="submit" value="Submit">
	</form>  

    <hr>
    
    <!-- <div class="container">
    <form>
  <div class="form-group">
    <?php echo '<input type="hidden" id="movies" name="id" value="'.$movie_id.'">';?>
    <label for="reviewTitle">Review Title</label>
    <input type="text" class="form-control" id="reviewTitle" size="25" maxlength="25" required>
  </div>
  <div class="form-group">
    <label for="reviewReview">Review*</label>
   <textarea cols="50" rows="4" name="reviewReview" maxlength="100" required></textarea> 
    <input type="text" class="form-control" id="reviewReview" row="4" maxlength="100" required>
  </div>
  <input class="button1" type="submit" value="Submit"> -->
<!-- </form> -->

<?php
// $db = db_connection();
// // $db->set_charset('utf8');
// $sql = "SELECT * FROM posts";

// $result = $db->query($sql);
   
// while ($row = $result->fetch_assoc()) {

//     $id = $row['id'];
//     $title = $row['title'];
//     $content = $row['content'];
//     $user = $row['user_id'];
//     $date= $row['the_date'];

// }

// echo "<table>";

// echo "</table>";

?>




</div>


<?php require_once 'includes/footer.php'?>