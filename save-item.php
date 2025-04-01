<?php
  require_once './inc/database.php';
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

  if($ok){
    $sql = "INSERT INTO products (product_name, description, stock) VALUES ('$name', '$description', '$stock')";
    $conn->exec($sql);
    $conn = null;
    HEADER( 'Location: ./display-product.php');
  }
    ?>