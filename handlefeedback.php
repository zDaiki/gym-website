<?php

include("connection.php");
if (isset($_POST['submit'])) {

    $fname = $_POST['feedname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];


    $sql = "INSERT INTO `customer_feedback` (`name`, `contact`, `email`,`feedback`) VALUES ('$fname', '$contact', '$email','$feedback')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        ?>
<script>
alert("Feedback Sent");
</script>
<?php
        header("location: feedback.php?m=added");
    } else {
        ?>
<script>
alert("Feedback failed!");
</script>
<?php
    }
}
?>