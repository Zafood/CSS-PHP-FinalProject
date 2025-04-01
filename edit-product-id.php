<?php
  require './inc/header.php';
?>
  <main>
    <section>
      <div>
        <h3>Edit Item</h3>
        <p>Enter Product Id of item to edit</p>
        <form method='post' action='edit-item.php'>
          <p><input name='product_id' type='text' placeholder='Product Id' required/></p>
          <input type='submit' name='submit' />
        </form>
<?php
  require './inc/footer.php';
?>
