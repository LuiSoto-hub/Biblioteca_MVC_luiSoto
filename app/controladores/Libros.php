<?php
/**
 * Libros.php "Toda CLase debe tener un index."
	Libros hereda los
	Gestiona el tránsito de datos entre el modelo principal y la vista principal.
	index() tiene el propósito de recuperar todos los registros-atributos de la base de datos
	el constructor asigna un objeto tipo "LibrosModelo"
	Es importante que el nombre de las funciones comienze con mayuscula, 
	representa un archivo en la carpeta app/modelos/ y app/vista
 */
class Libros extends Controlador
{
  private $model;//interface para vincular 
  function __construct()
  {
	  /*Controlador::modelo() 
	  genera un objeto por omision*/
    $this->model=$this->modelo("LibrosModelo");
  }
	/*función por omisión */
  public function index(){
	  /*recupera registro-atributos de la base de datos*/
    $data=$this->model->getLibros();
    //llamamos a la vista por omision desde Controlador::vista($vista,$datos=[])
    $this->vista("LibrosVista",$data);
  }
  
  public function Agregar(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $titulo = $_POST['titulo'];
      $autor = $_POST['autor'];
      $anio = $_POST['anio'];
      $this->model->agregarLibro($titulo, $autor, $anio);
      header('Location: /C:/xampp/htdocs/Biblioteca_MVC/Index.php');
    } else {
      $this->vista("AgregarLibroVista");
    }
  }
}
?>