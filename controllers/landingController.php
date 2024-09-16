<?php 

	// carga la vista
	$tpl = new Motor("landing");

	// variables a reemplazar en la plantilla con sus valores
	$var = ["CANT_LUGARES" => 4];

	// reemplaza las variables de la vista con los valores del vector
	$tpl->setVars($var);

	// imprime la vista en la página
	$tpl->print();

 ?>