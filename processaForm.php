<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EcoVida - Pagina Inicial</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<body>
<header>
<?php
  include "nav.php";

?>
  </header>
  <main>
  <div class="p-5 pt-5 mb-0 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-primary">EcoVida</h1>
        <p class="col-md-8 fs-3 text-secondary">Sustentabilidade ambiental e conscientização sobre a importância da
          preservação do meio ambiente.</p>
        <button onclick="window.location.href='sobre.php'" class="btn btn-primary btn-lg" type="button">Saiba
          mais</button>
      </div>
    </div>

    <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $msg = $_POST["mensagem"];
        $select = $_POST["tipoctt"];

        echo "Nome: $nome<br>Email: $email<br>Tipo contato: $select<br>Mensagem: $msg "
    ?>

<footer>
  <?php
  include "footer.php";
  ?>
  </footer>
</main>
</body>
</html>