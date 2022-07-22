
<section id="header">
        <a href="#"><img src="images/download.webp" alt="logo" class="logo"></a>
        <div>
            
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

                <?php if(isset($_SESSION['user_id'])){ ?>   
                <li id="lg-bag"><a href="cart.php"><i class="bi bi-bag"></i></a></li>
                <li><a href="logout.php"><i class="bi bi-box-arrow-left"></i></a></li>
            <?php
            } 
            else {
                ?>
                <li><a href="login.php"><i class="bi bi-box-arrow-right"></i></a></li>
                <li><a href="signup.php"><i class="bi bi-person-circle"></i></a></li>
            <?php
            }
            ?>
            
                         <!--id="lg-bag"-->
                <a href="#" id="close"><i class="bi bi-x"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="bi bi-bag"></i></a>
            <i id="bar" class="bi bi-list"></i>
        </div>
    </section>
    