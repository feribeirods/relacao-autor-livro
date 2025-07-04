<section class="section-cadastro">
    <div class="container-titulo">
        <h1 class="titulo-pagina">AUTORES</h1>
        <h3 class="subtitulo-pagina">Cadastro de Autor</h3>
    </div>

    <div class="container-form">
        <form action="/livros_autores/?controller=autor&action=cadastro" method="POST">
            <label for="nomeAutor">
                Nome
                <input type="text" name="nomeAutor" id="nomeAutor" placeholder="ex: Tolkien" required>
            </label>

            <label for="nacionalidadeAutor">
                Nacionalidade
                <input type="text" name="nacionalidadeAutor" id="nacionalidadeAutor" placeholder="ex: Reino Unido" required>
            </label>

            <label for="nascimentoAutor">
                Data de Nascimento
                <input type="date" name="nascimentoAutor" id="nascimentoAutor" placeholder="DD/MM/AAA" required>
            </label>

            <button class="btn-cadastrar" type="submit">Cadastrar</button>
        </form>
    </div>
</section>