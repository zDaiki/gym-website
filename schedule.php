<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
    body {
        overflow-x: hidden;
    }

    .schedules {
        height: 78vh;
        display: flex;
        width: 100vw;
    }

    .left {
        height: 100%;
        flex: .65;
        /* background-color: red; */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .right {
        flex: .35;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .rimg {

        height: 480px;
        width: 80%;
        margin-bottom: 50px;
        margin-right: 80px;
    }

    .weekimg {
        height: 430px;
        width: 90%;
    }

    .title {
        background-color: rgb(44, 44, 44);
        color: white;
    }
    </style>
</head>

<body>
    <?php
    include("blad/navbar.php");
    ?>
    <h3 class="text-center py-3 m-0 title">Workout Schedules</h3>
    <div class="schedules">
        <div class="left">
            <img src="./images/weeks.jpg" alt="" class="weekimg">
        </div>
        <div class="right">
            <img src="./images/bodyBuilder2.png" alt="" class="rimg">

        </div>
    </div>
    <?php
    include("blad/footer.php");
    ?>
</body>

</html>