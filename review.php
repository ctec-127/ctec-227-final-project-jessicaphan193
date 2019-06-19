<?php session_start();?>

<?php
$pageTitle = "Rotten Potatoe: Review";
require_once "includes/header.php";
?>

<div class="container">
<div class="jumbotron">
  <h2 class="display-5 text-center">Choose a Movie to Review</h2>
 
</div>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    # Create a new connection to the database
    $db = new mysqli('localhost', 'root', '', 'phpfinal');
    # If there was an error connecting to the database
    if ($db->connect_error) {
        $error = $db->connect_error;
        echo $error;
    }
    # Set the character encoding of the database connection to UTF-8
    $db->set_charset('utf8');

    $sql = "SELECT * FROM movies ORDER BY title ASC";

    $result = $db->query($sql);
   
    while ($row = $result->fetch_assoc()) {

        $id = $row['id'];
        $title = $row['title'];
        $year = $row['year'];
        $runtime = $row['runtime'];
        $description = $row['description'];
        $img = $row['img_url'];


    
        echo '<div class="container" id="movie_'.$id.'">';
        echo '<a href="review_request.php?id='.$id.'">';
        echo '<div class="post rounded">';
        echo "<h1>$title</h1>";
        echo "<span>Runtime: $runtime mins</span>";
        echo "<p>Released date: $year</p>";
        echo '<div class="row">';
        echo '<div class="img col-6 d-block rounded">';
        echo "<img src='img/".$row['img_url']."' height='210' width='160'>";
        echo '</div>';
        echo '<div class="desc col-6 d-block rounded">';
        echo "<p class='desc'>$description</p>";
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</a></div>';
    }
}
?>

</div>

<?php require_once 'includes/footer.php'?>