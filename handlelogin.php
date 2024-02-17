<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    //check if email in database
    $sql = "SELECT * FROM `users` where username='" . $username . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    $item = mysqli_fetch_assoc($result);

    if ($row == 1) {
        //email exits in databse


        //check password
        if ($password == $item["password"]) {


            //session start
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $item['username'];
            $_SESSION['userid'] = $item['uid'];
            header("location: index.php");

        } else {

            header("location: joinMember.php?page=login&c=none&e=none&p=nomatch");
        }
    } else {
        //email doesnt exist
        header("location: joinMember.php?page=login&c=none&e=notexist&p=none");

    }
}
?>