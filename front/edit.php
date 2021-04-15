<?php 
      include (dirname(__DIR__).'../back/database/connection.php');

      $id = $_GET['id'];

      $query = "SELECT * FROM user WHERE id = $id;";

      $query_result = mysqli_query($GLOBALS['connect'], $query);

      $user = mysqli_fetch_array($query_result);
?> 

<form class="contact-form" name="contact-form" method="POST" action="../back/user/controller/update.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="col-sm-4">
    <div class="form-group">
      <label>Nome</label>
      <input type="text" name="name" value="<?php echo $user['name']; ?>" class="form-control" required="required">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $user['email']; ?>" class="form-control" required="required">
    </div>
    <div class="form-group">
      <button type="submit" name="update" class="btn btn-primary btn-lg" required="required">Atualizar</button>
    </div>
  </div>
</form>