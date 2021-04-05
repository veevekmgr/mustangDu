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
            <h1>Category</h1>
            <h1>Add Sub-Category</h1>
            <form action="addsubcat.php" method="post">
                SubCategory Name:<input type="text" name="t1"><br>
                Category Name: <select name="t2" required>
                    <option value="">Select</option>
                    <?php
$s = "SELECT * FROM category";
$stmt = $conn->prepare($s);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value =" . $row['Cat_id'] . ">" . $row['Cat_name'] . "</option>";
}
?>
                </select>
                Upload Image: <input type="file" name="profile"><br>
                Details: <input type="text" name="t4">
                <input type="submit" name="save" value="Save">
            </form>

            <?php
if (isset($_POST['save'])) {
    $subcatname = $_POST['t1'];
    $catname = $_POST['t2'];
    $detail = $_POST['t4'];

    $images = $_FILES['profile']['name'];
    $tmp_dir = $_FILES['profile']['tmp_name'];
    $imageSize = $_FILES['profile']['size'];

    $upload_dir = 'packimages/admin/' . $images;
    $imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png');
    $picProfile = rand(1000, 1000000) . "." . $imgExt;
    move_uploaded_file($tmp_dir, $upload_dir . $picProfile);
    $stmt = $conn->prepare('INSERT INTO subcategory(Subcatname,Catid,Pic,Detail) VALUES (:subcatname,:catname,:upic,:detail)');
    $stmt->bindParam(':subcatname', $subcatname);
    $stmt->bindParam(':catname', $catname);
    $stmt->bindParam(':upic', $picProfile);
    $stmt->bindParam(':detail', $detail);

    if ($stmt->execute()) {
        ?>
			<script>
				alert("new record successull");
				window.location.href=('dashboard.php');
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