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
            <h1>Subcategory</h1>
            <h1>View Subcategory</h1>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Subcategory Name</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $s = "select * from subcategory";
                    $result = $conn->prepare($s);
                    $result->execute();
                    $count = $result->rowCount();
                    //echo $r;

                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Subcatid']; ?></td>
                            <td><?php echo $row['Subcatname']; ?></td>
                            <td><?php echo $row['Detail']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
        <?php include('include/sidebar.php') ?>
    </div>
</body>

</html>