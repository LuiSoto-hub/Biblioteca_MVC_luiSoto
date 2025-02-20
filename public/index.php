<?php
// Incluir la clase del controlador
require_once __DIR__ . '/../app/controllers/LibreriaController.php';

// Incluir la configuración de la base de datos (suponiendo que la tienes en config/database.php)
require_once __DIR__ . '/../config/database.php';

// Obtener la ruta de la URL
$request = $_SERVER['REQUEST_URI'];


// Crear una instancia del controlador
$controller = new LibreriaController($pdo);

// Dependiendo de la ruta, mostrar el número de libros deseado
if ($request === '/libreria_mvc/public/index.php/dosLibros') {
    $controller->mostrarLibros(2);  // Mostrar 2 libros
} elseif ($request === '/libreria_mvc/public/index.php/tresLibros') {
    $controller->mostrarLibros(3);  // Mostrar 3 libros
} else {
    $controller->mostrarLibros();  // Mostrar todos los libros
}
