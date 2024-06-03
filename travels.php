<link rel="stylesheet" href="CSS/style.css"/>
<header>
</header>
<body>
    <div class='navbar-admin'>
        <div class='navbar-solid'></div>
        <a class="button-cover" href="addjourney.php" role="button"><span class="text"></span><span>Add a journey</span> </a>
        <a class="button-cover" href="index.php" role="button"><span class="text"></span><span>Return to index</span> </a>
        </div>
<?php
   $connection = new PDO('mysql:dbname=travelweb;host=travel_db', 'root', 'rootpassword');

    $sql = "SELECT * FROM `travels`";
    $stmt = $connection->query($sql);

?>
<div class="table-wrapper">
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
                   echo "<td class='h2'>" .  $product['itemName'] . "</td>";

                   echo "<td class='h2'>" .  $product['Prijs'] . "</td>";

                   echo "<td class='h2'>" .  $product['ProductCode'] . "</td>";

                   echo "<td class='h2'>" .  $product['description'] . "</td>";

               echo "<td>";
               echo "<a class='h2-link' href='deletejourney.php?ProductCode=" . $product['ProductCode'] . "'>Click here to delete this trip</a>";
               echo "</td>";

               echo "<td>";
               echo "<a class='h2-link' href='updatejourney.php?ProductCode=" . $product['ProductCode'] . "'>Click here to edit this trip</a>";
               echo "</td>";

               echo "</tr>";
                   }


            ?>

        </tbody>
    </table>
</div>
</body>