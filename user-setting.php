<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MustangDu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/user-setting.css">
</head>

<body>
    <?php include('include/header.php');
    include('include/dbconn.php'); ?>
    <section class="user-profile">
        <div class="user-details">
            <h1>Your Details</h1>
            <hr>
            <img src="assets/images/hero.png" class="profile-img">
            <div>
                <a href="#">Change</a>
            </div>
            <?php
            $username = $_SESSION['username'];
            $s = "SELECT * FROM users WHERE username = :username";
            $result = $conn->prepare($s);
            $result->bindParam(':username', $username);
            $result->execute();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <h1><?php echo $row['username']; ?></h1>
                <hr>
                <div class="details-user">
                    <h3>Fullname</h3>
                    <h3><?php echo $row['username']; ?></h3>
                    <a href="#">Edit</a>
                </div>
                <hr>
                <div class="details-user">
                    <h3>Address </h3>
                    <span><?php echo $row['address']; ?></span>
                    <a href="#">Edit</a>
                </div>
                <hr>
                <div class="details-user">
                    <h3>Contact </h3>
                    <span><?php echo $row['mobilenumber']; ?></span>
                    <a href="#">Edit</a></h3>
                </div>
                <hr>
                <div class="details-user">
                    <h3>Email</h3>
                    <span><?php echo $row['email']; ?></span>
                    <a href="#">Edit</a>
                </div>
                <hr>
                <div class="details-user">
                    <h3>Password</h3>
                    <span>******</span>
                    <a href="#">Change</a>
                </div>
                <hr>
        </div>
    <?php } ?>
    </section>
    <?php include('include/footer.php'); ?>
</body>

</html>