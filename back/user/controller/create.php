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
    $insert = "INSERT INTO user VALUES('$name', '$email', $password, 'photo')";
    $select = mysqli_query($connect, $insert);
    header("Location: /getWearable/front/shop.php");
    exit;
  }
?>