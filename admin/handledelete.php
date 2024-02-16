<?php

include("connection.php");
$mid = $_GET['mid'];
$sql = "delete from membership where mid=$mid";
$res = mysqli_query($conn, $sql);
if ($res) {
    header("location: manageMember.php");
} else {
    echo "error";
}
?>