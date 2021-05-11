<?php

  include '../../database/connection.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE email = '$email' and password = '$password'";

  $query_result = mysqli_query($connect, $query);

  if(mysqli_num_rows($query_result) <= 0) {
    echo("
      <script language='javascript' type='text/javascript'>
        alert('login e/ou senha incorretos');
      </script>
    ");

    header("refresh: 0; url='../../../front/signin.php'");
  } else {
    function startarSessao ($email, $idUsuario) {
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION["idUsuario"] = $idUsuario;
    }
  
    $idUsuario = mysqli_fetch_array($query_result)[0];
  
    startarSessao($email, $idUsuario);
  
    header("Location:  ../../../front/shop.php");
    exit;

  }


?>