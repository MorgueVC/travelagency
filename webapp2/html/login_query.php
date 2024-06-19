<?php
    session_start();
    
    require_once 'conn.php';
    
    if(isset($_POST['login'])) {
        if($_POST['username'] != "" || $_POST['password'] != "") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=?";
            $query = $conn->prepare($sql);
            $query->execute(array($username, $password));
            $row = $query->rowCount();
            $fetch = $query->fetch();
            if($row > 0) {
                $_SESSION['user'] = $fetch['firstname'];
                header("Location: index.php");
                exit();
            } else {
                echo "<script>alert('Invalid username or password')</script>";
            }
        } else {
            echo "<script>alert('Please complete the required fields!')</script>";
        }
    }
?>