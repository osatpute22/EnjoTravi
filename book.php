<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
    <!---css swiper--->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<div class="main">
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
    
<div class="heading" >
    
    <h2>Book Now</h2>
</div>

<!-- booking scetion-->
 <section class="booking">
     <h1 class="heading-title">
         Book your trip 
     </h1>
     <form action="book_form.php" method="post" class="book-form">
         <div class="flex">
             <div class="inputBox">
             <span>Name:</span>
             <input type="text" placeholder="Type Your Name" name="name">
             </div>
             <div class="inputBox">
             <span>Mobile:</span>
             <input type="number" placeholder="Type Your Mobile Number" name="phone">
             </div>
             <div class="inputBox">
             <span>Email:</span>
             <input type="email" placeholder="Type Your email" name="email">
             </div>
             <div class="inputBox">
             <span>Address:</span>
             <input type="address" placeholder="Type Your Address" name="address">
             </div>
             <div class="inputBox">
             <span>Destinations:</span>
             <input type="text" placeholder="Where want to go" name="location">
             </div>
             <div class="inputBox">
             <span>Quality of Tickets:</span>
             <input type="number" placeholder="How many number of guest" name="guests">
             </div>
             <div class="inputBox">
             <span>Dates for arrivals:</span>
             <input type="date" placeholder="" name="arrivals">
             </div>
             <div class="inputBox">
             <span>Dates for Leaving:</span>
             <input type="date" placeholder="" name="leaving">
             </div>
         </div>
         <input type="submit" value="submit" class="btn" name="send">
     </form>
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
</div>
</body>
</html>