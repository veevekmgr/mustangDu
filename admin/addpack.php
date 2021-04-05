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
        <main>
            <h1>Package</h1>
            <h1>Add Package</h1>
            <form action="addpack.php" method="post">
                Package Name:<input type="text" name="packname"><br>
                Select Category:<select name="user">
                    <option value="">SELECT</option>
                    <?php
$s = "select * from category";
$result = $conn->prepare($s);
$result->execute();
$count = $result->rowCount();
//echo $r;

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    if (isset($_POST["show"]) && $row['Cat_id'] == $_POST["user"]) {
        echo "<option value =" . $row['Cat_id'] . " selected>" . $row['Cat_name'] . "</option>";
    } else {
        echo "<option value =" . $row['Cat_id'] . ">" . $row['Cat_name'] . "</option>";
    }
}
?>
                </select>
                <input type="submit" value="Show" name="show" formnovalidate /><br>
                Select Subcategory:<select name="scat">
                    <option value="">SELECT</option>
                    <?php
$s1 = "select * from subcategory";
$result = $conn->prepare($s1);
$result->execute();
$count = $result->rowCount();
//echo $r;

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    if (isset($_POST["show"])) {
        if ($row['Catid'] == $_POST["user"]) {
            echo "<option value =" . $row['Subcatid'] . ">" . $row['Subcatname'] . "</option>";
        }
    }
}
?>
                </select><br>
                Package Price: <input type="text" name="price"><br>
                Upload Pic1: <input type="file" name="pic1"><br>
                Upload Pic2: <input type="file" name="pic2"><br>
                Upload Pic3: <input type="file" name="pic3"><br>
                Details: <input type="textarea" name="detail"><br>
                <input type="submit" name="save" value="Save">
            </form>
<?php
if (isset($_POST['save'])) {
    $packname = $_POST['packname'];
    $category = $_POST['user'];
    $subcategory = $_POST['scat'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];

    $valid_extensions = array('jpeg', 'jpg', 'png');

    $image1 = $_FILES['pic1']['name'];
    $tmp_dir1 = $_FILES['pic1']['tmp_name'];
    $imageSize1 = $_FILES['pic1']['size'];

    $imgExt1 = strtolower(pathinfo($image1, PATHINFO_EXTENSION));

    $pic1 = rand(1000, 1000000) . "." . $imgExt1;
    move_uploaded_file($tmp_dir1, "upload/" . $pic1);

    $image2 = $_FILES['pic2']['name'];
    $tmp_dir2 = $_FILES['pic2']['tmp_name'];
    $imageSize2 = $_FILES['pic2']['size'];

    $imgExt2 = strtolower(pathinfo($image2, PATHINFO_EXTENSION));
    $pic2 = rand(1000, 1000000) . "." . $imgExt2;
    move_uploaded_file($tmp_dir2, "upload/" . $pic2);

    $image3 = $_FILES['pic3']['name'];
    $tmp_dir3 = $_FILES['pic3']['tmp_name'];
    $imageSize3 = $_FILES['pic3']['size'];

    $imgExt3 = strtolower(pathinfo($image3, PATHINFO_EXTENSION));
    $pic3 = rand(1000, 1000000) . "." . $imgExt3;
    move_uploaded_file($tmp_dir3, "upload/" . $pic3);

    $stmt = $conn->prepare('INSERT INTO package(Packname,Category,Subcategory,Packprice,Pic1,Pic2,Pic3,Detail) VALUES (:packname,:cate,:subcate,:price,:pic1,:pic2,:pic3,:detail)');
    $stmt->bindParam(':packname', $packname);
    $stmt->bindParam(':cate', $category);
    $stmt->bindParam(':subcate', $subcategory);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':pic1', $pic1);
    $stmt->bindParam(':pic2', $pic2);
    $stmt->bindParam(':pic3', $pic3);
    $stmt->bindParam(':detail', $detail);
    echo $imgExt1;
    echo $imgExt2;
    echo $imgExt3;
    if ($stmt->execute()) {
        ?>
			<script>
				alert("new record successull");
				window.location.href=('addpack.php');
			</script>
		<?php
} else {
        ?>
			<script>
				alert("Error");
				window.location.href=('dashboard.php');
			</script>
		<?php
}
}
?>

        </main>
        <?php include 'include/sidebar.php'?>
    </div>
</body>

</html>