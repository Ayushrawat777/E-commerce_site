<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lubov clothing/blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
<?php
   include "header.php";
   ?>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/features/free-shipping.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>kickstarter man braid wrhiuwfiw fweygbawygi gaygahg ayia fas siJss vSgasg sbSIgwg gLIGS gskghg gwkghag hkjhm ehjnshs </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/features/24-hour-support.png" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>kickstarter man braid wrhiuwfiw fweygbawygi gaygahg ayia fas siJss vSgasg sbSIgwg gLIGS gskghg gwkghag hkjhm ehjnshs </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/features/happy sale.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>kickstarter man braid wrhiuwfiw fweygbawygi gaygahg ayia fas siJss vSgasg sbSIgwg gLIGS gskghg gwkghag hkjhm ehjnshs </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/features/promotion.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>kickstarter man braid wrhiuwfiw fweygbawygi gaygahg ayia fas siJss vSgasg sbSIgwg gLIGS gskghg gwkghag hkjhm ehjnshs </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/features/free-shipping.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>kickstarter man braid wrhiuwfiw fweygbawygi gaygahg ayia fas siJss vSgasg sbSIgwg gLIGS gskghg gwkghag hkjhm ehjnshs </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
    </section>
    
    <section id="pagination" class="section-p1"    >
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#"><i class="bi bi-arrow-right"></i></a>
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