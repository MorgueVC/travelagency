<?php
$connection = new PDO('mysql:dbname=travelweb;host=localhost', 'root', '');

if (isset($_POST["bijwerken"])) {
    $sql = "INSERT INTO travels (itemName, Prijs, description, ProductCode, image, bestemming, vertrekdatum, accommodatie, vliegtuig, dagenaantal) VALUES (:itemName, :Prijs, :description, :ProductCode, :image, :bestemming, :vertrekdatum, :accommodatie, :vliegtuig, :dagenaantal)";

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":ProductCode", $_POST['ProductCode']);
    $stmt->bindParam(":itemName", $_POST['itemName']);
    $stmt->bindParam(":Prijs", $_POST['Prijs']);
    $stmt->bindParam(":description", $_POST['description']);
    $stmt->bindParam(":image", $_POST['image']);
    $stmt->bindParam(":bestemming", $_POST['bestemming']);
    $stmt->bindParam(":vertrekdatum", $_POST['vertrekdatum']);
    $stmt->bindParam(":accommodatie", $_POST['accommodatie']);
    $stmt->bindParam(":vliegtuig", $_POST['vliegtuig']);
    $stmt->bindParam(":dagenaantal", $_POST['dagenaantal']); // Fix: :dagenaantal instead of :dagenantal

    $stmt->execute();
    header("Location: index.php");
    exit;
}

$ProductCode = isset($_GET['ProductCode'])? $_GET['ProductCode'] : '';
$sql = "SELECT * FROM travels WHERE ProductCode = :ProductCode";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":ProductCode", $ProductCode);
$stmt->execute();
$product = $stmt->fetch();
?>

<form method='post'>
    <h1>Add Journey</h1>
    <h2><?php echo isset($product['itemName'])? $product['itemName'] : '';?></h2>

    <div>
        <label>Item Name
            <input type="text" name="itemName"
                   value="<?php echo isset($product['itemName'])? $product['itemName'] : '';?>" placeholder="Name....">
        </label>
    </div>
    <div>
        <label>Price
            <input type="text" name="Prijs" value="<?php echo isset($product['Prijs'])? $product['Prijs'] : '';?>"
                   placeholder="Price....">
        </label>
    </div>
    <div>
        <label>Product Code
            <input type="text" name="ProductCode"
                   value="<?php echo isset($product['ProductCode'])? $product['ProductCode'] : '';?>"
                   placeholder="Code....">
        </label>
    </div>
    <div>
        <label>Description
            <input type="text" name="description"
                   value="<?php echo isset($product['description'])? $product['description'] : '';?>"
                   placeholder="DT....">
        </label>
        <label>Image
            <input type="text" name="image"
                   value="<?php echo isset($product['image'])? $product['image'] : '';?>"
                   placeholder="DT....">
        </label>
    </div>
    <div>
        <label>Bestemming
            <input type="text" name="bestemming"
                   value="<?php echo isset($product['bestemming'])? $product['bestemming'] : '';?>"
                   placeholder="Bestemming....">
        </label>
    </div>
    <div>
        <label>Vertrekdatum
            <input type="date" name="vertrekdatum"
                   value="<?php echo isset($product['vertrekdatum'])? $product['vertrekdatum'] : '';?>"
                   placeholder="Vertrekdatum....">
        </label>
    </div>
    <div>
        <label>Accommodatie
            <input type="text" name="accommodatie"
                   value="<?php echo isset($product['accommodatie'])? $product['accommodatie'] : '';?>"
                   placeholder="Accommodatie....">
        </label>
    </div>
    <div>
        <label>Vliegtuig
            <input type="text" name="vliegtuig"
                   value="<?php echo isset($product['vliegtuig'])? $product['vliegtuig'] : '';?>"
                   placeholder="Vliegtuig....">
        </label>
    </div>
    <label>Dagenaantal
        <input type="text" name="dagenaantal"
               value="<?php echo isset($product['dagenaantal'])? $product['dagenaantal'] : '';?>"
               placeholder="dagenaantal....">
    </label>
    <div>
        <input type="submit" name="bijwerken" value="Submit Changes">
    </div>
    <div>
</form>