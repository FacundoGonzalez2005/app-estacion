<?php 
	
	/*< incluimos las variables de entorno */
	include_once 'env.php';

	// inicia o continua la sesión
	session_start();

	// Carga del motor de plantillas
	include_once 'lib/Motor/Motor.php';

	// por defecto seccion es landing
	$seccion = "landing";

	// slug tiene valor
	if($_GET['slug']!="")
		$seccion = $_GET['slug'];
	

	if(strlen($_GET['slug'])!=0){
		$pag = explode("/",$_GET['slug']);
		$seccion = $pag[0];	
	}

	// verificamos que exista el controlador
	if(!file_exists('controllers/'.$seccion.'Controller.php')){
		// si no existe el controlador lo llevamos al controlador de error 404
		$seccion = "error404";
	}

	// === firewall
	$aux=0;
	
	// listas de acceso por tipo de usuario
	$seccion_anonimo = ["landing", "detalle", "panel"];

	// recorro la lista de secciones no permitidas
	foreach ($seccion_anonimo as $key => $value) {
		if($value==$seccion){
			$aux++;
		}
	}

	if ($aux==0) {
		$seccion = "error404";
	}
	// === fin firewall

	// Carga del controlador
	include_once 'controllers/'.$seccion.'Controller.php';

?>