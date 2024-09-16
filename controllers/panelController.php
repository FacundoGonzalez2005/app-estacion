<?php 

	// variables para la vista
	$vars = ["PROJECT_SECTION" => "Panel", "USER_NAME" => $_SESSION['estacion']["user"]->first_name]; 
	
	// Carga la vista
	$tpl = new Motor("panel");

	// carga las variables en la vista
	$tpl->setVars($vars);

	// imprime la vista en la página
	$tpl->print();
	
 ?>