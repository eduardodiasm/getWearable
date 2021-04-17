<?php

  function logarUsuarioPosCadastro ($email) {
    session_start();

    $_SESSION["email"] = $email;
    
    return $_SESSION;
  }

?>