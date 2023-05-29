<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EcoVida - Pagina Inicial</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
</head>

<body>
  <header>
    <?php
  include "nav.php";
  ?>
<style>
  #pg1{
    background-color: #0d6efd;
    color:white;
  }

</style>

  </header>
  <main>
    <div class="p-5 pt-5 mb-0 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-primary">EcoVida</h1>
        <p class="col-md-8 fs-3 text-secondary">Sustentabilidade ambiental e conscientização sobre a importância da
          preservação do meio ambiente.</p>
        <button onclick="window.location.href='sobre.html'" class="btn btn-primary btn-lg" type="button">Saiba
          mais</button>
      </div>
    </div>
    <div class="col-10 m-auto mb-5">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <img src="assets/imagens/premiada.jpg" class="d-block w-100" alt="...">
              <h5 class="card-title">Campanha de conscientização ambiental premiada</h5>
              <p class="card-text">Nossa ONG foi reconhecida internacionalmente por sua campanha inovadora de
                conscientização ambiental, que alcançou milhões de pessoas e promoveu mudanças positivas de
                comportamento em relação ao meio ambiente.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <img src="assets/imagens/recicla+.jpeg" class="d-block w-100" alt="...">
              <h5 class="card-title">Programa de reciclagem de resíduos eletrônicos</h5>

              <p class="card-text">Implementamos um programa pioneiro de reciclagem de resíduos eletrônicos, que coletou
                e reciclou toneladas de equipamentos obsoletos, evitando a contaminação do solo e dos recursos hídricos.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <img src="assets/imagens/aperto.jpg" class="d-block w-100" alt="...">
              <h5 class="card-title">Atuação em políticas públicas</h5>
              <p class="card-text">Por meio de nosso trabalho de advocacy, conseguimos influenciar a criação de leis e
                políticas ambientais mais rigorosas, contribuindo para a proteção do meio ambiente em nível
                governamental.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <img src="assets/imagens/empresa.jpg" class="d-block w-100" alt="...">
              <h5 class="card-title">Parceria com empresas sustentáveis</h5>
              <p class="card-text">Estabelecemos parcerias estratégicas com empresas comprometidas com a
                sustentabilidade, resultando em iniciativas conjuntas para redução de emissões de carbono, uso de
                energias renováveis e práticas responsáveis de produção.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
  <div class="container">
        <div class="row">
          <div class="col-md-12"> </div>
          <h3 class="main-title">
            Entre em contato conosco
          </h3>

          <div class="col-md-4 contact-box">
            <i class="bi bi-telephone"></i>
            <span class="contact-title">Ligue para:</span> (55) 34 92232-4456</p>
            <p><span class="contact-title">Horários:</span> 08:00 - 17:30</p>
          </div>
          <div class="col-md-4 contact-box">
            <i class="bi bi-envelope-at"></i>
            <span class="contact-title">Envie um email:</span> contato@ecovida.org</p>
          </div>
          <div class="col-md-4 contact-box ">
            <i class="bi bi-geo-alt"></i>
            <span class="contact-title">Venha tomar um café</span> Rua Lore Y, 1664 - São Paulo</p>
          </div>
        </div>
        <div class="col-md-6" id="msg-box">
          <p>Ou nos deixe uma mensagem:</p>
        </div>
        <div class="col-md-6" id="contact-form">
          <form name="contato-box" enctype="multipart/form-data" action="processaForm.php" method="POST">
            <input type="email" class="form-control" placeholder="E-mail" name="email">
            <input type="text" class="form-control" placeholder="Assunto" name="subject">
            <textarea class="form-control" rows="3" placeholder="Sua mensagem" name="msg"> </textarea>
            <input type="submit" class="main-btn" value="enviar">
          </form>
        </div>
      </div>
    </div>
  <?php
  include "footer.php";
  ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</body>

</html>