<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EcoVida - Pagina Inicial</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<head>
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
$nome = $_POST["nome"] ?? ""; // Se houver um valor definido e não nulo para o parâmetro "nome" no array $_POST,ele será atribuído.
$email = $_POST["email"] ?? "";//Caso contrário, será atribuída uma string vazia.
$motivo = $_POST["tipoctt"] ?? "";
$mensagem = $_POST["mensagem"] ?? "";

$nome_safe = htmlspecialchars($_POST["nome"], ENT_QUOTES, 'UTF-8');   // Utilização do tratamento especial que converte os elementos HTML //
$email_safe = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8'); // em UNICODE pra não ser executado na página //
$msg_safe = htmlspecialchars($_POST["mensagem"], ENT_QUOTES, 'UTF-8');
$motivo_safe = htmlspecialchars($_POST["tipoctt"], ENT_QUOTES, 'UTF-8');
require_once "BDConnect.php";
$pdo = mysqlConnect();

try {
        $sqlComando = "INSERT INTO mensagens (nome,email,motivo,mensagem) VALUES (:nome, :email, :motivo, :mensagem)";
        $InsertDB = $pdo->prepare($sqlComando);
        $InsertDB->bindParam(":nome", $nome);
        $InsertDB->bindParam(":email", $email);
        $InsertDB->bindParam(":motivo", $motivo);
        $InsertDB->bindParam(":mensagem", $mensagem);

        if ($InsertDB->execute()) {
          echo "<div class='container mb-2'>
        <div class='alert alert-success m-3' role='alert'>
        <div class='text-center'>    
        <h4 class='alert-heading'>Nossa organização agradece o contato</h4></div>
            <p class='mb-0'>$nome_safe, obrigado pelo contato.</p>
            <p class='mb-0'>Sua mensagem de $motivo_safe: '$msg_safe' foi armazenada com sucesso em nosso Banco de Dados.</p>
            <p class='mb-0'>Entraremos em contato através do email example@ecovida.org para o email $email_safe.</p>
            <div class='text-center'><a href='ver_bd.php' class='btn btn-primary mt-3'>Ver mensagens registradas</a></div></div>
            </div>
        
        </div>";
                
        } else {
            echo "<p>Ocorreu algum erro.</p>";
        }
} catch (Exception $e) {
    exit('Ocorreu uma falha: ' . $e->getMessage());
}

?>

</main>
<link rel="stylesheet" href="assets/css/style.css">
<footer>
  <?php
  include "footer.php";
  ?>
  </footer>

</body>
</html>
