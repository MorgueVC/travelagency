<?php
    session_start();
    require('conn.php');
 
    if(isset($_POST['register'])){
        if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
            try{
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "INSERT INTO member (firstname, lastname, username, password) 
        VALUES ('$firstname', '$lastname', '$username', '$password')";
                $conn ->exec($sql);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            $_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
            $conn = null;
            header('location:index.php');
        }else{
            echo "
                <script>alert('Please fill up the required field!')</script>
                <script>window.location = 'registration.php'</script>
            ";
        }
    }
?>