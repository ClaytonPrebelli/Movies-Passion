<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Movies Passion</title>
</head>
<body>
    <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" height="44px ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/img/logo.png" alt="logo" width="65" height="44" class="d-inline-block align-text-center">
      Movies Passion
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse links" id="navbarSupportedContent">
    <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    </div>
  </div>
</nav>
</header>
<main>
    <div class="busca">
    <div class="form">
    <h2 class="procure">Procure filmes pelo nome ou gênero</h2>
    <form action="">
       <label for="form_titulo" class="label_busca">Por Título &nbsp</label> <input type="text" name="form_titulo" id="form_titulo" placeholder="Digite o Título do filme" class="formu"><br>
       <label for="form_titulo" class="label_busca">Por Gênero</label> <input type="text" name="form_titulo" id="form_titulo" placeholder="Digite o Gênero do filme" class="formu">
       </div>
       <div class="enviar">
       <input type="button" value="Buscar" id="enviar">
    </form>
    </div>

    
</main>
  <div class="corpo">
  <?php
      require('./backend/index.php');
      exibe_geral();
?>
   <!-- <div class="card">
    <h5 class="tit_filme">Titulo: Army of the Dead: Invasão em Las Vegas</h5>
      <img src="https://image.tmdb.org/t/p/w500//vARBnfGEcsb83gdtK0JHb8QaLio.jpg" alt="" width="150px" height="200px">
      <h6>Sinopse:</h6><p>Após um surto de zumbis em Las Vegas, nos Estados Unidos, um grupo de mercenários faz uma aposta final, aventurando-se na zona de quarentena para tentar realizar o maior assalto de todos os tempos.</p>
          <div class="lanc_gen">
            <div class="info">
              <h6>Lançamento</h6><p>2021-05-14</p>
            </div>
            <div class="info">
            <h6>Gênero</h6><p>Ação</p>
            </div>
          </div>
      </div>-->
      
  </div>

<script src="bootstrap/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>