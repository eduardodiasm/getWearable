<?php 
  include (dirname(__DIR__).'../../database/connection.php');

  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  echo("$id, $name, $email");

  $query = "UPDATE user SET name = '$name', email = '$email' WHERE id = '$id'"; 

  $update = mysqli_query($GLOBALS['connect'], $query); 

  if($update != "") {
    header("Location: /getWearable/front/users.php");
    echo "<script>
      alert('usuario atualizado com sucesso')
    </script>";
  } else {
    echo ("ERROR");
  }
  exit;
?>