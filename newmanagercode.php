<?php require ('./inc/header.php'); ?>
  <main>
    <section >
      <div>
        <h3>Enter new manager code</h3>
        <form method="post" action="save-manager-code.php">
        	<p><input name="manager_code" type="text" placeholder="Manager Code" required/></p>
          <input type="submit" name="submit" />
        </form>
      </div>
    </section>
    <?php
    require './inc/footer.php';
    ?>
