<?php
session_start();
require_once('include/auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/admin.css" />
  <title>Admin DASHBOARD</title>
</head>

<body id="body">
  <div class="container">
    <div class="home">
      <a href="../index.php" class="homeBtn">Go to Home</a>
    </div>
    <main>
      <h1>Welcome Admin</h1>
      <div class="main__container">

        <!-- MAIN CARDS STARTS HERE -->
        <div class="main__cards">
          <div class="card">
            <div class="card_inner">
              <p class="text">Number of user</p>
              <span class="font-bold text-title">578</span>
            </div>
          </div>

          <div class="card">
            <div class="card_inner">
              <p class="text">Total Package</p>
              <span class="font-bold text-title">2467</span>
            </div>
          </div>
          <div class="card">
            <div class="card_inner">
              <p class="text">Total Things to do</p>
              <span class="font-bold text-title">2467</span>
            </div>
          </div>
          <div class="card">
            <div class="card_inner">
              <p class="text">Total Places</p>
              <span class="font-bold text-title">2467</span>
            </div>
          </div>
        </div>
    </main>

    <?php include('include/sidebar.php') ?>
  </div>
</body>

</html>