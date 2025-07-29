<?php
include '../config/conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Pokemons</title>
  <link rel="stylesheet" href="../src/css/styles.css">
  <link rel="icon" type="image/x-icon" href="../src/assets/img/pokebola.png">
</head>

<body>
  <header>
    <div id="container">
      <img id="logo" src="../src/assets/img/logo pookemon perdido.png" alt="Pokémon Perdido">
      <nav>
        <ul>
          <li><a href="../index.php">Início</a></li>
          <li><a href="cadastrar.php">Cadastrar</a></li>
          <li><a href="listar.php">Listar</a></li>
          <li><a href="pesquisar.php">Pesquisar</a></li>
          <li><a href="relatorio.php">Relatório</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="area">
    <ul class="circles">
      <li><img class="dell" src="../src/assets/img/pokemon 1.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 2.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 3.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 4.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 5.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 6.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 7.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 8.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 9.png" alt=""></li>
      <li><img class="dell" src="../src/assets/img/pokemon 10.png" alt=""></li>
    </ul>
  </div>

  <main>

  </main>

  <footer class="footer">
    <div class="footer-container">
      <p>&copy; <?php echo date('Y'); ?> - Atividade de Revisão Crud - Pokemon</p>
    </div>
  </footer>
</body>

</html>