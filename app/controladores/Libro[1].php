<?php
class Libro {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Método para obtener todos los libros
    public function obtenerLibros() {
        $stmt = $this->pdo->query('SELECT * FROM libros');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener una cantidad limitada de libros
    public function obtenerLibrosLimitados($cantidad) {
        $stmt = $this->pdo->prepare('SELECT * FROM libros LIMIT :cantidad');
        $stmt->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
