<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Package</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
    </style>
    <script src="./js/validation.js"></script>
</head>
<?php
include("connection.php"); ?>

<body style="font-family: 'Nunito', sans-serif;">
    <?php include './blad/headerAdmin.php'; ?>
    <?php include './blad/navbarAdmin.php'; ?>
    <p style="width:100vw;background:#e0e0e0;">

        <a href="admindashboard.php" class="" style="color:blue;">Admin Dashboard </a>
        / packages
    </p>
    <header>
    </header>
    <div class=" container my-content pt-3">
        <h1 style="text-align: center"><i class="far fa-box-full"></i></h1>
        <h2 class="text-center" style="padding-bottom:20px;font-weight:bold;">Add Package</h2>
        <div class="col-lg-10 offset-1">
            <form method="POST" action="package.php" onsubmit="return packageValidation()">
                <div class="form-group row">
                    <label for="pack_name" class="col-md-3 col-form-label">Package Name</label>
                    <div class="col-md-9">
                        <input autocomplete="off" type="text" class="form-control" id="pack_name" name="category"
                            placeholder="Package Name">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="Amount" class="col-md-3 col-form-label">Amount</label>
                    <div class="col-md-9">
                        <input autocomplete="off" type="text" class="form-control" id="amount" name="amount"
                            placeholder="Amount">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="description" class="col-md-3 col-form-label">Package Description</label>
                    <div class="col-md-9">
                        <textarea autocomplete="off" class="form-control" id="desc" name="description"
                            rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-3 col-form-label">Image</label>
                    <div class=" col-md-9">
                        <input autocomplete="off" type="file" name="image" id="">
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

</html>
<?php


if (isset($_POST['submit'])) {

    $packageName = $_POST['category'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $image = "images/" . $_POST['image'];

    $sql = "INSERT INTO `package`(`category`, `amount`, `description`,`image`) VALUES ('$packageName', '$amount', '$description','$image')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        ?>
<script>
alert("Package Inserted Successfully");
</script>
<?php
    } else {
        ?>
<script>
alert("Package is Not Inserted Successfully");
</script>
<?php
    }
}
?>