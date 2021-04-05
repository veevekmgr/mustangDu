<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MustangDU</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <section id="header">

        <!--Navbar-->
        <?php include('include/header.php'); ?>
        <div class="bg">
            <img src="./assets/images/bg.jpg" alt="#">
        </div>
        <!--Navbar End-->
        <main>
            <div class="section">

                <h1>Heaven is a myth,Nepal is real!</h1>
                <h3>Travel with us!</h3>
                <h3> Kathmandu-Pokhara-Mustang</h3>
                <a href="#" class="btntwo">Learn More</a>
                <a href="login.php" class="btnone">Sign-In Now</a>

            </div>
        </main>
    </section>
    <section id="body">
        <!--Places Cards-->
        <div class="container">
            <div class="cards">
                <div class="card">
                    <img src="assets/images/cards/ktm.jpeg" alt="" />
                </div>
                <div class="details">
                    <h3>Kathmandu</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum provident, numquam impedit accusamus perspiciatis facilis ullam.
                    </p>
                    <a href="#" class="btn">Explore more</a>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="assets/images/cards/ktm.jpeg" alt="" />
                </div>
                <div class="details">
                    <h3>Pokhara</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum provident, numquam impedit accusamus perspiciatis facilis ullam.
                    </p>
                    <a href="#" class="btn">Explore more</a>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="assets/images/cards/ktm.jpeg" alt="" />
                </div>
                <div class="details">
                    <h3>Mustang</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum provident, numquam impedit accusamus perspiciatis facilis ullam.
                    </p>
                    <div class="button">
                        <a href="#" class="btn">Explore more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Places cards-->

    <!--About us-->
    <section id="about">
        <div class="about">
            <div class="inner-section">
                <h1>About Us</h1>
                <hr />
                <p class="text">
                    For example, let’s imagine we were hired to test the content on, a site that provides investment news as well as explanations of complex financial concepts written for different experience levels. We’d need to start by spending hours
                </p>
                <div class="skills">
                    <button>Know More</button>
                    <button>Book Now</button>
                </div>
            </div>
        </div>
    </section>
    <!--End About us-->
    <!--Our services Start
    <section class="services-section">
        <div class="inner-width">
            <h1 class="section-title">Our Services</h1>
            <div class="border"></div>
            <div class="services-container">
                <!--Sevices box
                <div class="service-box">
                    <div class="service-icon">
                        <!--<a href="#"><img src="assets/images/icon/ribbon.svg" alt=""></a>
                    </div>
                    <h3>Variety of Tours</h3>
                    <p>
                        We offer a wide variety of personally picked tours with destinations From KTM to Mustang.
                    </p>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Highly Qualified Services</h3>
                    <p>
                        Our tour managers are qualified, skilled, and friendly to bring you the best service.
                    </p>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3>Top Hotels</h3>
                    <p>
                        Our team offers only the best selection of affordable and luxury hotels to our clients.
                    </p>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Supports</h3>
                    <p>
                        You can always get professional support from our staff 24/7 and ask any question you have.
                    </p>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Best Prices</h3>
                    <p>
                        We offer the best price for every customers with heavy discount.
                    </p>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    <h3>Top Destination</h3>
                    <p>
                        We offer you the best destination in between Kathmandu to mustang with specail services.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Our services END-->

    <!--Hot Tour Start-->
    <section class="hot-tour">
        <h1 class="section-title">Hot Packages</h1>
        <div class="border"></div>
        <div class="pricing">
            <div class="pricing-card">
                <h3 class="pricing-card-header">Kathmandu-Pokhara</h3>
                <div class="price"><sup>Rs</sup>15000<span>/person</span></div>
                <ul>
                    <li>2 Days - 3 Nights </li>
                    <li> Deluxe Vehicle</li>
                    <li> Deluxe Hotel</li>
                    <li>Professional Guide</li>
                </ul>
                <a href="#" class="order-btn">Buy Now</a>
            </div>

            <div class="pricing-card">
                <h3 class="pricing-card-header">Kathmandu-Upper Mustang</h3>
                <div class="price"><sup>Rs</sup>15000<span>/person</span></div>
                <ul>
                    <li>2 Days - 3 Nights </li>
                    <li> Deluxe Vehicle</li>
                    <li> Deluxe Hotel</li>
                    <li>Professional Guide</li>
                </ul>
                <a href="#" class="order-btn">Buy Now</a>
            </div>

            <div class="pricing-card">
                <h3 class="pricing-card-header">Kathmandu-Mustang</h3>
                <div class="price"><sup>Rs</sup>15000<span>/person</span></div>
                <ul>
                    <li>2 Days - 3 Nights </li>
                    <li> Deluxe Vehicle</li>
                    <li> Deluxe Hotel</li>
                    <li>Professional Guide</li>
                </ul>
                <a href="#" class="order-btn">Buy Now</a>
            </div>
        </div>
    </section>
    <!--Hot Tour End-->

    <!--Our Team
    <section class="our-team">
        <h1 class="section-title">Our Team</h1>
        <div class="border"></div>

        <div class="profiles">
            <div class="profile">
                <img src="assets/images/img2.jpg" class="profile-img">

                <h3 class="user-name">Hero</h3>
                <h5>Project Manager</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eveniet soluta hic sunt sit reprehenderit.</p>
            </div>
            <div class="profile">
                <img src="assets/images/img3.jpg" class="profile-img">

                <h3 class="user-name">Bakugo</h3>
                <h5>Project Manager</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam facilis sint quod.</p>
            </div>
            <div class="profile">
                <img src="assets/images/img1.jpg" class="profile-img">

                <h3 class="user-name">Deku</h3>
                <h5>Project Manager</h5>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, eveniet!</p>
            </div>
        </div>
    </section>-->
    <!--Our Team End-->

    <!--contact-form-->
    <section class="contact">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Contact Us</h2>
                <input type="text" class="field" placeholder="Your Name">
                <input type="text" class="field" placeholder="Your Email">
                <input type="text" class="field" placeholder="Phone">
                <textarea placeholder="Message" class="field"></textarea>
                <button class="btn-send">Send</button>
            </div>
        </div>
    </section>
    <!--Footer Start-->
    <footer>

        <div class="footer-content">
            <h3>MustangDu</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!
            </p>
            <ul class="socials">
                <li>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i> </i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>
                copyright &copy;2020 MustangDu. designed by <span>Team Daichi</span>
            </p>
        </div>
    </footer>
    <!--Footer End-->
</body>

</html>