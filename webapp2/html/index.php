<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizon Events</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>
<img class="Main-logo" src="/webapp2/html/img/horizoneevents.png" alt="Horizon Events">
<div class="navbar">
    <a href="#">Zomervakantie</a>
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
<main>
    <div class="info-container">
    <div class="box-info">
    <h2>Welkom bij Horizon Events</h2>
    <p>Uw partner in het organiseren van onvergetelijke reizen!</p>
    <div class="home-info-box">
    <p class="home-info"> Welkom bij Horizone Events, waar we je helpen om de wereld te verkennen en onvergetelijke reiservaringen te creëren. Onze passie is het samenbrengen van mensen met de beste bestemmingen ter wereld, zodat ze kunnen genieten van unieke cultuurbeleving, natuurlijke schoonheid en authentieke ervaringen. Of je nu op zoek bent naar een ontspannen strandvakantie, een avontuurlijke trektocht door de wildernis, of een diepgaande cultuurtrip, wij hebben alles wat je nodig hebt om je reis van dromen te maken tot werkelijkheid.</p>
    </div>
    </div>
    </div>
        <div class="deals-container">
        <div class="deals-box">
            <div class="box-content">
                <a class="deals-button" href="bookings.php">See Deals</a>
            </div>
        </div>
        <div class="deals1-box">
            <div class="box-content">
                <a class="deals-button" href="bookings.php">See Deals</a>
            </div>
        </div>
        <div class="deals2-box">
            <div class="box-content">
                <a class="deals-button" href="bookings.php">See Deals</a>
            </div>
        </div>
    </div>
</main>
<div class="weather-cards">
    <div class="weather-card">
        <h2 id="city-1"></h2>
        <img id="icon-1" src="/webapp2/html/img/son.png" alt="Weather icon">
        <p id="temp-1"></p>
        <p id="condition-1"></p>
    </div>
    <div class="weather-card">
        <h2 id="city-2"></h2>
        <img id="icon-2" src="/webapp2/html/img/son.png" alt="Weather icon">
        <p id="temp-2"></p>
        <p id="condition-2"></p>
    </div>
    <div class="weather-card">
        <h2 id="city-3"></h2>
        <img id="icon-3" src="/webapp2/html/img/son.png" alt="Weather icon">
        <p id="temp-3"></p>
        <p id="condition-3"></p>
    </div>
</div>
<footer>
    <a class="privacy-voorwaarden" href="OverOns.php">Privacy</a>
    <a class="privacy-voorwaarden" href="OverOns.php">Algemene Voorwaarden</a>
    <p>© 2023 Horizon Events</p>
</footer>
</body>
<script>
    const cities = ["Paris", "Rome", "Barcelona", "Amsterdam", "London", "Berlin", "Prague", "Athens"];
    const weatherIcons = ["/webapp2/html/img/son.png", "/webapp2/html/img/son.png", "/webapp2/html/img/son.png", "/webapp2/html/img/son.png"];
    const weatherConditions = ["Sunny", "Partly Cloudy", "Rainy"];

    function generateWeatherCard(cardId) {
        const city = cities[Math.floor(Math.random() * cities.length)];
        const icon = weatherIcons[Math.floor(Math.random() * weatherIcons.length)];
        const temp = Math.floor(Math.random() * 30) + 10;
        const condition = weatherConditions[Math.floor(Math.random() * weatherConditions.length)];

        document.getElementById(`city-${cardId}`).textContent = city;
        document.getElementById(`icon-${cardId}`).src = icon;
        document.getElementById(`temp-${cardId}`).textContent = `${temp}°C`;
        document.getElementById(`condition-${cardId}`).textContent = condition;
    }

    generateWeatherCard(1);
    generateWeatherCard(2);
    generateWeatherCard(3);
</script>
</html>