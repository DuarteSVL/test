<?php

include "db_conn.php";


if (isset($_GET['search'])) {
    $filtervalues = $_GET['search'];
    $sql = "SELECT * FROM noticia WHERE activo = 1 AND CONCAT(titulo, texto, imagem) LIKE '%$filtervalues%' ORDER BY ordem DESC, data desc";
} else {
    $sql = "SELECT * FROM noticia WHERE activo = 1 ORDER BY ordem DESC, data desc";
}

$result = $ligacaoBD->query($sql);

if (!$result) {
    die("Invalid query: " . mysqli_error($ligacaoBD));
}
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias e Eventos - CCR CCR</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Próprios -->
    <link href="css/noticias.css" rel="stylesheet">
    <link href="css/headerFooter.css" rel="stylesheet">
    <script src="js/main.js"></script>

</head>
<body>
  <!-- Navbar Aqui Dentro -->
<?php include 'header.php'; ?>

  <div class="container-xxl all-content bg-white p-0">
    <!-- Page Header End -->
    <div class="container-xxl py-5 page-header-noticias position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Noticias e Eventos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Ínicio</a></li>
                    <li class="breadcrumb-item"><a href="noticias.php">Noticías</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Noticias e Eventos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Título Inicial -->
    <div class="row align-items-center">
        <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
            <h1 class="mb-4">Noticias e Eventos</h1>
        </div>
    </div>
    <!-- Título Inicial -->
    <div class="content-wrapper">
        <div class="container" style="text-align: justify;">
            <br><br>

    <!--Row e cols para espaçar filtros e noticias-->
    <div class="row" style="width:100%">

    <div class="col-2">

  <!--Filtros-->
  <div class="navbar-form navbar-left sticky-top d-none d-md-block" id="filtros">
    <h6>Filtros</h6>
    <hr>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Direção
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Eventos
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Área Desportiva
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Voluntariado
      </label>
    </div>

    <hr>

    <div>
      <!-- searchbar -->
    <input class="form-control mr-sm-2" type="search" placeholder="Pesquiza" aria-label="Procurar Notícia"> <br>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button></div>
    
  </div>
</div>
  

   
  <div class="col">
   <!-- Noticias -->

   <!-- Aviso, as imagens têm que ter as mesmas dimensões para não desalinhar o texto das cartas, 800px height e 1000px width -->
   <!-- Aviso, as imagens têm que ter as mesmas dimensões para não desalinhar o texto das cartas, 800px height e 1000px width -->

   <!-- Card Deck 1 -->
   <div class="card-deck d-flex justify-content-between">

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="imagens/noticias/POP-DANCE.jpg" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">A POP Dance chegou ao CCRCCR!</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Nas aulas de Pop Dance, podes contar dançar aos ritmos contagiantes da Pop, Hip Hop, RNB e Dancehall, entre outros.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">11 Outubro 2023</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.php" class="card-link">Ver Mais</a>
      </div>
    </div>

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="imagens/noticias/pascoa.jpg" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">Horário da Páscoa: Escola Primária</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Conheça AQUI o planeamento de atividades da Escola Primária, para esta semana de pausa letiva. <br> Votos de Boa Páscoa, com muita saúde! </p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">28 Março 2021</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.php" class="card-link">Ver Mais</a>
      </div>
    </div>

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="imagens/noticias/judo.jpg" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">Vem praticar Judo no CCR CCR!</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">O Judo é mais uma modalidade que podes praticar connosco e que contribui para o teu desenvolvimento físico, psíquico e social de forma integrada.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">20 Outubro 2023</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.php" class="card-link">Ver Mais</a>
      </div>
    </div>

  </div>
  <br> <!-- Break entre Card Decks -->

  <!-- Card Deck 2 -->
  <div class="card-deck d-flex justify-content-between">

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="imagens/noticias/inicioano.jpg" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">Início do Ano Letivo 2023/2024 – 12/09/2023</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Terminado está mais um ano letivo, estamos já em preparação do novo que irá começar.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">10 Julho 2023</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.php" class="card-link">Ver Mais</a>
      </div>
    </div>

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="imagens/noticias/crescer.png" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">Dia Internacional do Brincar – Teatro na Escola</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Dia 28/05 comemora-se o Dia Internacional do Brincar, e é por isso que, no próximo dia 27/05, Sexta-Feira, o Teatro vem à escola, com a peça “ao CRESCER quero SER”.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">25 Maio 2022</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.php" class="card-link">Ver Mais</a>
      </div>
    </div>

    <!-- Noticia 1 -->
    <div class="card">
      <!-- Imagem -->
      <img class="card-img-top" src="imagens/noticias/certificado.png" alt="Card image cap">
      <div class="card-body">
        <!-- Titulo -->
        <h5 class="card-title">CCR CCR recebe certificado do Programa de Educação Olímpica 2022/2023</h5>
        <!-- Subtitulo/texto -->
        <p class="card-text">Nas aulas de Pop Dance, podes contar dançar aos ritmos contagiantes da Pop, Hip Hop, RNB e Dancehall, entre outros.</p>
      </div>
      <div class="card-footer">
        <!-- Data -->
        <small class="text-muted">01 Agosto 2023</small>
        <!-- Link para página da noticia -->
        <a href="noticia_exemplo.php" class="card-link">Ver Mais</a>
      </div>
    </div>

  </div>

<!-- Fim Noticias -->
</div>

<!-- Fim row -->
</div>

<br><br>

<!-- Paginação -->
<nav aria-label="...">
  <ul class="pagination pagination-sm justify-content-center" id="paginacao">
    <li class="page-item"><a class="page-link" href="noticias.php" tabindex="-1">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
  </ul>
</nav>


        </div>
        </div>
    </div><!-- Não apagar div do container -->
</div><!-- Não apagar div do container -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
</div>
</div><!-- Não apagar é do loading -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>


    
</body>
</html>
