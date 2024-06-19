<?php
$connection = new PDO('mysql:host=localhost;dbname=travelweb', 'root', '');

if (isset($_POST["bijwerken"])) {
    $sql = "UPDATE travels
            SET itemName = :itemName,
                Prijs = :Prijs,
                description = :description
            WHERE ProductCode = :ProductCode";

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":ProductCode", $_GET['ProductCode']);
    $stmt->bindParam(":itemName", $_POST['itemName']);
    $stmt->bindParam(":Prijs", $_POST['Prijs']);
    $stmt->bindParam(":description", $_POST['description']);
    $stmt->execute();

    header("Location: admin.php");
    exit;
}
?>

<form method='post'>
    <h1>Edit Journey</h1>
    <h2><?php echo isset($travels['itemName']) ? $travels['itemName'] : ''; ?></h2>

    <div>
        <label>Item Name
            <input type="text" name="itemName"
                value="<?php echo isset($product['itemName']) ? $product['itemName'] : ''; ?>" placeholder="Name....">
        </label>
    </div>
    <div>
        <label>Price
            <input type="text" name="Prijs" value="<?php echo isset($product['Prijs']) ? $product['Prijs'] : ''; ?>"
                placeholder="Price....">
        </label>
    </div>
    <div>
        <label>Description
            <input type="text" name="descriptiom"
                value="<?php echo isset($product['description']) ? $product['description'] : ''; ?>"
                placeholder="Desc....">
        </label>
    </div>
    <div>
        <input type="submit" name="bijwerken" value="Submit Changes">
    </div>
</form>