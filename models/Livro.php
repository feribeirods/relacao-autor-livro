<?php
require_once __DIR__ . '/../config/database.php';

class Livro {
    public $id, $titulo, $genero, $dataPublicacao, $autorId;

    public function __construct($id = null, $titulo = null, $genero = null, $dataPublicacao = null, $autorId = null) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->dataPublicacao = $dataPublicacao;
        $this->autorId = $autorId;
    }

    public static function listar() {
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT Livro.*, Autor.Nome AS AutorNome FROM Livro LEFT JOIN Autor ON Livro.AutorId = Autor.Id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function salvar() {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO Livro (Titulo, DataPublicacao, Genero, AutorId) VALUES (?, ?, ?, ?)");
        $stmt->execute([$this->titulo, $this->dataPublicacao, $this->genero, $this->autorId]);
    }
}
?>
