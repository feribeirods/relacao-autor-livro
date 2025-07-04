<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="/livros_autores/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="/livros_autores/assets/js/script.js" defer></script>
</head>
<body>
    <header class="navbar">
        <h2 class="titulo-principal">HOW VI Relacionamento Autor - Livro</h1>

        <div>
            <a href="/livros_autores/?controller=autor&action=index" class="btn" id="autor">Autores</a>
            <a href="/livros_autores/?controller=livro&action=index" class="btn" id="livro">Livros</a>
        </div>
    </header>

    <?= $conteudo ?>

    <footer class="footer">
        <h2 class="titulo-footer">Análise e Desenvolvimento de Sistemas - UNIVALI</h2>
        <h2 class="titulo-footer">Desenvolvido por:</h2>
        
        <p class="nome-aluno">Alberto Ricardo Pereira Filho</p>
        <p class="nome-aluno">Arthur Scherer da Silva</p>
        <p class="nome-aluno">Caroline de Oliveira e Souza</p>
        <p class="nome-aluno">Luiz Fernando Ribeiro dos Santos</p>
    </footer>
</body>
</html>