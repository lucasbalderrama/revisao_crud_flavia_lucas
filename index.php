<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Pokémon Perdido - Início</title>
  <link rel="stylesheet" href="src/css/estilo.css">
</head>
<body>
  <header>
    <h1>Bem-vindo ao Sistema de Pokémons Perdidos</h1>
    <hr>
  </header>

  <main>
    <p>Escolha uma das opções abaixo:</p>
    <ul>
      <li><a href="pages/cadastrar.php">Cadastrar Pokémon</a></li>
      <li><a href="pages/listar.php">Listar Pokémons</a></li>
      <li><a href="pages/pesquisar.php">Pesquisar</a></li>
      <li><a href="pages/relatorio.php">Relatório</a></li>
    </ul>
  </main>

  <footer>
    <hr>
    <p>&copy; <?php echo date('Y'); ?> - Sistema Pokémon CRUD</p>
  </footer>
</body>
</html>
