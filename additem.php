<?php
  require './inc/header.php';
?>
  <main>
    <section>
      <div>
        <h3>Add Item</h3>
        <p></p>
        <form method="post" action="./inc/save-item.php">
          <p><input name="product_name" type="text" placeholder="Product Name" required /></p>
          <p><input name="description" type="textbox" placeholder="Description" required /></p>
          <p><input name="stock" type="number" placeholder="Stock" required /></p>
          <input type="submit" value="submit" />
        </form>
      </div>
    </section>
  </main>
<?php
  require './inc/footer.php';
?>
