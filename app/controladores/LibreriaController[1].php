<?php
// Incluir el modelo de Libro
require_once __DIR__ . '/../models/Libro.php';

class LibreriaController {
    private $libro;

    public function __construct($pdo) {
        // Crear una instancia del modelo Libro, pasando la conexión PDO
        $this->libro = new Libro($pdo);
    }

    // Método modificado para aceptar un parámetro (número de libros)
    public function mostrarLibros($cantidad = null) {
        if ($cantidad) {
            // Si se especifica una cantidad, obtenemos solo esa cantidad de libros
            $libros = $this->libro->obtenerLibrosLimitados($cantidad);
        } else {
            // Si no se especifica cantidad, obtenemos todos los libros
            $libros = $this->libro->obtenerLibros();
        }

        // Incluir la vista libros.php y pasarle los datos de los libros
        require_once __DIR__ . '/../views/libros.php';
    }
}
