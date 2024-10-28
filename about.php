<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images\images (3).jpeg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Savor exceptional flavors, enjoy inviting ambiance, and experience top-notch service at BURGER KING. A culinary journey like no other awaits you.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Discover our offerings: Exceptional flavors, inviting ambiance, and top-notch service. Immerse yourself in a culinary experience like no other at BURGER KING</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images\images (2).jpeg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images\images (1).jpeg" alt="" >
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Meet BURGER KING. We are dedicated to crafting exceptional dining experiences, where passion for food meets warm hospitality and innovation.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Exquisite cuisine, impeccable service! Thrilled with my dining experience. The dishes were delightful, and the service was efficient. Highly recommend this restaurant for any occasion.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Pasindu</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Unforgettable dining! The flavors were rich, and the service exceeded expectations. Swift and attentive staff. I'm a loyal customer now. Five-star experience!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rukmal</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Impressive menu selection! The dish I ordered was a culinary masterpiece. Punctual service with a friendly touch. A top-notch dining destination with attention to detail!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Buddhini</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Exceptional quality and service! The dishes were gorgeous, and the presentation was elegant. Timely service and courteous staff. A satisfied diner who will return for more delightful meals</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sankalpa</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p> Absolutely fantastic! The dishes were a hit, and the service was exceptional. Swift service and a seamless dining experience. I'm impressed and will definitely dine here again. Highly recommended</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kavisara</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Top-notch dining experience! The food was fresh, flavorful, and beautifully presented. Prompt service and friendly staff. A reliable choice for all your culinary needs.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kavindhiya</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>