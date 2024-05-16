<!DOCTYPE html>
<html lang="en">
    <head>
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
<body>  
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">Registration</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="register_query.php" method="POST">    
                <h4 class="text-success">Register here...</h4>
                <hr style="border-top:1px groovy #000;">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" />
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" />
                </div>
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
                    <button class="btn btn-primary form-control" name="register">Register</button>
                </div>
                <a href="login.php">Login</a>
            </form>
        </div>
    </div>
</body>
</html>
