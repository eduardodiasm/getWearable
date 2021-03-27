<?php
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
    echo("$name, $email, $password");
  }
?>