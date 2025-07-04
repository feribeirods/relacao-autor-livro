<section class="section-listagem">
    <div class="container-titulo-listagem">
        <div class="titulos">
            <h1 class="titulo-listagem">Livros</h1>
            <h3 class="subtitulo-listagem">Listagem de Autores Cadastrados</h3>
        </div>

        <a class="btn-adicionar" href="/livros_autores/?controller=livro&action=cadastro">Adicionar Livro</a>
    </div>

    <div class="container-lista">
        <ul class="lista">
            <?php foreach ($livros as $livro): ?>
                <li class="item-lista">
                    <div class="container-dados">
                        <div class="imagem-autor">
                            <img src="https://placehold.co/160x160" alt="">
                        </div>
                        <div class="dados-autor">
                            <h1 class="info-principal"><?= htmlspecialchars($livro['Titulo']) ?></h1>
                            <h6 class="info-secundaria">Autor: <?= htmlspecialchars($livro['AutorNome']) ?></h6>
                            <h6 class="info-secundaria">Gênero: <?= htmlspecialchars($livro['Genero']) ?></h6>
                            <h6 class="info-secundaria">Publicação: <?= date_format(new DateTime($livro['DataPublicacao']), 'd/m/Y') ?></h6>

                            <button class="btn-ver-mais">Ver Mais</button>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
            
        </ul>
    </div>
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success">
            Livro cadastrado com sucesso!
            <span class="fechar-alert">x</span>
        </div>
    <?php endif; ?>
</section>
