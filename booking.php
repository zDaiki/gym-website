<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
    body {
        font-family: Arial, sans-serif;

        margin: 0;
        padding: 0;
    }

    .title {
        background-color: rgb(44, 44, 44);
        color: white;
    }

    .details {
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        margin: 0 auto;
        width: 600px;
        /* background-color: red; */
    }
    </style>
</head>

<body>
    <?php
    include('blad/navbar.php');

    if (isset($_GET["c"])) {

        $membership = $_GET['c'];
    }

    ?>
    <h3 class="title py-3 text-center">Gym Membership</h3>
    <div class="details">

        <form class="" action="handlebooking.php" method="post">
            <div style="display:flex;justify-content:space-between;">

                <div class="form-group mr-3" style="flex:1">
                    <label for="fname">First Name</label>
                    <input autocomplete="off" name="fname" type="text" class="form-control shadow-none" id="fname"
                        aria-describedby="emailHelp" required>

                </div>
                <div class="form-group ml-3" style="flex:1">
                    <label for="lname">Last Name</label>
                    <input autocomplete="off" name="lname" type="text" class="form-control shadow-none" id="lname">
                </div>
            </div>


            <div class="form-group" style="flex:1">
                <label for="address">Address</label>
                <input autocomplete="off" name="address" type="text" class="form-control shadow-none" id="address"
                    aria-describedby="emailHelp" required>

            </div>
            <div style="display:flex;justify-content:space-between;">
                <div class="form-group mr-3" style="flex:1">
                    <label for="contact">Contact No.</label>
                    <input autocomplete="off" name="contact" type="text" class="form-control shadow-none" id="contact"
                        required>
                </div>
                <div class="form-group ml-3" style="flex:1">
                    <label for="contact">Membership</label>
                    <input autocomplete="off" name="category" type="text" class="form-control shadow-none" id="contact"
                        value="<?php echo $membership; ?>" readonly>
                </div>
            </div>
            <div class="form-group" style="flex:1">
                <label for="des">Description</label>
                <input autocomplete="off" type="textarea" name="description" class="form-control shadow-none" id="des">
            </div>


            <button type="submit" class="btn btn-dark px-3 py-2 mt-2" style="margin-left:250px;">Proceed</button>
        </form>
    </div>
    <?php
    include('blad/footer.php');
    ?>
</body>

</html>