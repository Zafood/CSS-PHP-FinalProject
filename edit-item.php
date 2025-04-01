<?php
require './inc/header.php';
require_once './inc/database.php';

$product_id = $_POST['product_id'] ?? '';

// Prepare SQL statement to fetch product details
$sql = "SELECT * FROM products WHERE product_id = ?";
$sql = $conn->prepare($sql);
$sql->execute([$product_id]);
$count = $sql->rowCount();  

// Check if product exists
if ($count == 1) {
    $product = $sql->fetch(PDO::FETCH_ASSOC); // Fetch product details
    $product_name = htmlspecialchars($product['product_name']);
    $description = htmlspecialchars($product['description']);
    $stock = htmlspecialchars($product['stock']);

    echo "<form method='post' action='./inc/resave-item.php'>";
        echo "<p><input name='product_name' type='text' value='$product_name' placeholder='$product_name' required /></p>";
        echo "<p><input name='description' type='text' value='$description' placeholder='$description' required /></p>";
        echo "<p><input name='stock' type='number' value='$stock' placeholder='$stock' required /></p>";
        echo "<input type='hidden' name='product_id' value='$product_id' />";
        echo "<input type='submit' value='Submit' />";
    echo "</form>";
} else {
    echo "<p>Product not found.</p>";
    
}

require './inc/footer.php';
?>
