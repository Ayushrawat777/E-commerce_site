<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lubov clothing/about</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
   <?php
   include "header.php";
   ?>

    <section id="page-header" class="about-header">
        <h2>#know us</h2>
        <p>enjoy and experience our journey</p>
    </section>
     
    <section id="about-head" class="section-p1">
        <img src="images/WE SHOP.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem ad ipsam quo sequi tempora dicta enim dolor assumenda aut? Repellendus eveniet soluta tempore a provident temporibus rem eligendi labore? Magni!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque molestiae ut aperiam expedita natus. Praesentium atque eius facilis ex similique nihil odit quaerat aliquid, eos quidem, dolor numquam, maiores sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit necessitatibus consequatur nihil ipsam nisi, ab officiis doloribus itaque repellat praesentium. Corrupti debitis sunt, eius officia vitae non iusto repellendus consectetur!
            </P>
            <abbr title="">create stunning images with as much or as little pro-container thank you for choosing creative modes.</abbr>
            <br> 
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">create stunning images with as much or as little pro-container thank you for choosing creative modes.</marquee> 
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src=""></video>
        </div>
    </section>
    
    <section id="features" class="section-p1">
        <div class="fe-box">
            <img src="images/features/free-shipping.jpg" alt="free-shipping" width="200px" height="100px">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/online-order.webp" alt="online-order" width="200px" height="100px">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/save-money.png" alt="save-money" width="200px" height="100px">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/promotion.jpg" alt="promotion" width="200px" height="100px">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/happy sale.jpg" alt="happy-sale" width="200px" height="100px">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/features/24-hour-support.png" alt="24-hour-support" width="200px" height="100px">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offer</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <?php
    include "footer.php";
    ?>

    <script src="script.js"></script>
</body>

</html>