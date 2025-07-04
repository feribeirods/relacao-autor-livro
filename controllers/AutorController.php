<?php
require_once __DIR__ . '/../models/Autor.php';

class AutorController {
    public function index() {
        $titulo = 'Lista de Autores';
        $autores = Autor::listar();

        ob_start();
        include __DIR__ . '/../views/autores/index.php'; 
        
        $conteudo = ob_get_clean();
            
        include __DIR__ . '/../views/layout.php';
    }

    public function cadastro() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $autor = new Autor(null, $_POST['nomeAutor'], $_POST['nacionalidadeAutor'], $_POST['nascimentoAutor']);
            $autor->salvar();
            header("Location: /livros_autores/?controller=autor&action=index&success=1");
        } else {

            $titulo = 'Cadastro de Autores';
            
            ob_start();
            include __DIR__ . '/../views/autores/cadastro.php';
            
            $conteudo = ob_get_clean();
            
            include __DIR__ . '/../views/layout.php';
        }
    }
}
?>
