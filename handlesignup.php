<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //connect to database
    include("./connection.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    if ($password == $cpassword) {
        //right password

        ///if email alerady exist
        $sql = "SELECT * FROM `users` WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            //already exist
            header("location: signup.php?p=right&e=exist");
        } else {
            //email does not exit
            $sql2 = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password')";
            $result2 = mysqli_query($conn, $sql2);
            header("location: joinMember.php?c=created&p=none&e=none&vb=0");
        }

    } else {
        //wrong password
        header("location: signup.php?p=wrong&e=none");
    }
}
?>