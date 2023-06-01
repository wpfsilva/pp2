<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EcoVida - Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<style>
    #pg3{
      background-color: #0d6efd;
      color:white;
    }
    h2
    {
      text-align: center;
    }
</style>

<body>
  <header>
    <?php include "nav.php"; ?>
  </header>

  <main>
    <div class="p-5 mb-0 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-primary">EcoVida - Contato</h1>
        <p class="col-md-8 fs-4 text-secondary">Para entrar em contato conosco utilize o formulário abaixo.</p>
      </div>
    </div>

    <div id="formsss" class="container-md">
      <h2 class="m-3 col-12">Formulario:</h2>
    <div class="container-md">
      <form action="processaForm.php" method="post" enctype="multipart/form-data" name="formulariocontato">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="nome" placeholder="Nome e Sobrenome" name="nome">
          <label for="floatingInput">Nome e Sobrenome</label><span></span>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          <label for="email">Email</label><span></span>
        </div>

      <div class="m-auto col-md-4 mb-0" id="div_radio">
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoctt" id="Sugestão" value="Sugestão">
        <label class="form-check-label" for="Sugestão">
          Sugestões
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoctt" id="Críticas" value="Críticas">
        <label class="form-check-label" for="Críticas">
          Críticas
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoctt" id="Elogios" value="Elogios">
        <label class="form-check-label" for="Elogios">
          Elogios
        </label>
      </div>
      <div class="form-check form-check-inline mb-3">
        <input class="form-check-input" type="radio" name="tipoctt" id="Outros" value="Outros">
        <label class="form-check-label" for="Outros">
          Outros
        </label>
      </div>
    </div><span class="row d-flex justify-content-center mb-3"></span>

        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Deixe sua mensagem aqui:" id="mensagem" style="height: 100px" name="mensagem"></textarea>
          <label for="mensagem">Deixe sua mensagem aqui:</label><span></span>
        </div>
        <div class="g-col-4">
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="concordo" id="flexCheckDefault" name="termo[]">
            <label class="form-check-label" for="flexCheckDefault">Ao clicar aqui você concorda em compartilhar seu email para retorno de contato.</label><span></span>
          </div><span></span>
            <input type="submit" class="btn btn-primary mb-3" value="enviar">
        </div>
      </form>
    </div>
  </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmModalLabel">Confirmar Dados</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p id="modal-nome"></p>
            <p id="modal-email"></p>
            <p id="modal-tipo"></p>
            <p id="modal-mensagem"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Alterar dados</button>
            <button type="button" class="btn btn-danger" id="resetModalButton">Recomeçar</button>
            <button type="button" class="btn btn-primary" id="confirmModalButton">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <?php include "footer.php"; ?>
  </footer>
  <script src="form.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <link href="assets/css/style.css" rel="stylesheet">
</body>
</html>
