<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <!---css swiper--->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <!--- Header used in website--->
    <section class="header">
        <a href="home.php" class="logo" >EnjoTravi.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
<!--- home --->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(img/heading-bg.jpeg);">
                <div class="content">
                    <span>Explore Now</span>
                    <h3>Tour Of World</h3>
                    <a href="package.php" class="btn">Explore </a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(img/heading-bg1.jpeg);">
                <div class="content">
                    <span>Discover</span>
                    <h3>Enjoy Travelling</h3>
                    <a href="package.php" class="btn">Explore </a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(img/heading-bg2.jpg);">
                <div class="content">
                    <span>Travel </span>
                    <h3>Inter into New Life</h3>
                    <a href="package.php" class="btn">Explore </a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section> 

<!--- services section-->
<section class="services">
    <h1 class="heading-title">Services Are We Provided</h1>
    <div class="box-container">
        
        <div class="box">
    
            <img src="img/icon1.jpg" alt="">
            <h3>Travelling</h3>

        </div>
        <div class="box">
            <img src="img/icon2.png" alt="">
            <h3>Adventure</h3>

        </div>
        <div class="box">
            <img src="img/icon3.png" alt="">
            <h3>Sea Land</h3>

        </div>
        <div class="box">
            <img src="img/icon4.png" alt="">
            <h3>Mountain Visit</h3>

        </div>
        <div class="box">
            <img src="img/icon5.png" alt="">
            <h3>Camping</h3>

        </div>
    </div>
</div>
</section>

<!---home about section -->
<section class="home-about">
    <div class="img">
        <img src="img/about1.jpg" alt="">
    </div>
    <div class="content">
        <h3>About us</h3>
        <p>Booking a travel package when it comes to travelling to new parts of the country or<br> the world is a practice that has slowly gained a lot of popularity.<br>Today, whenever it is about planning a holiday trip, many people have a preferred travel portal in India that is best for their specific needs. <br>Owing to the faith bestowed in our travel services by our patrons, EnjoTravi has established its niche and is counted among the top 10 travel agencies in Mumbai. 

</p>
        <a href="about.php" class="btn">Click to Know More</a>
    </div>
</section>

<!-- packages section -------->
<section class="home-packages">
    <h1 class="heading-title">Packages We Are Provided</h1>
    <div class="box-container">
        <div class="box">
            <div class="img">
                <img src="img/package1.webp" alt="">
                <div class="content">
                    <h3>Spirutual Visit</h3>
                    <p> Visit the sacred Golden Temple</p>


                    <a href="book.php" class="btn">Book A Trip</a>
                </div>
                
            </div>
        </div>
        <div class="box">
            <div class="img">
                <img src="img/package2.jpg" alt="">
                <div class="content">
                    <h3>Spirutual Visit</h3>
                    <p>Port Blair Airport</p>


                <a href="book.php" class="btn">Book A Trip</a>
                </div>
                
            </div>
        </div>
        <div class="box">
            <div class="img">
                <img src="img/package3.jpg" alt="">
                <div class="content">
                    <h3>Spirutual Visit</h3>
                <p> Corbett National Park </p>

                <a href="book.php" class="btn">Book A Trip</a>
                </div>
                
            </div>
        </div>
    </div>
    <div class="more"><a href="package.php" class="btn">More</a></div>
</section>

<!--footer -->
<section class="footer">


    <div class="box-container">
        <div class="box">
                <h3>Related Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>

        </div>
        <!--<div class="box">
                <h3>More Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Asked Question</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms and Condition </a>
                <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                
        </div>--->
        <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +321-654-7899</a>
                <a href="#"><i class="fas fa-phone"></i> +321-444-7899</a>
                <a href="#"><i class="fas fa-envelope"></i> Travel@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Pune , India-455520</a>

                
        </div>
        <div class="box">
                <h3>Follow On</h3>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-youtube"></i> Youtube</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>

        </div>
</div>
<div class="credit">created by <span>Travel.</span>| Copy Right Reserved</div>

</section>
<!---footer end-->
<!-- script for swipper -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!---Javascript-->
<script src="script.js"></script>
</body>
</html>