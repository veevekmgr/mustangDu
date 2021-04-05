<?php include 'user/login-user.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MustangDU</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </ head>

<body>
    <?php include 'include/header.php'; ?>
    <section class="login-section">
        <div class="login-container">
            <p class="title">Login</p>
            <div class="separator"></div>

            <p class="welcome-message">
                Please log-In to step forward
            </p>

            <form class="user-form" action="user/login-user.php" method="post">
                <div class="form-control">
                    <input type="text" name="username" placeholder="Username" required />
                </div>
                <div class="form-control">
                    <input type="password" name="password" placeholder="Password" required />
                </div>
                <a href="#">Forgot Password</a>
                <div class="form-control">
                    <input type="submit" class="button-login" name="login" value="LogIn">
                    <a href="register.php"><input type="button" name="registerBtn" class="button-login" value="Register"></a>

                </div>
            </form>

        </div>

    </section>
    <?php include 'include/footer.php'; ?>