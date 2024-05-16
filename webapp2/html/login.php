<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="CSS/style.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">Horizon Events Log-In</h3>
        <img class="horizon-logo" src="media/output.png">
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
            <script>
                (function() {
                    setTimeout(function(){
                        document.querySelector('.msg').remove();
                    },3000)
                })();
            </script>
            <?php 
                endif;
                unset($_SESSION['message']);
            ?>
            <form action="login_query.php" method="POST">   
                <h4 class="text-success">Login here...</h4>
                <hr style="border-top:1px groovy #000;">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <br />
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="login">Login</button>
                </div>
                <a href="registration.php">Dont have an account? Click here to register.<//a>
            </form>

        </div>
    </div>
</body>
</html>
