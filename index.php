<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/6en8XCp+HHAAK5ZWvNpWmZx5J7tXVgP4cQ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<img class="Main-logo" src="img/horizoneevents.png" alt="Horizon Events">
<div class="navbar">
    <a href="#">Zomervakantie</a>
    <a href="bookings.php">Bookings</a>
    <?php if (isset($_SESSION['username'])): ?>
        <a href="logout.php">Log Out</a>
        <span>Welkom <?php echo $_SESSION['username']; ?></span>
    <?php else: ?>
        <a href="login.php">Log In</a>
    <?php endif; ?>
    <a href="#">Over ons</a>
</div>
<header>
    <div class="travelimg-box">
        <div class="travel-image">
            <img src="img/travelimg.png" alt="travelimg">
            <div class="hero-text">
                <h1 style="font-size: 40px;">Choosing Your Travel Dates</h1>
                <p>Flexible Dates Be open to adjusting your travel dates to find the best deals and availability</p>
                <p>Peak vs Off-Season Consider traveling during the off-season to avoid crowds and take advantage of lower prices.</p>
            </div>
        </div>
    </div>
</header>
<div class="container-weather">
    <div class="card">
        <div class="container">
            <div class="cloud front">
                <span class="left-front"></span>
                <span class="right-front"></span>
            </div>
            <span class="sun sunshine"></span>
            <span class="sun"></span>
            <div class="cloud back">
                <span class="left-back"></span>
                <span class="right-back"></span>
            </div>
        </div>
        <div class="card-header">
            <span>Amethyst, Istanbul<br>Turkije</span>
            <span>March 13</span>
        </div>
        <span class="temp">31°</span>
        <div class="temp-scale">
            <span>Celcius</span>
        </div>
    </div>
</div>
<div class="button-container">
    <button class="animated-button">
        <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
        </svg>
        <span class="text">More info</span>
        <span class="circle"></span>
        <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
        </svg>
    </button>

</div>
<div class="home-Deals-box">
    <div class="home-pageinfo">
        <div class="info-box">
            <h1>Choosing Your Travel Dates</h1>
            <p>Flexible Dates - Be open to adjusting your travel dates to find the best deals and availability.</p>
            <p>Peak vs. Off-Season - Consider traveling during the off-season to avoid crowds and take advantage of lower prices.</p>
            <section class="reasons">
                <h2>Daarom kies je voor Horizone Events</h2>
                <p>Online géén boekingskosten - €34,50 op alle vakanties wanneer je online bij Horizon Events boekt!</p>
                <p>Altijd de beste deal - Supersnel vind en vergelijk je bij ons de allerbeste deals van verschillende aanbieders.</p>
                <p>Veilig op vakantie - Horizon Events is aangesloten bij SGR, ANVR en Calamiteitenfonds.</p>
            </section>
            <footer>
                <h2>Ruim 75 reisbureaus</h2>
                <p>Kom je er niet uit? Wij helpen je graag verder. Telefonisch, online of in één van onze reisbureaus.</p>
                <button class="over-ons-button">See More</button>
            </footer>
        </div>
    </div>
    <div class="booking-container">
        <div class="booking-card">
            <img src="img/ItalieHotelRivera.png" alt="Afbeelding beschrijving">
            <div class="title-deals">
                <h2>Spanje Deals</h2>
                <h3>Je kan al binnen enkele dagen super last minute vertrekken! Is dat té last minute? Volgende week is uiteraard ook mogelijk.</h3>
                <button class="booking-button">Alle deals</button>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer-container">
        <div class="footer-left">
            <p>&copy; 2024 Horizone Events. All rights reserved.</p>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-right">
            <p>Follow us:</p>
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>