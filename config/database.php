<?php
class Database {
    private static $conn;

    public static function getConnection() {
        if (!self::$conn) {
            self::$conn = new PDO("mysql:host=localhost;dbname=livros_autores;charset=utf8", "UsuarioBanco", "SenhaBanco");
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }
}
?>
