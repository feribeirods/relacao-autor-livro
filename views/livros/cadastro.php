<section class="section-cadastro">
    <div class="container-titulo">
        <h1 class="titulo-pagina">Livros</h1>
        <h3 class="subtitulo-pagina">Cadastro de Livro</h3>
    </div>

    <div class="container-form">
        <form action="/livros_autores/?controller=livro&action=cadastro" method="POST">
            <label for="tituloLivro">
                Título
                <input type="text" name="tituloLivro" id="tituloLivro" placeholder="ex: Senhor dos Anéis" required>
            </label>

            <label for="publicacaoLivro">
                Data de Publicação
                <input type="date" name="publicacaoLivro" id="publicacaoLivro" placeholder="DD/MM/AAA" required>
            </label>

            <label for="generoLivro">
                Gênero
                <input type="text" name="generoLivro" id="generoLivro" placeholder="ex: Fantasia" required>
            </label>

            <label for="autorId">
                Autor
                <select name="autorId" id="autorId">
                    <option value="0">Selecione o Autor</option>
                    <?php foreach ($autores as $autor): ?>
                        <option value="<?= $autor['Id'] ?>"><?= $autor['Nome'] ?></option>
                    <?php endforeach; ?>
                </select>
            </label>

            <button class="btn-cadastrar" type="submit">Cadastrar</button>
        </form>
    </div>
</section>