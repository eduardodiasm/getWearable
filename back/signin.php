<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  if($email == "" || $password == "") {
    echo("
    <script language='javascript' type='text/javascript'>
      alert('Todos os campos precisam ser preenchidos');
      window.location.href='../front/signin.php';
    </script>");
  } else {
    echo("$email, $password");
  }
?>