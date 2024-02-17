<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
    body {
        overflow-x: hidden;
    }

    .gallery {
        width: 100vw;
    }

    .gal-images {
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .gal-image {
        height: 300px;
        width: 400px;
        margin-bottom: 30px;
        transition: all .3s ease;
        cursor: pointer;
    }

    .gal-image:hover {
        transform: scale(1.05);
    }

    .title {
        background-color: rgb(44, 44, 44);
        color: white;
    }
    </style>
</head>

<body>
    <?php

    require 'blad/navbar.php';

    ?>
    <h3 class="text-center py-3 mb-5 p-0 title">Gallery</h3>
    <div class="gallery ">
        <div class="gal-images">
            <img src="./images/works/10.jpg" class="gal-image">
            <img src="./images/works/11.jpg" class="gal-image">
            <img src="./images/works/14.jpg" class="gal-image">
            <img src="./images/works/7.jpg" class="gal-image">
            <img src="./images/works/8.jpg" class="gal-image">
            <img src="./images/works/9.jpg" class="gal-image">
            <img src="./images/works/15.jpg" class="gal-image">
            <img src="./images/works/16.jpg" class="gal-image">
            <img src="./images/works/17.jpg" class="gal-image">
            <img src="./images/works/18.jpg" class="gal-image">
            <img src="./images/works/19.jpg" class="gal-image">
            <img src="./images/works/20.jpg" class="gal-image">
            <img src="./images/works/1.jpg" class="gal-image">
            <img src="./images/works/2.jpg" class="gal-image">
            <img src="./images/works/3.jpg" class="gal-image">

        </div>

    </div>
    <?php

    require 'blad/footer.php';

    ?>
</body>

</html>