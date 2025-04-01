<?php
	include './inc/header.php';
	session_start();
	if(!isset($_SESSION['manager_id'])){
		header('location:index.php');
		exit();
	}else{
		require_once './inc/database.php';
		$sql = "SELECT * FROM products";
		$result = $conn->query($sql);
		echo "<section>";
			echo "<h3>Product List</h3>";
			echo "<table class='productTable'>
					<tr class='row'>
						<th class='product_id_col'>Product Id</th>
						<th class='product_name_col'>Product Name</th>
						<th class='description_col'>Description</th>
						<th class='stock_col'>Stock</th>
					</tr>";
					foreach($result as $row) {
						echo "<tr class='row'>
								<td class='product_id_col'>" . $row['product_id'] . "</td>
								<td class='product_name_col'>" . $row['product_name'] . "</td>
								<td class='description_col'>" . $row['description'] . "</td>
								<td class='stock_col'>" . $row['stock'] . "</td>
							</tr>";
					}
			echo "</table>";
			echo "<a class='add_item' href='additem.php'>Add Item</a>";
			echo "<a class='edit_item' href='edit-product-id.php'>Edit Item</a>";
			echo "<a class='remove_item' href='removeitem.php'>Remove Item</a>";
			echo "<a class='new_manager_code' href='newmanagercode.php'>Add New Manager Code</a>";
			echo "<a class='logout' href='logout.php'>Logout</a>";
		echo "</section>";
		$conn = null;
	}
require ('./inc/footer.php');
?>
