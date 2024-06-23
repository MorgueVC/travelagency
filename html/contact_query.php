<?php

include('conn.php');

if(isset($_POST['form'])){

    if($_POST['name'] != "" || $_POST['email'] != "" || $_POST['message'] != ""){
        try{
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $sql = "INSERT INTO submit (name, email, message) VALUES (:name, :email, :message)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            $stmt->execute();

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $_SESSION['message']=array("text"=>"Form was submitted!","alert"=>"info");
        $conn = null;
    }else{
        echo "
                <script>alert('Please fill up the required field!')</script>
            ";
    }
}
?>