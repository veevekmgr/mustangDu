<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MustangDu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/user-profile.css">
</head>

<body>
    <?php include('include/header.php');
    include('include/dbconn.php'); ?>
    <section class="user-pro">
        <div class="profile-user">
            <div class="user-profile">
                <h1>Welcome</h1>
                <img src="assets/images/hero.png" class="profile-img">
                <?php
                $username = $_SESSION['username'];
                $s = "SELECT * FROM users WHERE username = :username";
                $result = $conn->prepare($s);
                $result->bindParam(':username', $username);
                $result->execute();

                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <h1><?php echo $row['username']; ?></h1>
                    <h3>Fullname: <?php echo $row['fullname']; ?></h3>
                    <h3>Address: <?php echo $row['address']; ?></h3>
                    <h3>Contact: <?php echo $row['mobilenumber']; ?></h3>
                    <h3>Email: <?php echo $row['email']; ?></h3>
                    <a href="#">Edit Profile</a>
                <?php } ?>

            </div>
            <div class="user-plan">
                <h1>Your Plan</h1>
            </div>

        </div>
        </div>
    </section>
    <?php include('include/footer.php'); ?>
</body>

</html>