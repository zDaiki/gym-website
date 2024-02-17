<?php include 'blad/navbar.php'; ?>
<?php
if (!session_id())
  session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body {
        overflow-x: hidden;
    }

    .box {
        transition: all .3s ease;
    }

    .box:hover {
        transform: scale(1.03);
    }

    .title {
        background-color: rgb(44, 44, 44);
        color: white;
    }
    </style>
</head>

<body>

    <h3 class="title text-center py-3">Packages</h3>
    <div class="container mb-5" style="font-family:sans-serif; ">
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-4">
                <?php
        include("connection.php");
        $sql = "select * from package";
        $res = mysqli_query($conn, $sql);
        echo '<div style="display:flex;width:90vw;margin-left:80px;flex-wrap:wrap;">';
        while ($item = mysqli_fetch_assoc($res)) {
          $amount = $item['amount'];
          $description = $item['description'];
          $category = $item['category'];
          $image = $item['image'];
          if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
            echo '
            <a href="booking.php?c=' . $category . '" class="box" style="box-shadow:5px 5px 5px rgba(0,0,0,0.2);overflow:hidden;border: 1px solid rgba(0,0,0,0.3);text-decoration:none;color:black; height: 460px; width:310px;margin-right:120px;margin-bottom: 50px; border-radius: 30px;">
            
            ';
          } else {

            echo '
            <a href="joinMember.php" class="box" style="box-shadow:5px 5px 5px rgba(0,0,0,0.2);overflow:hidden;border: 1px solid rgba(0,0,0,0.3);text-decoration:none;color:black; height: 460px; width:310px;margin-right:120px;margin-bottom: 50px; border-radius: 30px;">
            
            ';
          }

          echo '
  
                  <div class="imgtag" style="width:100%;height:200px;">
                    <img src="' . $image . '" style="height:100%;width:100%;">
                  </div>
                  <div style=" height:100%;padding:0 15px;">
  
                  <p class="text-center m-0 py-2" style="font-size:1.2rem;font-weight:bold;">
                    ' . $category . '
                  </p>
                  <p class="text-center" style="font-size:1.5rem;background:rgb(44, 44, 44);color:white;border-radius:5px;">
                  <b>Rs. ' . $amount . '</b>/<span style="font-size:1rem;"> month</span>
                  </p>
                  <p class="" style="font-size:.8rem;">
                    ' . $description . '
                  </p>
                  </div>
  
    
    
                </a>
                ';
        }
        ?>
            </div>
        </div>

    </div>
    </div>
    <?php
  include("blad/footer.php");
  ?>
</body>

</html>