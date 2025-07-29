<!-- Flávia Glenda e Lucas Randal -->
<?php
session_start();
include '../config/conexao.php';

$sql = "
    SELECT 
        pokemons.nome_pokemon,
        pokemons.tipo_pokemon,
        pokemons.localizacao_pokemon,
        pokemons.registro_pokemon,
        pokemons.obs_pokemon,
        pokemons.hp_pokemon,
        pokemons.ataque_pokemon,
        pokemons.defesa_pokemon
    FROM pokemons
";

$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Pokémons</title>
  <link rel="stylesheet" href="../src/css/styles.css">
  <link rel="stylesheet" href="../src/css/tabelas.css">
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
    <main>
      <h1 id='pok-h1'>LISTA DE POKÉMONS CADASTRADOS:</h1>
      <div class="pokemons" style="overflow-x:auto;">
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
          <p style="color: red; margin-top: 30px; text-align: center; font-family:Arial, Helvetica, sans-serif; font-size:18px;">Nenhum pokémon cadastrado.</p>
        <?php endif; ?>
      </div>
    </main>

  </div>

  <footer class="footer">
    <div class="footer-container">
      <p>&copy; <?php echo date('Y'); ?> - Atividade de Revisão Crud - Pokemon</p>
    </div>
  </footer>
</body>

</html>