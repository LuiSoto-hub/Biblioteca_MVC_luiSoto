# Biblioteca MVC

Este es un proyecto de una aplicación web en PHP que sigue el patrón Modelo-Vista-Controlador (MVC). Permite la gestión de una biblioteca con funcionalidades para listar, agregar y eliminar libros.

## Tecnologías Utilizadas
- PHP
- MySQL
- HTML

## Estructura del Proyecto

```
Biblioteca/
│── Index.php                # Punto de entrada de la aplicación
│── conexion.php             # Configuración de la conexión a la base de datos
│
├── controllers/
│   ├── LibroController.php  # Controlador para manejar la lógica de los libros
│
├── models/
│   ├── Libro.php            # Modelo para la manipulación de datos en la base de datos
│
├── view/
│   ├── libros.php           # Vista para mostrar los libros
│   ├── agregar_libro.php    # Vista para agregar un nuevo libro
```

## Instalación
1. Clona el repositorio:
   ```bash
   git clone <URL_DEL_REPO>
   ```
2. Importa la base de datos `mvc_libros` con la siguiente estructura:
   ```sql
   CREATE DATABASE mvc_libros;
   USE mvc_libros;
   CREATE TABLE libros (
       id INT AUTO_INCREMENT PRIMARY KEY,
       titulo VARCHAR(255) NOT NULL,
       autor VARCHAR(255) NOT NULL,
       anio INT NOT NULL
   );
   ```
3. Configura la conexión a la base de datos en `conexion.php`:
   ```php
   $host = 'localhost';
   $dbname = 'mvc_libros';
   $username = 'root';
   $password = '';
   ```
4. Inicia un servidor local con PHP:
   ```bash
   php -S localhost:8000
   ```
5. Abre `http://localhost:8000/Index.php` en tu navegador.

## Funcionalidades
- Listar todos los libros de la base de datos.
- Agregar un nuevo libro mediante un formulario en la vista.
- Eliminar libros de la lista.

## Autor
José Luis Soto Chavez
