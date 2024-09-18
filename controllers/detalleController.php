<?php 

	// carga la vista
	$tpl = new Motor("detalle");

	$json = file_get_contents("./json/estaciones.json");

	$matriz = json_decode($json);

	var_dump($matriz);

	// imprime la vista en la página
	$tpl->print();

	
 ?>