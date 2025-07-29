<!-- Flávia Glenda e Lucas Randal -->
<?php
include '../config/conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
  $search = $conn->real_escape_string($_POST['search']);
} else {
  $search = '';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesquisar</title>
  <link rel="stylesheet" href="../src/css/tabelas.css">
  <link rel="stylesheet" href="../src/css/styles.css">
  <link rel="stylesheet" href="../src/css/pesquisar.css">
  <link rel="icon" type="image/x-icon" href="../src/assets/img/pokebola.png">
</head>

<body>
  <header>
    <div id="container">
      <img id="logo" src="../src/assets/img/logo pookemon perdido.png" alt="Pokémon Perdido">
      <nav>
        <ul>
          
          <li><a href="cadastrar.php">Cadastrar</a></li>
          <li><a href="listar.php">Listar</a></li>
          <li><a href="pesquisar.php">Pesquisar</a></li>
       
        </ul>
      </nav>
    </div>
  </header>

  <div class="area">
    <ul class="circles">
      <li><img class="pokemon" src="../src/assets/img/pokemon 1.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 2.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 3.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 4.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 5.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 6.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 7.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 8.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 9.png" alt=""></li>
      <li><img class="pokemon" src="../src/assets/img/pokemon 10.png" alt=""></li>
    </ul>

    <main>
      <div class="pokemons" id="div-pesquisa" style="overflow-x:auto;">
        <h1 id='pok-h1-2'>PESQUISAR POKÉMON:</h1>
        <form method="POST" action="">
          
          <input type="text" name="search" placeholder="Digite o nome do Pokémon" required>
          <button type="submit">Pesquisar</button>
        </form>
      </div>
      <?php if (isset($_POST['search'])): ?>
          <?php
          $search = $conn->real_escape_string($_POST['search']);
          $sql = "SELECT * FROM pokemons WHERE nome_pokemon LIKE '%$search%'";
          $resultado = $conn->query($sql);
          ?>
          <?php if ($resultado->num_rows > 0): ?>
            <table>
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Tipo</th>
                  <th>Localização</th>
                  <th>Registro</th>
                  <th>Observações</th>
                  <th>HP</th>
                  <th>Ataque</th>
                  <th>Defesa</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $resultado->fetch_assoc()): ?>
                  <tr>
                    <td><?php echo ($row['nome_pokemon']); ?></td>
                    <td><?php echo ($row['tipo_pokemon']); ?></td>
                    <td><?php echo ($row['localizacao_pokemon']); ?></td>
                    <td><?php echo ($row['registro_pokemon']); ?></td>
                    <td><?php echo ($row['obs_pokemon']); ?></td>
                    <td><?php echo ($row['hp_pokemon']); ?></td>
                    <td><?php echo ($row['ataque_pokemon']); ?></td>
                    <td><?php echo ($row['defesa_pokemon']); ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          <?php else: ?>
            <p style="color: red; margin-top: 30px; text-align: center; font-family:Arial, Helvetica, sans-serif; font-size:18px;">Nenhum pokémon encontrado.</p>
          <?php endif; ?>
        <?php endif; ?>
    </main>
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