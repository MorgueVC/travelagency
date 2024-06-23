<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacation Website</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>
<div class="page-container">
    <header></header>
    <!-- Tabelinhoud -->
    <?php
    $connection = new PDO('mysql:dbname=travelweb;host=travel_db', 'root', 'rootpassword');
    $sql = "SELECT * FROM `travels`";
    $stmt = $connection->query($sql);
    ?>
    <div class="table-wrapper">
        <nav class="navbar-admin">
            <div class="navbar-solid"></div>
            <a class="button-cover" href="addjourney.php" role="button"><span class="text">Add a journey</span></a>
            <a class="button-cover" href="index.php" role="button"><span class="text"></span><span>Return to index</span></a>
        </nav>
        <table class="fl-table">
            <thead>
            <tr>
                <th>Destination</th>
                <th>Price</th>
                <th>ID</th>
                <th>Description</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($product = ($stmt->fetch())) {
                echo "<tr>";
                echo "<td class='h2'>".  $product['itemName']. "</td>";
                echo "<td class='h2'>".  $product['Prijs']. "</td>";
                echo "<td class='h2'>".  $product['ProductCode']. "</td>";
                echo "<td class='h2'>".  $product['description']. "</td>";
                echo "<td>";
                echo "<a class='h2-link' href='deletejourney.php?ProductCode=". $product['ProductCode']. "'>Click here to delete this trip</a>";
                echo "</td>";
                echo "<td>";
                echo "<a class='h2-link' href='updatejourney.php?ProductCode=". $product['ProductCode']. "'>Click here to edit this trip</a>";
                echo "</td>";
                echo "</tr>";

            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<div class="table-wrapper">
    <nav class="navbar-admin">
        <div class="navbar-solid"></div>
    </nav>
    <table class="fl-table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Username</th>
            <th>Last Name</th>
            <th>Edit User Password</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `member`";
        $stmt = $connection->query($sql);
        ?>
        <?php
        while($product = ($stmt->fetch())) {
            echo "<tr>";
            echo "<td class='h2'>".  $product['firstname']. "</td>";
            echo "<td class='h2'>".  $product['username']. "</td>";
            echo "<td class='h2'>".  $product['lastname']. "</td>";
            echo "<td>";
            echo "<a class='h2-link' href='updatepassword.php?password=". $product['password']. "'>Click here to edit user password</a>";
            echo "</td>";
            echo "</tr>";

        }
        ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>