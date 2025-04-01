<?php
  require_once './inc/database.php';
  $email = $_POST['email'];
  $username = $_POST['username'];
  $manager_code = $_POST['manager_code'];
  $ok = true;

  include './inc/header.php';

  if(empty($email)){
    $ok = false;
    echo '<p>Email cannot be empty</p>';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $ok = false;
    echo '<p>Invalid Email Format</p>';
  }

  if(empty($username)){
    $ok = false;
    echo '<p>Username cannot be empty</p>';
  }
  
  $sql = "SELECT * FROM manager_codes WHERE manager_code = '$manager_code'";
  $result = $conn->query($sql);
  $count = $result -> rowCount();
  if(empty($manager_code) || $count != 1) {
    $ok = false;
    echo '<p>Manager Code Invalid</p>';
  }

  if($ok){
    $sql = "INSERT INTO managers (email, username, manager_code) VALUES ('$email', '$username', '$manager_code')";
    $conn->exec($sql);
    echo "<section>";
        echo "<div>";
            echo "<h3>Manager Saved</h3>";
        echo "</div>";
    echo "</section>";
    $conn = null;
  }
    ?>
    <section >
        <div>
            <p>Manager Added, click here to return to log in</p>
            <a href="index.php">Login</a>
        </div>
    </section>
<?php require './inc/footer.php'; ?>