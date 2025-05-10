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


    <div class="heading" style="background:url(images/header.jpg) no-repeat center; background-size: cover;">
        <h1>Packages</h1>
    </div>

    <!--packages section starts -->

    <section class="packages">

        <h1 class="heading-title">top destinations</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Australia</h3>
                    <p>Explore Australia's iconic landmarks, vibrant cities, stunning beaches, and unique wildlife, all tailored to create unforgettable experiences!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Finland</h3>
                    <p>Discover Finland’s breathtaking landscapes, the magical Northern Lights, vibrant cities, and serene nature, perfect for a peaceful getaway!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kashmir</h3>
                    <p>Experience the scenic beauty of Kashmir, with its snow-capped mountains, lush valleys, serene lakes, and rich cultural heritage!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Japan</h3>
                    <p>Explore Japan’s perfect blend of tradition and modernity, from ancient temples and cherry blossoms to bustling cities and vibrant culture!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box hidden">
                <div class="image">
                    <img src="images/img-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Thailand</h3>
                    <p>Fantastic trip to Thailand! Beautiful beaches, vibrant culture, and great activities. A few minor adjustments needed, but overall, a memorable experience!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box hidden">
                <div class="image">
                    <img src="images/img-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Greece</h3>
                    <p>Wonderful experience in Greece! Stunning views, rich history, and amazing food. A few small hiccups, but still highly recommend!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box hidden">
                <div class="image">
                    <img src="images/img-7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bali</h3>
                    <p>Unforgettable Bali experience! Gorgeous beaches, rich culture, and relaxing atmosphere. A few minor issues, but overall a fantastic trip!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box hidden">
                <div class="image">
                    <img src="images/img-8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>London</h3>
                    <p>Great London package! Iconic landmarks, vibrant culture, and amazing shopping. Some minor delays, but overall a memorable adventure!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box hidden">
                <div class="image">
                    <img src="images/img-9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Europe</h3>
                    <p>An amazing European journey! Rich history, beautiful cities, and unforgettable experiences across diverse destinations<p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box hidden">
                <div class="image">
                    <img src="images/img-10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>New York</h3>
                    <p>An incredible New York experience! Iconic sights, vibrant energy, and unforgettable moments. A few minor delays, but overall an amazing trip!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box hidden">
                <div class="image">
                    <img src="images/img-11.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Singapore</h3>
                    <p>Exceptional Singapore experience! Stunning skyline, beautiful gardens, and vibrant culture. A truly unforgettable and seamless adventure!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box hidden">
                <div class="image">
                    <img src="images/img-12.jpg" alt="">
                </div>
                <div class="content">
                    <h3>California</h3>
                    <p>Unforgettable California trip! From stunning beaches to iconic landmarks, vibrant cities, and breathtaking landscapes, a must-visit destination!</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

        </div>

        <div class="load-more">
            <button id = "loadMoreBtn" class="btn">Load more</button></div>

    </section>

    <!--packages section ends -->


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