<?php include('../include/dbconn.php');
session_start();
require_once('include/auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body id="body">
    <div class="container">
        <div class="home">
            <a href="../index.php" class="homeBtn">Go to Home</a>
        </div>
        <main>
            <h1>Category</h1>
            <h1>AddCategory</h1>
            <form action="addcat.php" method="post">
                Category Name:<input type="text" name="catname"><br>
                <input type="submit" name="save" value="Save">
            </form>

            <?php
            if (isset($_POST['save'])) {
                $sql = "INSERT INTO category(Cat_name) VALUES ('" . $_POST['catname'] . "')";
                $result = $conn->prepare($sql);
                $result->execute();
                echo "<script>alert('Record Added');</script>";
            }
            ?>
        </main>
        <?php include('include/sidebar.php') ?>
    </div>
</body>

</html>