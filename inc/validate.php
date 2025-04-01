<?php
// Store manager_code
$manager_code = $_POST['manager_code'];
require_once 'database.php';
$sql = "SELECT manager_id FROM managers WHERE manager_code = '$manager_code'";
$result = $conn->query($sql);
$count = $result -> rowCount();
// Check for Loging
if($count == 1) {
    echo "Logged in Successfully";
    foreach($result as $row){
        session_start();
        $_SESSION['manager_id'] = $row['manager_id'];
        // Redirect
        HEADER( 'Location: ../display-product.php');
    }
}else{
    echo "Invalid Login";
}
$conn = null;
?>
