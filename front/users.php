<head>
    <title>getWearable</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../front/csscss/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../front/css/animate.css">
    
    <link rel="stylesheet" href="../front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../front/css/magnific-popup.css">

    <link rel="stylesheet" href="../front/css/aos.css">

    <link rel="stylesheet" href="../front/css/ionicons.min.css">

    <link rel="stylesheet" href="../front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../front/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../front/css/flaticon.css">
    <link rel="stylesheet" href="../front/css/icomoon.css">
    <link rel="stylesheet" href="../front/css/style.css">

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<?php
  include('../front/components/navbar.php');
?>
<!-- 
  <div class="row">
    <form class="contact-form" name="contact-form" method="POST" action="./users.php" enctype="multipart/form-data">
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="id" value="">
      <div class="col-sm-4">
        <div class="form-group">
          <label>Nome *</label>
          <input type="text" name="name" value="" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label>Email *</label>
          <input type="email" name="email" value="" class="form-control" required="required">
        </div>
        <div class="form-group">
          <button type="submit" name="update" class="btn btn-primary btn-lg" required="required">Atualizar</button>
        </div>
      </div>
    </form>
  </div> -->

 
<?php
  include('../config.php');
  include('../back/controller/user.php');
  $usuarios = tratarGetTelinhaUsuarios();
?>

<div class="row-center">
  <div class="col-md-12 col-centered col-md-offset-1">
    <table class="table table-striped">
      <tr>
        <td><b>#ID</b></td>
        <td><b>Nome</b></td>
        <td><b>Email</b></td>
        <td><b>Ação</b></td>
      </tr>

      <!--  Percorre o banco para imprimir a lista de usuários -->
      <?php while($user = $usuarios) { ?>
        <tr>
          <td style="vertical-align: middle;">
            <?php echo $user['id']; ?>
          </td>
          <td style="vertical-align: middle;">
            <?php echo $user['name']; ?>
          </td>
          <td style="vertical-align: middle;">
          <?php echo $user['email']; ?>
          </td>
          <td style="vertical-align: middle;">
            <div class="row">
              <div class="col-md-4" align="center">
                <form action="./users.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                  <input type="hidden" name="action" value="edit">
                  <button class="btn btn-info btn-xs" ><a href= "/back/controller/user.php"><span style="font-size:1.75em;" class="glyphicon glyphicon-edit">Editar</span></a></button>
                </form>
              </div>
              <div class="col-md-4" align="center">
                <form action="./users.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                  <input type="hidden" name="action" value="delete">
                  <button class="btn btn-info btn-xs" type="submit"><span style="font-size:1.75em;" class="glyphicon glyphicon-trash">Deletar</span></button>
                </form>
              </div>
            </div>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</div>