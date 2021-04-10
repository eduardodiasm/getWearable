<?php 

  function tratarPostTelinhaUsuarios () {
    #Confere se a ação enviada pelo form é de envio
    if($_POST['action'] == 'edit') {
      $user_id = $_POST['id'];
      $query = "SELECT * FROM user WHERE id = $user_id;";
      return $user = mysqli_query($GLOBALS['connect'], $query);
    }
  
    if($_POST['action'] == 'update') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $update = "UPDATE user SET 'name' = '$name' 
        email = '$email' WHERE id =" .$_POST['id'] .";";
    }
  
    if($_POST['action'] == 'delete') {
      $user_id = $_POST['id'];
      $query = "DELETE * FROM user WHERE id = $user_id;";
      return $query_result = mysqli_query($GLOBALS['connect'], $query); 
    }
  }


?>