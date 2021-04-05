<!--Navbar-->
<nav>
    <div class="wrapper">
        <div class="logo">
            <a href="./index.php"><img src="./assets/images/logo.png" alt=""></a>
        </div>
        <input type="radio" name="slider" id="menu-btn" />
        <input type="radio" name="slider" id="close-btn" />
        <ul class="nav-links">
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i>
            </label>
            <li><a href="./index.php">Home</a></li>
            <li>
                <a href="#" class="dropdown-item">Places to See <span class="fas fa-chevron-down"></span></a>
                <input type="checkbox" id="showDrop" />
                <label for="showDrop" class="mobile-dropdown-item">Places To See<span class="fas fa-chevron-down"></span></label>
                <ul class="drop-menu">
                    <li><a href="#">Kathmandu</a></li>
                    <li><a href="#">Nuwakot</a></li>
                    <li><a href="#">Dhading</a></li>
                    <li><a href="#">Gorkha</a></li>
                    <li><a href="#">Lamjung</a></li>
                    <li><a href="#">Tanahun</a></li>
                    <li><a href="#">Kaski</a></li>
                    <li><a href="#">Magdi</a></li>
                    <li><a href="#">Lower Mustang</a></li>
                    <li><a href="#">Upper Mustang</a></li>
                </ul>
            </li>
            <li>
                <a href="./thingstodo.php" class="dropdown-item">Things To Do<span class="fas fa-chevron-down"></span>
                </a>
                <input type="checkbox" id="showMega" />
                <label for="showMega" class="mobile-dropdown-item">Things To Do<span class="fas fa-chevron-down"></span>
                </label>
                <div class="mega-box">
                    <div class="content">
                        <div class="row">
                            <img src="assets/images/navimg.jpg" alt="" />
                        </div>
                        <div class="row">
                            <header>Adventures</header>
                            <ul class="mega-items">
                                <li><a href="#">Trekking</a></li>
                                <li><a href="#">Mountain Bike</a></li>
                                <li><a href="#">Hiking</a></li>
                                <li><a href="#">Zip Flying</a></li>
                                <li><a href="#">Bungee Jumping</a></li>
                                <li><a href="#">Paragliding</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <header>Nature</header>
                            <ul class="mega-items">
                                <li><a href="#">Bird Watching</a></li>
                                <li><a href="#">Mountain Viewing</a></li>
                                <li><a href="#">Jungle Viewing</a></li>
                                <li><a href="#">National Parks</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <header>Culture</header>
                            <ul class="mega-items">
                                <li><a href="#">Cultural Tour</a></li>
                                <li><a href="#">Meet People</a></li>
                                <li><a href="#">Nepali Food</a></li>
                                <li><a href="#">Traditional Crafts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="./plan.php">Plan Your Trip</a></li>
            <li><a href="# class=" dropdown-item">Virtual Tour<span class="fas fa-chevron-down"></span></a>
                <input type="checkbox" id="showDrop1" />
                <label for="showDrop1" class="mobile-dropdown-item">Virtual Tour<span class="fas fa-chevron-down"></span></label>
                <ul class="drop-menu">
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">360° Gallery</a></li>
                    <li><a href="#">Videos</a></li>
                </ul>
                <?php if (isset($_SESSION["username"])) { ?>
            <li><a href="#"><?php echo $_SESSION['username']; ?></a>
                <ul class="drop-menu">
                    <li><a href="./user-profile.php">Profile</a></li>
                    <li><a href="./user-setting.php">Setting</a></li>
                    <li><a href="user/logout.php">Log Out</a></li>
                </ul>
            <?php } ?>

            </li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i>
        </label>
    </div>
</nav>
<!--Navbar End-->