<?php
require_once __DIR__ . '/../config/database.php';

class Autor {
    public $id, $nome, $nacionalidade, $dataNascimento;

    public function __construct($id = null, $nome = null, $nacionalidade = null, $dataNascimento = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->dataNascimento = $dataNascimento;
    }

    public static function listar() {
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM Autor");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function salvar() {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO Autor (Nome, Nacionalidade, DataNascimento) VALUES (?, ?, ?)");
        $stmt->execute([$this->nome, $this->nacionalidade, $this->dataNascimento]);
    }
}
?>
