<?php
class peliculasModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
		
		//creamos las tablas
		$this->db->prepare('CREATE TABLE IF NOT EXISTS `peliculas` (
		`cod` int(11) NOT NULL AUTO_INCREMENT,
		`nombre` varchar(255) DEFAULT NULL,
		`titulo` varchar(255) DEFAULT NULL,
		`autor` varchar(255) DEFAULT NULL,
		`duracion` int(3) DEFAULT NULL,
		`imagen` varchar(255) DEFAULT NULL,
		`descripcion` varchar(255) DEFAULT NULL,
		PRIMARY KEY (`cod`)
		);');	
		$this->db->execute();
		
		$data;
		$data['cod']=1;
		$data['nombre']="Juana la loca";
		$data['titulo']="sasds";
		$data['autor']="asdas";
		$data['duracion']="";
		$data['imagen']="asasda";
		$data['descripcion']="asdasdasdasad";
		
		aniadirPelicula(data);
    }
 
    public function aniadirPelicula($pelicula)
	{
		$cod=$pelicula['cod']; 
		$nombre= $pelicula['nombre'];
		$titulo= $pelicula['titulo'];
		$autor=$pelicula['autor'];
		$duracion=$pelicula['duracion'];
		$imagen=$pelicula['imagen'];
		$descripcion=$pelicula['descripcion'];
		
		$this->db->prepare('INSERT INTO `peliculas` values (:cod,:nombre,:titulo,:autor,:duracion,:imagen,:descripcion)');
		$this->db->execute();
	}
 
   /** public function listadoPeliculas()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT * FROM items');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
	*/
	
	 public function listadoPeliculas()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT * FROM peliculas');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
	
}
?>