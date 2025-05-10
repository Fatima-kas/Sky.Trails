<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->


    <div class="heading" style="background:url(images/header.jpg) no-repeat center; background-size: cover;">
        <h1>Book now!</h1>
    </div>

    <!--booking section starts -->

        <section class="booking">

            <h1 class="heading-title">Book your trip!</h1>

            <form action="book_form.php" method="post" class="book-form">

                <div class="flex">

                    <div class="inputBox">
                        <span>name :</span>
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>

                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="Enter your e-mail" name="email">
                    </div>

                    <div class="inputBox">
                        <span>phone :</span>
                        <input number="text" placeholder="Enter your number" name="phone">
                    </div>

                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="Enter your address" name="address">
                    </div>

                    <div class="inputBox">
                        <span>where to :</span>
                        <input type="text" placeholder="place you want to visit" name="location">
                    </div>

                    <div class="inputBox">
                        <span>how many :</span>
                        <input type="number" placeholder="number of guests" name="guests">
                    </div>

                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date" name="arrivals">
                    </div>

                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date" name="leaving">
                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="send">

            </form>

        </section>

    <!--booking section ends -->



    <!--footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links:</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>Extra Links:</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ASK QUESTIONS</a>
                <a href="#"><i class="fas fa-angle-right"></i> ABOUT US</a>
                <a href="#"><i class="fas fa-angle-right"></i> PRIVACY POLICY</a>
                <a href="#"><i class="fas fa-angle-right"></i> TERMS OF USE</a>
            </div>    

            <div class="box">
                <h3>Contact Info:</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-234-5567</a>
                <a href="#"><i class="fas fa-envelope"></i> fatima.kas.t23071@gmail.com</a> 
                <a href="#"><i class="fas fa-map"></i> Mumbai, India - 400003</a> 
            </div>   

            <div class="box">
                <h3>Follow us:</h3>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fab fa-instagram"></i> instagram</a>
                <a href="https://in.linkedin.com/"><i class="fab fa-linkedin"></i> linkedin</a>
                <a href="https://x.com/i/flow/login"><i class="fab fa-twitter"></i> twitter</a>
            </div>
        
        </div>

        <div class="credit"> created by <span>Miss. Noor Fatima Kas</span> | all rights reserved! </div>

    </section>
    <!--footer section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>