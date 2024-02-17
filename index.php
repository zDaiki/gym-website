<?php include 'blad/navbar.php';
?>
<?php
if (!session_id())
    session_start();

?>
<html>

<head>
    <script src="https://kit.fontawesome.com/2dfceedea2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

    body {
        /* overflow-x: hidden; */
    }
    </style>
    <title>Baki fitness</title>
</head>

<body style=" font-family: 'Nunito', sans-serif;font-size:1rem;">
    <?php
    if (isset($_GET['m']) && $_GET['m'] == 'added') {

        echo '
            <div id="notification" style="height:100vh;width:100vw;position:absolute;top:0px;z-index:30;display:flex;justify-content:center;align-items:center;background:rgba(0,0,0,0.7);">
                    <div style="padding:50px 100px;background:rgba(255, 255, 255, 0.6);font-size:1.3rem;">
                        Membership Plan Registered.
                    </div>
            </div>
        ';
    }
    ?>
    <div class="">
        <div class="row"
            style="height:85vh;background:url(./images/cover.jpg);width:100vw;background-size:cover;background-position:center;">
            <div class="col-md-8" style="padding: 20px; margin-left:80px;">

                <h1 class="strongHeadMain text-light" style="margin-top:100px;">The only bad workout is the <br>one that
                    didn't happen.
                </h1>
                <p class="textBe " style="width:500px;color:gray;">Are you ready to embark on a journey toward
                    a
                    healthier,
                    stronger, and more vibrant
                    version of yourself? Look no further! At BAKIFITNESS, we are dedicated to helping you achieve your
                    fitness goals in an inclusive and motivating environment.</p>

                <a href="packages.php" class="text-first"><button class="btn btn-warning text-dark">Know
                        More</button></a>

            </div>

        </div>
        <br><br>
        <div class="row" style="padding-left:130px;">
            <h3 class="text-center p-3" style="font-weight: bold;">Our Services</h3>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3 ">
                <div class="card" style="width: 18rem;">
                    <img src="images/services1.jpg" class="card-img-top" alt="service image">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-weight: bold;">Free Consultation</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Unlock your full potential with a complimentary
                            consultation at BAKI Fitness. Our free consultation service is designed to kickstart your
                            fitness journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/services2.jpg" class="card-img-top" alt="service image">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-weight: bold;">Best Training</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Experience the pinnacle of fitness excellence
                            with the best training at BAKI Fitness. Unparalleled training programs that deliver
                            exceptional results, every step of the way.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/services3.jpg" class="card-img-top" alt="service image">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-weight: bold;">Build Perfect Body</h5>
                        <p class="card-text" style="font-size: 0.9rem;">


                            Unlock the path to your perfect body at BAKI Fitness. We understand that achieving your
                            ideal physique is a journey that requires dedication, guidance, and expertise.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr style="width:90px;margin:10px auto;height:3px" class="bg-warning">
    <br>
    <!-- ----------------trainer part start----------- -->
    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <h1 class="trainer text-center">Our Trainers</h1>
            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/abc.png" width="70%">
                <h5 style="padding-top: 10px;font-weight:bold;">Chris Bumstead
                </h5>
                <p>Six Years Experienced</p>
            </div>

            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/bodyTrainer1.png" width="70%">
                <h5 style="padding-top: 20px; font-weight:bold;">David Laid</h5>
                <p>Five Years Experienced</p>
            </div>

            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/bodyTrainer3.png" width="70%">
                <h5 style="padding-top: 15px; font-weight:bold;">Brock Lesner</h5>
                <p>Four Years Experienced</p>
            </div>
        </div>
    </div>


    <br>
    <br>
    <section class="container mb-5" id="about">
        <div class="row">
            <div class="col-md-6 acd">
                <img src="images/second.jpg" width="100%">
            </div>
            <div class="col-md-6 justify-text" id="about-ab">
                <h1 style="text-align: center; padding-bottom: 10px;font-weight: bold;">About Us</h1>
                <p style="padding-left:30px">
                    Welcome to BAKI Fitness, where fitness meets community and dedication fuels transformation. We
                    are more than just a gym; we're a passionate team committed to helping you achieve your health and
                    wellness goals, whatever they may be.
                    <br>
                    <br>
                    At BAKI Fitness, we believe in fostering an inclusive environment where everyone feels welcome
                    and supported on their fitness journey. Whether you're a seasoned athlete or just starting out, our
                    state-of-the-art facilities, diverse range of classes, and personalized training programs are
                    designed to empower you to reach new heights.
                </p>

            </div>
        </div>
    </section>


    <?php require 'blad/footer.php'; ?>






</body>
<script>
const noti = document.getElementById("notification");
noti.addEventListener("click", () => {
    noti.style.display = "none";
})
</script>

</html>