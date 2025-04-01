<?php
  require_once 'database.php';

  $product_id = $_POST['product_id'];
  $name = $_POST['product_name'];
  $description = $_POST['description'];
  $stock = $_POST['stock'];
  $ok = true;

  if(empty($name)){
    $ok = false;
    echo '<p>Name cannot be empty</p>';
  }

  if(empty($description)){
    $ok = false;
    echo '<p>Description cannot be empty</p>';
  }
  if(empty($stock)) {
    $ok = false;
    echo '<p>Stock Cannot be Empty</p>';
  }
if ($ok) {
    $sql = "UPDATE products SET product_name = ?, description = ?, stock = ? WHERE product_id = ?";
    $stmt = $conn->prepare($sql);
    
    try {
        $stmt->execute([$name, $description, $stock, $product_id]);
        echo "<p>Product updated successfully!</p>";
        header('Location: ../display-product.php'); // Redirect after update
        exit();
    } catch (PDOException $e) {
        echo "<p>Error updating product: " . $e->getMessage() . "</p>";
    }
}

$conn = null;