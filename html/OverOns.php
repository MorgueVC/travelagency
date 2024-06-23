<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons</title>
    <link rel="stylesheet" href="CSS/style.css"/>

</head>
<img class="Main-logo" src="img/horizoneevents.png" alt="Horizon Events">
<div class="navbar">
    <a href="index.php">Zomervakantie</a>
    <a href="bookings.php">Bookings</a>
    <a href="OverOns.php">Over ons</a>
    <div class="login-alert">
        <?php if (isset($_SESSION['username'])): ?>
            <a href="logout.php">Log Out</a>
            <a href="accountmanagement.php">Account</a>
            <span>Welkom <?php echo $_SESSION['username']; ?></span>
        <?php else: ?>
            <a href="login.php">Log In</a>
        <?php endif; ?>
    </div>
</div>
<body>
<div class="history-section">
    <h1>Onze Historie</h1>
    <p>Het begon met een kassabon.. En vervolgde met een 10-daagse busreis naar Italië In 1965 werd er een spaaractie in de supermarkt van Samuel En Stan gehouden: klanten konden kassabonnen sparen voor korting op een busreis naar het Italiaanse Gardameer.</p>
    <p>Vanaf dat moment groeide Horizone Events uit tot een toonaangevend reisbureau, bekend om zijn innovatieve aanpak en passie voor reizen. Onze missie is altijd geweest om onze klanten de mooiste reiservaringen te bieden, en dat blijft onze hoogste prioriteit.</p>
</div>
<div class="history-section">
    <h2>Groot Succes en Groei</h2>
    <p>Deze actie was zo’n groot succes - mede door de lage prijs van 97,50,- gulden p/p - dat niet lang daarna het allereerste reisbureau van Horizone Events, toen nog H-Tours, aan de Heyendaalseweg opende.</p>
    <p>Met de opening van onze eerste filiaal hebben we de weg vrijgemaakt voor een decennium van constante groei en ontwikkeling. We hebben ons stevig vastgehouden aan onze kernwaarden: kwaliteit, flexibiliteit en klantgerichtheid, wat ons heeft geholpen om een solide reputatie op te bouwen in de reisbranche.</p>
</div>
<div class="history-section">
    <h2>Expansie en Focus</h2>
    <p>Al snel volgden reisbureaus in andere grote steden van Nederland. H-Tours verkocht diverse bus-, boot- en vliegreizen via ANVR-reisagenten en in eigen reisbureaus. In 1983 besloot H-Tours zich volledig te focussen op de keten van reisbureaus en werd er gekozen voor een full-service reisbureau: Horizone Events.</p>
    <p>De expansie naar verschillende locaties heeft ons in staat gesteld om een breder scala aan reizen aan te bieden, terwijl we ons bleven concentreren op het leveren van persoonlijke en gepersonaliseerde diensten aan onze klanten. Dit heeft geleid tot een sterke relatie met onze klanten, die we koesteren en continu willen verbeteren.</p>
</div>

<div class="history-section success-story">
    <h2>Samenvatting en Toekomst</h2>
    <p>Sinds 1 juli 2021 maakt Horizone Events onderdeel uit van Prijsvrij Vakanties. Goede service, een groot, onafhankelijk assortiment én scherpe prijzen zijn altijd de uitgangspunten van Horizone Events gebleven. Met ons eigen label H-holidays bij reisorganisator Sunmix International GmbH en fysieke winkels die hun vertrouwde klanten weer mogen verwelkomen, is de doorstart van het merk Horizone Events zeer voorspoedig verlopen. Op deze manier gaan we een mooie, veelbelovende toekomst tegemoet!</p>
    <p>We kijken ernaar uit om onze reiservaringen verder te verfijnen en nieuwe, spannende bestemmingen te ontdekken. Onze toekomstige plannen omvatten het introduceren van duurzame reisperks en het aanbieden van exclusieve pakketten die onze klanten unieke reismomenten bieden. We blijven ons inspannen om de beste reiservaringen te creëren, zowel nu als in de toekomst.</p>
</div>
<footer>
    <p>© 2023 Horizon Events</p>
</footer>
</body>
</html>