<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizone Events</title>
    <link rel="stylesheet" href="CSS/style.css"/>

    <style>
        body {
            min-height: 100vh;
            margin: 0;
        }
        .navar-text{
            background-color: #00AADD;
            width: 100%;
            position: relative;
            padding: 20px;
            border-radius: 10px;
            display: flex;

        }
        .navbar {
            background-color: white;
            padding: 10px 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: relative;
            top: 0;
            z-index: 100;
            margin-bottom: 50px;
            gap: 50px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            font-size: 1em;
            transition: background-color 0.3s ease;
            border-radius: 10px;
        }

        .navbar a:hover {
            background-color: #007B9F;
        }

        .search-box {
            display: flex;
            align-items: center;
            flex: 1;
            justify-content: end;
        }

        .search-box button {
            background-color: #026e8f;
            border: none;
            cursor: pointer;
            outline: none;
            margin-right: 5px;
            border-radius: 20px;
            padding: 10px;
        }

        .search-box input[type="text"] {
            padding: 6px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
            margin-right: 10px;
        }


        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }

            .navbar a {
                padding: 8px 12px;
            }

            .search-box input[type="text"] {
                width: 150px;
            }
        }

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
        }

        .card-content {
            padding: 16px;
        }

        .card-image {
        }

        .card-image img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .price {
            font-size: 1.2em;
            font-weight: bold;
            margin: 0;
        }

        .description {
            margin: 8px 0 0;
        }
        .Main-logo{
            width: 150px;
            height: 150px;
        }
        .book-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            color: white;
            font-size: 1em;
            transition: background-color 0.3s ease, border-color 0.5s ease;
        }
        .button-book{
            background-color: #00AADD;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;

        }
        .book-button:hover {
            background-color: #00e1ff;
            border-color: #00e1ff;
            border-radius: 10px;
        }

        .card {
            position: relative;
        }


        .fixed-footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #00AADD;
            color: white;
            text-align: center;
            padding: 10px 0;
            height: 60px;
        }

        .footer-content {
            width: 80%;
            margin: 0 auto;
        }

        .footer-links {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .footer-links li a {
            color: white;
            text-decoration: none;
        }

        .footer-links li a:hover {
            color: #ddd;
        }
        .Destination{
            margin-left: 15px;
            font-size: 20px;
        }
        .navar-text{
            background-color: #00AADD;
            width: 100%;
            position: relative;
            padding: 20px;
            border-radius: 10px;
            display: flex;
        }
        .navbar {
            background-color: white;
            padding: 10px 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: relative;
            top: 0;
            z-index: 100;
            margin-bottom: 50px;
            gap: 50px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            font-size: 1em;
            transition: background-color 0.3s ease;
            border-radius: 10px;
        }
        .navbar a:hover {
            background-color: #007B9F;
        }
        .search-button{
            background-color: #00AADD;
            border-radius: 10px;
        }
        .search-box {
            display: flex;
            align-items: center;
            flex: 1;
            justify-content: end;
        }
        .search-box button {
            background-color: #026e8f;
            border: none;
            cursor: pointer;
            outline: none;
            margin-right: 5px;
            border-radius: 20px;
            padding: 10px;
        }
        .search-box input[type="text"] {
            padding: 6px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
            margin-right: 10px;
        }
        .search-bar {
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .search-item {
            display: flex;
            align-items: center;
            margin-right: 10px;
            gap: 5px;
        }

        .search-item:last-child {
            margin-right: 0;
        }

        .search-item.icon {
            font-size: 18px;
            color: #888;
        }

        .search-item input {
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 5px;
            outline: none;
            width: 200px;
            font-size: 14px;
        }

        .search-item input:focus {
            border-color: #007bff;
        }
        .destination-details p {
            margin-bottom: 10px;
            line-height: 1.5;
            font-family: Arial, sans-serif;
            font-size: 1em;
            color: #333;
        }

        .bestemming {
            font-weight: bold;
            color: #0056b3;
        }

        .vertrekdatum {
            font-style: italic;
            color: #008080;
        }

        .accommodat
        }
        .vliegtuig {
            color: #006699;
        }

        .dagenaantal {
            font-weight: bold;
            color: #cc0000;
        }

    </style>
</head>
<body>
<header>
    <h1>Horizon Events</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="bookings.php">Bookings</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="OverOns.php">Over ons</a></li>
        </ul>
    </nav>
</header>

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
            <input type name="dagenaantal" placeholder="Dagenaantal">
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

        // Aangepaste SQL-query om te zoeken naar matches die beginnen met de ingevoerde termen
        $sql = "SELECT * FROM travels WHERE itemName LIKE? AND vertrekdatum LIKE? AND accommodatie LIKE? AND vliegtuig LIKE? AND dagenaantal LIKE?";

        $stmt = $connection->prepare($sql);
        $stmt->execute([
            '%'. $bestemming. '%',
            '%'. $vertrekdatum. '%',
            '%'. $accommodatie. '%',
            '%'. $vliegtuig. '%',
            '%'. $dagenaantal. '%'
        ]);

        // Fetching results
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
            echo "<div class='parent-flex'>";
            foreach ($results as $row) {
                echo "<div class='card'>";
                echo "<div class='card-image'>";
                echo "<img src='img/hotelAlbatros.png' alt='Travel Image'>";
                echo "</div>";
                echo "<p class='Destination'>".htmlspecialchars($row["itemName"])."</p>";
                echo "<div class='card-content'>";
                echo "<p class='price'>".htmlspecialchars($row["Prijs"])."</p>";
                echo "<p class=''>".htmlspecialchars($row["bestemming"])."</p>";
                echo "<p class=''>".htmlspecialchars($row["vertrekdatum"])."</p>";
                echo "<p class=''>".htmlspecialchars($row["accommodatie"])."</p>";
                echo "<p class=''>".htmlspecialchars($row["vliegtuig"])."</p>";
                echo "<p class=''>".htmlspecialchars($row["dagenaantal"])."</p>";
                echo "<p class='description'>".htmlspecialchars($row["description"])."</p>";
                echo "</div>";
                echo "<div class='book-button'><button class='button-book'>Book</button></div>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "Geen resultaten gevonden";
        }
    } catch(PDOException $error) {
        die("Database connection failed: ". $error->getMessage());
    }

    $connection = null;
   ?><footer>
    <p>© 2023 Horizon Events</p>
</footer>
</body>
</html>
