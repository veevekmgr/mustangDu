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
            <h1>Enquiry</h1>
            <h1>View Enquiry</h1>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>EnquiryId</th>
                        <th>Package Id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Mobileno</th>
                        <th>Email</th>
                        <th>NoofDays</th>
                        <th>Child</th>
                        <th>Adults</th>
                        <th>Message</th>
                        <th>Status Field</th>


                    </tr>
                </thead>
                <tbody>
                    <?php

                    $s = "select * from enquiry";
                    $result = $conn->prepare($s);
                    $result->execute();
                    $count = $result->rowCount();
                    //echo $r;

                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Enquiryid']; ?></td>
                            <td><?php echo $row['Packageid']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Gender']; ?></td>
                            <td><?php echo $row['Mobileno']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['NoofDays']; ?></td>
                            <td><?php echo $row['Child']; ?></td>
                            <td><?php echo $row['Adults']; ?></td>
                            <td><?php echo $row['Message']; ?></td>
                            <td><?php echo $row['Statusfield']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
        <?php include('include/sidebar.php') ?>
    </div>
</body>

</html>