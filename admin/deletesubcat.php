
<?php include '../include/dbconn.php';
session_start();
require_once 'include/auth.php';
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
        <?php
if (isset($_POST['submit'])) {
    $sql = "DELETE FROM subcategory WHERE Subcatid = '" . $_POST['user'] . "'";
    $delete = $conn->prepare($sql);
    $delete->execute();
    $sql1 = "ALTER TABLE category AUTO_INCREMENT = 1";
    $delete1 = $conn->prepare($sql1);
    $delete1->execute();
    echo "<script>alert('Record Delete');</script>";
}
?>
        <main>
            <h1>User</h1>
            <h1>Delete Subcategory</h1>
            <form action="deletesubcat.php" method="post" class="delete">
                <label>Select Subcategory</label><select name="user">
                    <option value="">SELECT</option>
                    <?php
$s = "select * from subcategory";
$result = $conn->prepare($s);
$result->execute();
$count = $result->rowCount();
//echo $r;

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value =" . $row['Subcatid'] . ">" . $row['Subcatname'] . "</option>";
}
?>
                </select>
                <input type="submit" name="submit" value="Delete">
            </form>
        </main>
        <?php include 'include/sidebar.php'?>
    </div>
</body>

</html>