<?php
   $connection = new PDO('mysql:dbname=travelweb;host=travel_db', 'root', 'rootpassword');

if (isset($_POST["bijwerken"])) {
    $sql = "INSERT INTO travels (itemName, Prijs, description, ProductCode)
        VALUES (:itemName, :Prijs, :description, :ProductCode)";

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":ProductCode", $_POST['ProductCode']);
    $stmt->bindParam(":itemName", $_POST['itemName']);
    $stmt->bindParam(":Prijs", $_POST['Prijs']);
    $stmt->bindParam(":description", $_POST['description']);
    $stmt->execute();
    header("Location: travels.php");
    exit;
}
$sql = "SELECT * FROM travels WHERE ProductCode = :ProductCode";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":ProductCode", $_GET['ProductCode']);
$stmt->execute();
$product = $stmt->fetch();
?>

<form method='post'>
    <h1>Add Journey</h1>
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
        <label>Product Code
            <input type="text" name="ProductCode"
                value="<?php echo isset($product['ProductCode']) ? $product['ProductCode'] : ''; ?>"
                placeholder="Code....">
        </label>
    </div>
    <div>
        <label>Description
            <input type="text" name="description"
                value="<?php echo isset($product['description']) ? $product['description'] : ''; ?>"
                placeholder="DT....">
        </label>
    </div>
    <div>
        <input type="submit" name="bijwerken" value="Submit Changes">
    </div>
</form>