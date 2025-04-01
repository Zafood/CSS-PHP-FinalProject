<?php
  require_once './inc/database.php';
  $manager_code = $_POST['manager_code'];
  $ok = true;

  include './inc/header.php';

  $sql = "SELECT * FROM manager_codes WHERE manager_code = '$manager_code'";
  $result = $conn->query($sql);
  $count = $result -> rowCount();
  if(empty($manager_code) || $count == 1) {
    $ok = false;
    echo '<p>Manager Code Invalid</p>';
  }

  if($ok){
    $sql = "INSERT INTO manager_codes (manager_code) VALUES ('$manager_code')";
    $conn->exec($sql);
    echo "<section>";
        echo "<div>";
            echo "<h3>Manager Code Saved</h3>";
        echo "</div>";
    echo "</section>";
    $conn = null;
  }
    ?>
    <section >
        <div>
            <p>Manager Code Added, click here to return to log in</p>
            <a href="index.php">Back to Main Page</a>
        </div>
    </section>
<?php require './inc/footer.php'; ?>