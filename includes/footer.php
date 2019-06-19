<footer>
<p>CTEC 227 - Final </p>

<p>
<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == "no"){
    $isAdmin = "(Admin)";
    $user_type = '|&nbsp;&nbsp;<a href="admin.php" title="Administrator">Admin</a>';
} else {
    $user_type = "";
    $isAdmin = "(User)";
}

if (isset($_SESSION['username'])) {
    echo "<strong>";
    echo '<div class="userheader"><i class="fa fa-user-circle-o fa-5 icon"></i>&nbsp;' . $_SESSION['username'] . " $isAdmin</div>";
    // echo '<div class="userheader"><i class="fa fa-user-circle-o fa-5 icon"></i>&nbsp;<a href="profile.php?id=' . $_SESSION['id'] . '" class="profilelink" title="Profile">' . $_SESSION['username'] . "</a> $isAdmin</div>";
    echo "</strong>";
}
?>
</p>
</footer>
</body>
</html>