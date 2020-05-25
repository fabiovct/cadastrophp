<?php
include 'header.html';
?>

<div class="container mt-4">
    <h4>Login</h4>
    <form  action="classes/login.php" method="POST">
        <div class="form-group">
          <label for="nome">Email</label>
          <input  class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="empresa">Passowrd</label>
          <input  class="form-control" id="password" name="password">
        </div>
        <button type="submit"  class="btn btn-primary">Logar</button>
    </form>
</div>

<?php
include 'footer.html';
?>