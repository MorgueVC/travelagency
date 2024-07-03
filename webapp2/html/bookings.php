<?php session_start();?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizone Events</title>
    <link rel="stylesheet" href="CSS/style.css"/>
    <style>
        .parent-flex{
            flex-wrap: wrap;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 100px;

        }
        table {
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
            background-image: linear-gradient(to right, rgba(0, 42, 255, 0.19) 0%, rgba(0, 128, 255, 0.39) 100%);

        }

        .card-content {
            padding: 16px;
        }

        .card-image img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .price {
            font-size: 1.2em;
            font-weight: bold;
            margin: 10px;
        }

        .description {
            padding: 10;
            margin-left: 10px;
            text-decoration: none;
        }
        .info-reis{
            margin-left: 10px;
        }

        .card {
            position: relative;
        }
    </style>
</head>
<body>
<img class="Main-logo" src="/webapp2/html/img/horizoneevents.png" alt="Horizon Events">
<div class="navbar">
    <a href="index.php">Zomervakantie</a>
    <a href="bookings.php">Bookings</a>
    <a href="OverOns.php">Over ons</a>
    <div class="login-alert">
        <?php if (isset($_SESSION['username'])):?>
            <a href="logout.php">Log Out</a>
            <a href="accountmanagement.php">Account</a>
            <span>Welkom <?php echo $_SESSION['username'];?></span>
        <?php else:?>
            <a href="login.php">Log In</a>
        <?php endif;?>
    </div>
</div>
<form action="bookings.php" method="get">
    <div class="search-bar">
        <div class="search-item">
            <span class="icon">❄️</span>
            <input type="text" name="bestemming" placeholder="Bestemming">
        </div>
        <div class="search-item">
            <span class="icon">📅</span>
            <input type="datetime-local" name="vertrekdatum" placeholder="Vertrekdatum">
        </div>
        <div class="search-item">
            <span class="icon">🏨</span>
            <input type="text" name="accommodatie" placeholder="Accommodatie">
        </div>
        <div class="search-item">
            <span class="icon">✈️</span>
            <input type="text" name="vliegtuig" placeholder="Vliegtuig">
        </div>
        <div class="search-item">
            <span class="icon">⏳</span>
            <input type="number" name="dagenaantal" placeholder="Dagenaantal">
        </div>
        <button class="search-button" type="submit">BEKIJK ADRESJES</button>
    </div>
</form>
<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=travelweb', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $bestemming = $_GET['bestemming']?? '';
    $vertrekdatum = $_GET['vertrekdatum']?? '';
    $accommodatie = $_GET['accommodatie']?? '';
    $vliegtuig = $_GET['vliegtuig']?? '';
    $dagenaantal = $_GET['dagenaantal']?? '';
    $itemName = $_GET['itemName']?? '';

    $sql = "SELECT *  FROM travels WHERE 1=1";
    $params = [];

    if ($itemName) {
        $sql.= " AND itemName =?";
        $params[] = $itemName;
    }

    $stmt = $connection->prepare($sql);
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() > 0) {
        echo "<div class='parent-flex'>";
        foreach ($results as $row) {
            echo "<div class='card'>";
            echo "<div class='card-image'>";
            echo "<img src='/webapp2/html/img/". ($row["image"]?? ''). "' alt='". ($row["itemName"]?? ''). "'>";
            echo "<div class='card-content'>";
            echo "</div>";
            echo "<p class='Destination'><a href='bookings.php?itemName=". ($row["itemName"]?? '')."&bestemming=". ($bestemming)."&vertrekdatum=". ($vertrekdatum)."&accommodatie=". ($accommodatie)."&vliegtuig=". ($vliegtuig)."&dagenaantal=". ($dagenaantal)."'>". ($row["itemName"]?? ''). "</a></p>";
            echo "<p class='price'>". ($row["Prijs"]?? ''). "</p>";
            echo "<p class='description'>". ($row["description"]?? ''). "</p>";

            if (isset($_GET['itemName']) && $_GET['itemName'] == $row["itemName"] && isset($row["ProductCode"])) {
                echo "<p class='info-reis'>". ($row["vertrekdatum"]?? ''). "</p>";
                echo "<p class='info-reis'>". ($row["accommodatie"]?? ''). "</p>";
                echo "<p class='info-reis'>". ($row["vliegtuig"]?? ''). "</p>";
                echo "<p class='info-reis'>". ($row["dagenaantal"]?? ''). " dagen</p>";
                echo "<form action='ratings.php' method='POST' class='book-button'>
                    <input type='hidden' id='ProductCode' name='ProductCode' value='". $row["ProductCode"]. "'>
                    <button class='button-book'>Book</button>
                </form>";
            }
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "Geen resultaten gevonden";
    }
} catch (PDOException $error) {
    die("Database connection failed: ". $error->getMessage());
}
?>
<footer>
    <a class="privacy-voorwaarden" href="OverOns.php">Privacy</a>
    <a class="privacy-voorwaarden" href="OverOns.php">Algemene Voorwaarden</a>
    <p>© 2023 Horizon Events</p>
</footer>
</body>
</html>
