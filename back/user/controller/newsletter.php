<?php 
  $email = $_POST['email'];
  include (dirname(__DIR__).'../../database/connection.php');

  if($email == "") {
    echo("
    <script language='javascript' type='text/javascript'>
      alert('Todos os campos precisam ser preenchidos');
      window.history.back();
    </script>");
  } else {
    $insert = "INSERT INTO newsletter_email (email) VALUES('$email')";
    $select = mysqli_query($connect, $insert);
    
    echo("
    <script language='javascript' type='text/javascript'>
      alert('Você foi cadastrado na newsletter do nosso site');
      window.history.back();
    </script>");
  }
?> 