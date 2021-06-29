<?php
$mysqli = new mysqli("localhost", "root", "", "bid");
if (!$mysqli) {
    die('Could not connect: ' . mysql_error());
}
$result = $mysqli->query("SELECT * FROM items");
// Numeric array
$items = $result -> fetch_all(MYSQLI_NUM);



// Free result set
$result -> free_result();
$mysqli -> close();
?>
