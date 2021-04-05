<?php
try {
    include './include/dbconn.php';
    function getPosts()
    {
        $posts = array();
        $posts[0] = $_POST['fullname'];
        $posts[1] = $_POST['address'];
        $posts[2] = $_POST['contact'];
        $posts[3] = $_POST['email'];
        $posts[4] = $_POST['username'];
        $posts[5] = $_POST['password'];
        $posts[6] = $_POST['conPass'];
        return $posts;
    }
    if (isset($_POST['submit'])) {
        $data = getPosts();
        if ($data[5] == $data[6]) {
            $username = $data[4];
            $query = "SELECT username FROM users WHERE username='$username'";
            $selectStmt = $conn->prepare($query);
            $selectStmt->execute();
            $numrow = $selectStmt->rowCount();
            if ($numrow > 0) {
                echo "<script type='text/javascript'>alert('Username Already Taken');document.location='./register.php'</script>";
            } else {

                $sql = "INSERT INTO users(fullname,address,mobilenumber,email,username,password) VALUES (:fullname,:address,:contact,:email,:username,:password)";
                $insertStmt = $conn->prepare($sql);
                $insertStmt->execute(array(
                    ':fullname' => $data[0],
                    ':address'  => $data[1],
                    ':contact'  => $data[2],
                    ':email'    => $data[3],
                    ':username' => $data[4],
                    ':password' => $data[5]
                ));
                if ($insertStmt)
                    echo "<script type='text/javascript'>alert('Register Successfully');document.location='./register.php'</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Password not matched');document.location='./register.php'</script>";
        }
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
