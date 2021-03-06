<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
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
    <a class="nav-link active" aria-current="page" href="https://prebelli.online/movies-passion/index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://prebelli.online">Sobre o Desenvolvedor</a>
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
    <form action="./busca.php" method="post">
       <label for="form_titulo" class="label_busca">Por Título &nbsp</label> <input type="text" name="form_titulo" id="form_titulo" placeholder="Digite o Título do filme" class="formu"><br>
       <label for="form_titulo" class="label_busca">Por Gênero</label><select name="form_genero" id="select" class="formu">
<option value="">Todos</option>
<option value="28">Ação</option>
<option value="16">Animação</option>
<option value="12">Aventura</option>
<option value="10770">Cinema TV</option>
<option value="35">Comédia</option>
<option value="80">Crime</option>
<option value="99">Documentário</option>
<option value="18">Drama</option>
<option value="10751">Família</option>
<option value="14">Fantasia</option>
<option value="37">Faroeste</option>
<option value="878">Ficção Científica</option>
<option value="10752">Guerra</option>
<option value="36">História</option>
<option value="9648">Mistério</option>
<option value="10402">Música</option>
<option value="10749">Romance</option>
<option value="27">Terror</option>
<option value="53">Thriller</option>
</select>
       </div>
       <div class="enviar">

       <input type="submit" value="Buscar" id="enviar">
    </form>
    </div>

    
</main>
  <div class="corpo" id="list_cards">
  <?php
      require('./backend/index.php');
      exibe_geral();
?>
    </div>
<script src="bootstrap/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>