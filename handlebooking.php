<?php
if (!session_id())
    session_start();
include("connection.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$category = $_POST['category'];
$description = $_POST['description'];
$userid = $_SESSION['userid'];
$sql = "insert into membership (uid,fname,lname,address,contact,description,category) values($userid,'" . $fname . "','" . $lname . "','" . $address . "','" . $contact . "','" . $description . "','" . $category . "')";
$res = mysqli_query($conn, $sql);
if ($res) {
    header("location: index.php?m=added");
} else {
    echo 'error';
}
?>