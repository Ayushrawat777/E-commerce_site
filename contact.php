<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lubov clothing/contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
<?php
   include "header.php";
   ?>

    <section id="page-header" class="about-header">
        <h2>#contact us</h2>
        <p>enjoy and experience our journey</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="bi bi-map"></i>
                    <p>56 Glassford Street Glasgow G1 1UL New York</p>
                </li>
                <li>
                    <i class="bi bi-envelope"></i>
                    <p>contact@gmail.com</p>
                </li>
                <li>
                    <i class="bi bi-telephone-fill"></i>
                    <p>+91-7382832280</p>
                </li>
                <li>
                    <i class="bi bi-clock"></i>
                    <p>Monday to Saturday 9:00 am to 16:00 pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7004.813163913185!2d77.22747122114868!3d28.617574092522414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x717971125923e5d!2sIndia%20Gate!5e0!3m2!1sen!2sin!4v1649551347683!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" name="" id="" placeholder="Your Name">
            <input type="email" name="" id="" placeholder="E-Mail">
            <input type="text" name="" id="" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="images/people/human (1).jpg" alt="">
                <p><span>John Doe</span>
                Senior Marketing Manager <br> Phone: +000 123000 77 88 <br> Email:contact@example.com</p>
            </div>
            <div>
                
                <img src="images/people/human (2).jpg" alt="">
                <p><span>William Smith</span>
                Senior Marketing Manager <br> Phone: +000 123000 77 88 <br> Email:contact@example.com</p>
            </div>
            <div>
                <img src="images/people/human (3).jpg" alt="">
                <p><span>Emma Stone</span>
                Senior Marketing Manager <br> Phone: +000 123000 77 88 <br> Email:contact@example.com</p>
            </div>
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