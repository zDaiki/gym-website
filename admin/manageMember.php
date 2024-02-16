<?php
include "connection.php";
if (!session_id())
    session_start();




?>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Members</title>
</head>

<body>


    <?php include './blad/navbarAdmin.php'; ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Members</li>
        </ol>
        <div class="col-12">
            <h5 style="font-size:20px; font-weight:bold;">View Members</h5>
            <hr>
        </div>
    </nav>
    <div class="container" style="margin: top 20px;">
        <div class="row">
            <div class="col text-center">
                <img src="images/customer.png" alt="">
                <h3>Registered Members</h3>
            </div>
        </div>
        <div class="row view-row1">
            <div class="col text-center abcd">
                <table class="table">
                    <tr>

                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Category</th>

                        <th>Action</th>
                    </tr>

                    <?php



                    $selectquery = "select * from membership";
                    $query = mysqli_query($conn, $selectquery);
                    $num = mysqli_num_rows($query);
                    while ($res = mysqli_fetch_array($query)) {
                        $mid = $res['mid'];
                        ?>
                    <tr>

                        <td>
                            <?php echo $res['fname'] ?>
                        </td>
                        <td>
                            <?php echo $res['lname'] ?>
                        </td>
                        <td>
                            <?php echo $res['contact'] ?>
                        </td>
                        <td>
                            <?php echo $res['address'] ?>
                        </td>
                        <td>
                            <?php echo $res['category'] ?>
                        </td>




                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#exampleModalCenter<?php echo $mid; ?>">
                                Remove
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter<?php echo $mid; ?>" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Remove Member?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-footer">

                                            <a href="handledelete.php?mid=<?php echo $mid; ?>" type="button"
                                                class="btn btn-danger">Confirm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>


                    <?php
                    }
                    ?>


                </table>
            </div>

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
<?php

?>