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
            <h1>Update Category</h1>
            <form action="updatecat.php" method="post">
                Category Name: <select name="t1" required>
                    <option value="">Select</option>
                    <?php
                        $s="SELECT * FROM category";
                        $stmt=$conn->prepare($s);
                        $stmt->execute();

                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            if(isset($_POST['show']) && $row['cat_id']==$_POST['t1']){
                                echo "<option value =" . $row['Cat_id'] . " selected>" . $row['Cat_name'] . "</option>";
                            }else {
                                echo "<option value =" . $row['Cat_id'] . ">" . $row['Cat_name'] . "</option>";
                            }
                        }
                    ?>
                </select>
                <input type="submit" value="Show" name="show" formnovalidate/>
                <?php
                    if(isset($_POST['show'])){
                        $s="SELECT * FROM category WHERE Cat_id ='".$_POST['t1']."'";
                        $stmt=$conn->prepare($s);
                        $stmt->execute();
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        $Cat_id = $result['Cat_id'];
                        $Cat_name = $result['Cat_name'];
                    }
                ?>
                Category Name: <input type="text" name="t2" 
                value="<?php 
                if(isset($_POST['show'])){
                    echo $Cat_name;}
                ?>">
                <input type="submit" name="save" value="Update">
            </form>
            <?php
                 if(isset($_POST['save'])){
                    $s="UPDATE category SET Cat_name ='".$_POST['t2']."' WHERE Cat_id='".$_POST['t1']."'";
                    $stmt=$conn->prepare($s);
                    $stmt->execute();
                    echo "<script>alert('Record Updated');</script>";
                }
            ?>
        </main>
        <?php include('include/sidebar.php') ?>
    </div>
</body>

</html>