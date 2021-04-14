<?php

  include (dirname(__DIR__).'../../database/connection.php');

  function buscarUsuarioPorEmailSenha ($email, $password) {
    $query = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $query_result = mysqli_query($GLOBALS['connect'], $query);
    return $query_result;
  }

  function startarSessao ($email, $idUsuario) {
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["idUsuario"] = $idUsuario;
  }

  $email = $_POST['email'];
  $password = $_POST['password'];
  $resultado_busca = buscarUsuarioPorEmailSenha($email, $password);
  $encontrou_usuario = mysqli_num_rows($resultado_busca);
  
  if (!$encontrou_usuario) {
    header("Location: /getWearable/front/signin.php");
    exit;
  }

  $idUsuario = mysqli_fetch_array($resultado_busca)[0];

  startarSessao($email, $idUsuario);

  // header("Location: /getWearable/front/shop.php");
  // exit;

?>