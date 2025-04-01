<?php require ('./inc/header.php'); ?>
  <main>
    <section >
      <div>
        <h3>Enter Product Id of item to remove</h3>
        <form method="post" action="./inc/unsave-item.php">
        	<p><input name="product_id" type="text" placeholder="Product Id" required/></p>
          <input type="submit" name="submit" />
        </form>
      </div>
    </section>
    <?php
    require './inc/footer.php';
    ?>
