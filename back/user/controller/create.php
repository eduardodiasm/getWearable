<?php
  include (dirname(__DIR__).'../../database/connection.php');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password']; 
  
  if($name == "" || $email == "" || $password == "") {
    echo("
      <script language='javascript' type='text/javascript'>
        alert('Todos os campos precisam ser preenchidos');
        window.location.href='../front/signup.php';
      </script>
    ");
  } else {
    $insert = "INSERT INTO user (name, email, password) VALUES('$name', '$email', '$password')";
    $select = mysqli_query($connect, $insert);
    
    echo "<script> javascript:history.go(-2);</script>";
    
    exit;
  }
?>