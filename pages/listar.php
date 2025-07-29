<?php
// Inclui a conexão com o banco de dados (se necessário)
include '../config/conexao.php';

// (opcional) iniciar sessão ou verificar autenticação aqui
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Título da Página</title>
  
  <!-- Estilo -->
  <link rel="stylesheet" href="../src/css/estilo.css">
  
  <!-- Script JS (se precisar) -->
  <script src="../src/js/script.js" defer></script>
</head>
<body>
  <header>
    <h1>Pokémon Perdido</h1>
    <nav>
      <a href="../index.php">Início</a> |
      <a href="cadastrar.php">Cadastrar</a> |
      <a href="listar.php">Listar</a> |
      <a href="pesquisar.php">Pesquisar</a> |
      <a href="relatorio.php">Relatório</a>
    </nav>
    <hr>
  </header>

  <main>
    <h2>Conteúdo da Página</h2>
    <!-- Aqui você coloca os campos do formulário, tabela, etc -->
    <p>Essa é a estrutura base da página.</p>
  </main>

  <footer>
    <hr>
    <p>&copy; <?php echo date('Y'); ?> - Projeto Pokémon CRUD</p>
  </footer>
</body>
</html>
