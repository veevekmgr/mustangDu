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
                        <th>PackageId</th>
                        <th>PackName</th>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Price</th>
                        <th>Pic 1</th>
                        <th>Pic 2</th>
                        <th>Pic 3</th>
                        <th>Details</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    $s = "select * from package";
                    $result = $conn->prepare($s);
                    $result->execute();
                    $count = $result->rowCount();
                    //echo $r;

                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr>

                            <td> <?php echo $row['Packid'] ?></td>
                            <td> <?php echo $row['Packname'] ?></td>
                            <td> <?php echo $row['Category'] ?></td>
                            <td> <?php echo $row['Subcategory'] ?></td>
                            <td> <?php echo $row['Packprice'] ?></td>
                            <td><?php echo '<img src="packimages/' . $row['Pic1'] . '" alt="pic1" style="width: 100px;height:100px;">'; ?></td>
                            <td><?php echo '<img src="packimages/' . $row['Pic2'] . '" alt="pic2" style="width: 100px;height:100px;">'; ?></td>
                            <td><?php echo '<img src="packimages/' . $row['Pic3'] . '" alt="pic3" style="width: 100px;height:100px;">'; ?></td>
                            <td> <?php echo $row['Detail'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
        <?php include('include/sidebar.php') ?>
    </div>
</body>

</html>