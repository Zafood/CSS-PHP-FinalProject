
<?php
// Connect to Database
	try {
	$conn = new PDO('mysql:host=localhost;dbname=project','root', 'mysql');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo "Connection Failed" . $e->getmessage();
	}
?>
