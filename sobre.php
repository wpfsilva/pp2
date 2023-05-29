<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcoVida - Sobre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <header>
    <?php
  include "nav.php";

?>
<style>

  #pg2
  {
    background-color: #0d6efd;
    color:white;
  }
</style>
    </header>
    <main>
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-primary">EcoVida - Sobre</h1>
                <p class="col-md-8 fs-4 text-secondary">
                <p>A ONG EcoVida tem como proposta promover a sustentabilidade ambiental e a conscientização sobre a
                    importância da preservação do meio ambiente. Seu foco é incentivar ações práticas que contribuam
                    para a proteção dos recursos naturais, a conservação da biodiversidade e a melhoria da qualidade de
                    vida das comunidades.</p>
                </p>
            </div>
        </div>
        <div class="container" role="main">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <div id="carouselExampleCaptions" class="carousel slide carousel-fade mt-2">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/imagens/destaque-1.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imagens/destaque-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imagens/destaque-3.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 m-auto mt-3">
                    <ol>
                        <li>Educação Ambiental: A EcoVida oferece programas educacionais para escolas, comunidades e
                            empresas, visando conscientizar as pessoas sobre as questões ambientais e promover mudanças
                            de comportamento. Isso inclui palestras, workshops, campanhas de sensibilização e atividades
                            práticas relacionadas ao meio ambiente.</p>
                        <li>Reflorestamento e Conservação: A ONG realiza projetos de reflorestamento em áreas
                            degradadas, plantando árvores nativas e restaurando ecossistemas. Além disso, trabalha em
                            parceria com órgãos governamentais e comunidades locais para estabelecer áreas de
                            conservação, protegendo habitats e espécies ameaçadas.</p>
                        <li>Uso Sustentável dos Recursos Naturais: A EcoVida promove práticas sustentáveis, como o uso
                            eficiente da água, o manejo adequado de resíduos sólidos, a utilização de energias
                            renováveis e a agricultura orgânica. Por meio de programas de capacitação e assistência
                            técnica, a ONG orienta comunidades e empresas sobre boas práticas ambientais.</li>
                    </ol>
                </div>
            </div>
        </div>

        </div>


    </main>

    <footer>
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
    <link href="assets/css/style.css" rel="stylesheet">
</body>

</html>