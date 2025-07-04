<?php
require_once __DIR__ . '/../models/Livro.php';
require_once __DIR__ . '/../models/Autor.php';

class LivroController {
    public function index() {
        $titulo = 'Lista de Livros';
        $livros = Livro::listar();

        ob_start();
        include __DIR__ . '/../views/livros/index.php'; 
        
        $conteudo = ob_get_clean();
            
        include __DIR__ . '/../views/layout.php';
    }

    public function cadastro() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $livro = new Livro(null, $_POST['tituloLivro'], $_POST['generoLivro'], $_POST['publicacaoLivro'], $_POST['autorId']);
            $livro->salvar();
            header("Location: /livros_autores/?controller=livro&action=index&success=1");
        } else {
            $autores = Autor::listar();
            $titulo = 'Cadastro de Livros';
            
            ob_start();
            include __DIR__ . '/../views/livros/cadastro.php';
            
            $conteudo = ob_get_clean();
            
            include __DIR__ . '/../views/layout.php';
        }
    }
}
?>
