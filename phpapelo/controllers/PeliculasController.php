<?php
class PeliculasController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 
    public function listar()
    {
        //Incluye el modelo que corresponde
        require 'models/PeliculasModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $peliculas = new PeliculasModel();
 
        //Le pedimos al modelo todos los items
        $listado = $peliculas->listadoPeliculas();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
		print_r($listado);
		
        //Finalmente presentamos nuestra plantilla
       // $this->view->show("listar.php", $data);
    }
	 public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar items';
    }
}
?>