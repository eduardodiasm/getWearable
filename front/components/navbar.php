<?php
  session_start();
  $usuario_esta_logado = isset($_SESSION['email']);
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="./index.php">getWearable</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="./index.php" class="nav-link">Inicio</a></li>
        <li class="nav-item active"><a href="./shop.php" class="nav-link">Loja</a></li>
        <?php
          if (!$usuario_esta_logado) {
            echo '<li class="nav-item active"><a href="./signin.php" class="nav-link">Login</a></li>
              <li class="nav-item active"><a href="./signup.php" class="nav-link">Cadastro</a></li>';
          }
        ?>
        
        <!-- Verificar se o doido ta logado -->
        <?php
          if ($usuario_esta_logado) {
            echo '<li class="nav-item cta cta-colored"><a href="./cart.php" class="nav-link"><span
              class="icon-shopping_cart"></span></a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>