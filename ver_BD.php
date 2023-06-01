<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EcoVida - Pagina Inicial</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <header>
    <?php include "nav.php"; ?>
  </header>
  <main>
    <div class="p-1 pt-5 mb-0 bg-body-tertiary rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold text-primary">EcoVida</h1>
        <p class="col-md-8 fs-3 text-secondary">Sustentabilidade ambiental e conscientização sobre a importância da
          preservação do meio ambiente. Veja as mensagens registradas abaixo:</p>
      </div>
    </div>

  <?php
  require_once "BDConnect.php";
  $conn = mysqlConnect();
  $querySQL = "SELECT * FROM mensagens";
  $result = $conn->query($querySQL);

  // Verificar se a consulta retornou resultados
  try {
    if ($result->rowCount() > 0) {
      // Percorrer os resultados e exibi-los na tela
      echo "<div class='container mb-2'>";
      echo "<h1 class='col-12 mb-3'>Mensagens registradas:</h1>";
      echo "</div>";
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='container m-auto mb-0'>";
        echo "<p><strong>Nome:</strong> " . htmlspecialchars($row["nome"]) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($row["email"]) . "</p>";
        echo "<p><strong>Tipo:</strong> " . htmlspecialchars($row["motivo"]) . "</p>";
        echo "<p><strong>Mensagem:</strong> " . htmlspecialchars($row["mensagem"]) . "</p>";
        echo "<p class='linha'></p>";
        echo "</div>";
        
      }
    } else {
      echo "<div class='container'>";
      echo "<h1 class='m-4'>Nenhum resultado encontrado.</h1>";
      echo "</div>";
    }
  } catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
  }

  // Fechar a conexão com o banco de dados
  $conn = null;
  ?>

  <footer>
    <?php include "footer.php"; ?>
  </footer>
  </main>
 <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-LQCB2jz3UvVfqekEqZMnKd1cMT4ls+HeuSmzJfl2d3g43SlBCYBYqxU2zSsy+DoH" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

  </body>

</html>
