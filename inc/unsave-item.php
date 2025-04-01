<?php
  require_once './inc/database.php';
  $product_id = $_POST['product_id'];
  $ok = true;

  if(empty($product_id)){
    $ok = false;
    echo '<p>Product id cannot be empty</p>';
  }

  if($ok){
    $sql = "DELETE FROM products WHERE product_id = '$product_id'";
    $conn->exec($sql);
    $conn = null;
    HEADER( 'Location: ./display-product.php');
  }
    ?>