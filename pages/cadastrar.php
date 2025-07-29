<!-- Flávia Glenda e Lucas Randal -->
<?php
include '../config/conexao.php';

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome_pokemon'];
  $tipo = $_POST['tipo_pokemon'];
  $local = $_POST['localizacao_pokemon'];
  $data = $_POST['registro_pokemon'];
  $obs = $_POST['obs_pokemon'];
  $hp = $_POST['hp_pokemon'];
  $ataque = $_POST['ataque_pokemon'];
  $def = $_POST['defesa_pokemon'];

  if (isset($_FILES['foto_pokemon']) && $_FILES['foto_pokemon']['error'] === UPLOAD_ERR_OK) {
    $imagemTemp = $_FILES['foto_pokemon']['tmp_name'];
    $foto = addslashes(file_get_contents($imagemTemp));

    $sql = "INSERT INTO pokemons (
      nome_pokemon, tipo_pokemon, localizacao_pokemon,
      registro_pokemon, obs_pokemon, hp_pokemon,
      ataque_pokemon, defesa_pokemon, foto_pokemon
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $nome, $tipo, $local, $data, $obs, $hp, $ataque, $def, $foto);

    if ($stmt->execute()) {
      $mensagem = "Pokémon cadastrado com sucesso!";
    } else {
      $mensagem = "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
  } else {
    $mensagem = "Erro ao enviar a imagem do Pokémon.";
  }

  $conn->close();
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Pokémons</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="../src/css/cadastrar.css">
  <link rel="stylesheet" href="../src/css/styles.css">
  <link rel="icon" type="image/x-icon" href="../src/assets/img/pokebola.png">
  <script src="../src/js/script.js"></script>
  <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
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
      <div class="container">
        <?php if (!empty($mensagem)) : ?>
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                title: '<?php echo strpos($mensagem, "sucesso") !== false ? "Sucesso!" : "Erro"; ?>',
                text: '<?php echo $mensagem; ?>',
                icon: '<?php echo strpos($mensagem, "sucesso") !== false ? "success" : "error"; ?>',
                confirmButtonText: 'OK'
              });
            });
          </script>
        <?php endif; ?>


        <form method="POST" action="cadastrar.php" enctype="multipart/form-data">

          <h2 data-text="Cadastrar Pokémon">CADASTRAR POKÉMON</h2>
          <input type="file" name="foto_pokemon" accept="image/*" required onchange="mostrarImagem(this)">
          <div class="preview-container">
            <img id="preview" class="preview-img" src="#" alt="Prévia da imagem" style="display: none;">
          </div>



          <input type="text" name="nome_pokemon" placeholder="Nome do Pokémon" required>


          <select name="tipo_pokemon" required>
            <option value="">Selecione o tipo</option>
            <option value="Normal">Normal</option>
            <option value="Fogo">Fogo</option>
            <option value="Água">Água</option>
            <option value="Grama">Grama</option>
            <option value="Elétrico">Elétrico</option>
            <option value="Gelo">Gelo</option>
            <option value="Lutador">Lutador</option>
            <option value="Venenoso">Venenoso</option>
            <option value="Terra">Terra</option>
            <option value="Voador">Voador</option>
            <option value="Psíquico">Psíquico</option>
            <option value="Inseto">Inseto</option>
            <option value="Pedra">Pedra</option>
            <option value="Fantasma">Fantasma</option>
            <option value="Dragão">Dragão</option>
            <option value="Aço">Aço</option>
            <option value="Sombrio">Sombrio</option>
            <option value="Fada">Fada</option>
          </select>

          <input type="text" name="localizacao_pokemon" placeholder="Localização" required>
          <input type="date" name="registro_pokemon" required>
          <textarea name="obs_pokemon" placeholder="Observações"></textarea>
          <input type="text" name="hp_pokemon" placeholder="HP">
          <input type="text" name="ataque_pokemon" placeholder="Ataque">
          <input type="text" name="defesa_pokemon" placeholder="Defesa">

          <button type="submit">Cadastrar</button>
        </form>
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