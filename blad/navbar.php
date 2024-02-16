<?php
include('header.php');

?>
<?php
if (!session_id())
    session_start();

?>

<nav class="navbar navbar-expand-lg navbar-light "
    style="box-shadow: 5px 5px 5px rgba(0,0,0,0.5);height:15vh;position:sticky;z-index:10;top:0;background:white;">
    <a href="feedback.php"
        style="position:absolute;right:50px;bottom:-80px;background:gray;color:white;padding:10px 14px;text-decoration:none;border-radius:50%;">
        <i class="fa-solid fa-comment"></i></a>
    <div class="container-fluid float-left">
        <a href="index.php">
            <img src="./images/logo.jpg" alt="" width="200">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                include("./connection.php");
                ?>
                <li class="nav-item">
                    <a class="nav-link active" id="nav-links" aria-current="page" href="index.php"><i
                            class="fas fa-home" style="padding-right: 5px;"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="nav-links" aria-current="page" href="schedule.php
                    "><i class="fa-regular fa-clock mr-1"></i>Schedules</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" id="nav-links" aria-current="page" href="packages.php"><i
                            class="far fa-calendar" style="padding-right:5px"></i></i>Packages</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" id="nav-links" aria-current="page" href="Gallery.php"><i
                            class="far fa-images" style="padding-right: 5px; "></i>Gallery</a>
                </li>
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                    echo '
                    
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-links" aria-current="page" href="logout.php">
                        <i class="fa-solid fa-right-from-bracket mr-1"></i>Logout</a>
                    </li>
                    
                    <li class="nav-item" style="pointer-events:none;">
                        <a class="nav-link active" id="nav-links" aria-current="page" href="joinMember.php"><i
                                class="fas fa-user" style="padding-right: 5px;"></i>' . $_SESSION['username'] . '</a>
                    </li>
                    ';
                } else {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-links" aria-current="page" href="joinMember.php"><i
                                class="fas fa-user" style="padding-right: 5px;"></i>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-links" aria-current="page" href="signup.php"><i
                                class="fas fa-user" style="padding-right: 5px;"></i>Sign Up</a>
                    </li>
                    
                    ';
                }
                ?>




            </ul>

        </div>
    </div>
</nav>