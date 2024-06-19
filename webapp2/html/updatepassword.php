<?php
session_start(); // Start de sessie om de gebruikersnaam op te halen

global $connection;
$connection = new PDO('mysql:dbname=travelweb;host=localhost', 'root', '');

if (isset($_GET["username"]) &&!empty($_GET["username"])) {
    $username = $_GET["username"];

    if (isset($_POST["bijwerken"])) {
        $newPassword = $_POST['password'];

        // Basisvalidatie voor het nieuwe wachtwoord
        if (empty($newPassword) || strlen($newPassword) < 8) {
            $_SESSION['error_message'] = "Nieuw wachtwoord moet minimaal 8 tekens lang zijn.";
            header("Location: updatepassword.php?username=$username"); // Redirect terug naar de wijzigingspagina
            exit;
        }

        $stmt = $connection->prepare("UPDATE member SET password = :new_password WHERE username = :username");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":new_password", $newPassword);
        $stmt->execute();

        $_SESSION['success_message'] = "Wachtwoord succesvol gewijzigd."; // Stel een success message in
        header("Location: admin.php");
        exit;
    }
}
?>


<form method='post'>
    <h1>Edit User Password</h1>
    <h2><?php echo isset($_SESSION['username'])? $_SESSION['username'] : '';?></h2>

    <div>
        <label>Nieuw Wachtwoord:
            <input type="password" name="password" placeholder="Type nieuw wachtwoord..." required>
        </label>
        <div>
            <input type="hidden" name="username" value="<?php echo isset($_SESSION['username'])? $_SESSION['username'] : '';?>">
            <input type="submit" name="bijwerken" value="Submit Changes">
        </div>
</form>