<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
        <a href="home.php" class="logo"></a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat center center fixed; background-size: cover;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Travel around the world!</h3>
                        <a href="package.php" class="btn"> discover more </a>
                    </div>
                </div>    

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat center center fixed; background-size: cover;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Discover new places!</h3>
                        <a href="package.php" class="btn"> discover more </a>
                    </div>
                </div>    

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat center center fixed; background-size: cover;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Make your tour worth while!</h3>
                        <a href="package.php" class="btn"> discover more </a>
                    </div>
                </div>    
                
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- services section starts -->
     <section class="services">

        <h1 class="heading-title"> Our services </h1>

        <div class="box-container">

            <div class="box-class">
                <img src="images/icon_1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box-class">
                <img src="images/icon_2.png" alt="">
                <h3>Tour guide</h3>
            </div>

            <div class="box-class">
                <img src="images/icon_3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box-class">
                <img src="images/icon_4.png" alt="">
                <h3>Camp fire</h3>
            </div>

            <div class="box-class">
                <img src="images/icon_55.png" alt="">
                <h3>Off road</h3>
            </div>

            <div class="box-class">
                <img src="images/icon_6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>

     </section>

    <!-- services section ends -->

    <!-- home about section starts --> 

    <section class="home-about">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>At our travel agency, we specialize in crafting unforgettable journeys with a variety of tailored packages to suit every traveler. Powered by a robust database, we ensure seamless bookings, personalized experiences, and reliable service to help you explore the world with ease and confidence.</p>
            <a href="about.php" class="btn">read more</a>
        </div>    

    </section>   

    <!-- home about section ends --> 

    <!-- home package section starts --> 

    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Australia</h3>
                    <p>Explore Australia's iconic landmarks, vibrant cities, stunning beaches, and unique wildlife, all tailored to create unforgettable experiences!</p>
                    <a href="book.php" class="btn">Book now!</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-22.png" alt="">
                </div>
                <div class="content">
                    <h3>Finland</h3>
                    <p>Discover Finland’s breathtaking landscapes, the magical Northern Lights, vibrant cities, and serene nature, perfect for a peaceful getaway!</p>
                    <a href="book.php" class="btn">Book now!</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kashmir</h3>
                    <p>Experience the scenic beauty of Kashmir, with its snow-capped mountains, lush valleys, serene lakes, and rich cultural heritage!</p>
                    <a href="book.php" class="btn">Book now!</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Japan</h3>
                    <p>Explore Japan’s perfect blend of tradition and modernity, from ancient temples and cherry blossoms to bustling cities and vibrant culture!</p>
                    <a href="book.php" class="btn">Book now!</a>
                </div>
            </div>

        </div>

        <div class="load-more"> <a href="package.php" class="btn">load-more</a> </div>

    </section>

    <!-- home package section ends --> 

    <!-- home offer section starts --> 

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Unlock amazing savings! Enjoy 50% off on all our travel packages for a limited time only!</p>
            <a href="book.php" class="btn">book now!</a>
        </div>
    </section>

    <!-- home offer section ends --> 


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
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms Of Use</a>
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
