<section class="section-listagem">
    <div class="container-titulo-listagem">
        <div class="titulos">
            <h1 class="titulo-listagem">Autores</h1>
            <h3 class="subtitulo-listagem">Listagem de Autores Cadastrados</h3>
        </div>

        <a class="btn-adicionar" href="/livros_autores/?controller=autor&action=cadastro">Adicionar Autor</a>
    </div>

    <div class="container-lista">
        <ul class="lista">
            <?php foreach ($autores as $autor): ?>
                <li class="item-lista">
                    <div class="container-dados">
                        <div class="imagem-autor">
                            <img src="https://placehold.co/160x160" alt="">
                        </div>
                        <div class="dados-autor">
                            <h1 class="info-principal"><?= htmlspecialchars($autor['Nome']) ?></h1>
                            <h6 class="info-secundaria">Nacionalidade: <?= htmlspecialchars($autor['Nacionalidade']) ?></h6>
                            <h6 class="info-secundaria">Nascimento: <?= date_format(new DateTime($autor['DataNascimento']), 'd/m/Y')  ?></h6>

                            <button class="btn-ver-mais">Ver Mais</button>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
            
        </ul>
    </div>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success">
            Autor cadastrado com sucesso!
            <span class="fechar-alert">x</span>
        </div>
    <?php endif; ?>
</section>
