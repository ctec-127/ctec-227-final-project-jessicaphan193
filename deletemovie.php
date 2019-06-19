<?php session_start();?>

<?php
$pageTitle = "Rotten Potatoe: Delete Movie";
require_once "includes/header.php";
?>

<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == "no"){
?>


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
    //  echo $sql;
    $result = $db->query($sql);
   
    while ($row = $result->fetch_assoc()) {

        $id = $row['id'];
        $title = $row['title'];
        $year = $row['year'];
        $runtime = $row['runtime'];
        $description = $row['description'];
        $img = $row['img_url'];
    
        echo '<div class="container" id="movie_'.$id.'" onclick="myDelete('.$id.')">';
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
        echo '</div>';
    }
}
?>

<!-- -------------------------------------------------------------------------------------- -->
 
<script>
        function myDelete(id) {
            
            var req = null;
            //figure out what kind of support we have for the XMLHttpRequest object
            if (window.XMLHttpRequest) {
                //modern browsers
                req = new XMLHttpRequest();
            } else {
                //IE
                req = new ActiveXObject("Microsoft.XMLHTTP");
            };
            //readystatechange listener
            req.onreadystatechange = function () {
                if (req.readyState === 4 && req.status === 200) {
                    //inject the returned HTML into the DOM
                    document.getElementById('movie_'+ id).innerHTML = '';
                };
            };
            //open the XMLHttpRequest connection
            req.open("GET", "delete_request.php", true);
            req.send();
        };
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
