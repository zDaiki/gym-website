<!DOCTYPE html>
<html>
<?php
if (!session_id())
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
    </style>
    <script src="./js/validation.js"></script>
</head>
<?php
include("connection.php"); ?>

<body style="font-family: 'Nunito', sans-serif;">
    <?php
    if (isset($_GET['m']) && $_GET['m'] == 'added') {

        echo '
            <div id="notification" style="height:100vh;width:100vw;position:absolute;top:0px;z-index:30;display:flex;justify-content:center;align-items:center;background:rgba(0,0,0,0.7);">
                    <div style="padding:50px 100px;background:rgba(255, 255, 255, 0.6);font-size:1.3rem;">
                        Feedback Sent.
                    </div>
            </div>
        ';
    }
    ?>
    <?php include './blad/header.php'; ?>
    <?php include './blad/navbar.php'; ?>

    <div class="container my-content pt-3">
        <h1 style="text-align: center"><i class="far fa-box-full"></i></h1>
        <h2 class="text-center" style="padding-bottom:20px;font-weight:bold;">Feedback</h2>
        <div class="col-lg-10 offset-1">
            <form method="POST" action="handlefeedback.php">
                <div class=" form-group row">
                    <label for="pack_name" class="col-md-3 col-form-label">Name</label>
                    <div class="col-md-9">
                        <input autocomplete="off" type="text" class="form-control shadow-none" id="amount"
                            name="feedname">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="Amount" class="col-md-3 col-form-label">Contact</label>
                    <div class="col-md-9">
                        <input autocomplete="off" type="text" class="form-control shadow-none" id="amount"
                            name="contact">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="description" class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                        <input autocomplete="off" type=text" class="form-control shadow-none" id="desc" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-3 col-form-label">Feedback</label>
                    <div class=" col-md-9">
                        <input autocomplete="off" type="text" class="form-control shadow-none" name="feedback" id="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-7 offset-5">
                        <button class="btn text-white btn-primary" name="submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="jquery/dist/jquery.slim.min.js"></script>
    <script src="popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
<script>
const noti = document.getElementById("notification");
noti.addEventListener("click", () => {
    noti.style.display = "none";
})
</script>

</html>