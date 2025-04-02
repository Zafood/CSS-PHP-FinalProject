<?php require ('./inc/header.php'); ?>
  <main>
    <section >
    <div >
        <h3>Login</h3>
        <form class="login" method="post" action="./inc/validate.php">
        	<p><input  name="manager_code" type="password" placeholder="Manager Code" required /></p>
          <input  type="submit" value="Login" />
        </form>
      </div>
      <div >
        <h3>Create New Admin</h3>
        <form class="createnew" method="post" action="save-users.php">
        	<p><input name="email" type="text" placeholder="Work Email" required/></p>
        	<p><input name="username" type="text" placeholder="Username" required /></p>
        	<p><input name="manager_code" type="password" placeholder="Manager Code" required /></p>
          <input type="submit" name="submit" value="Register" />
        </form>
      </div>
    </section>
  </main>
  <?php require ('./inc/footer.php'); ?>
