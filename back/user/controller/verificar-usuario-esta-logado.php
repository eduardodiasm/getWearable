<?php

  function verificar_usuario_esta_logado () {
    session_start();
    return is_null($_SESSION['idUsuario']);
  }

?>