<?php 

	// carga la vista
	$tpl = new Motor("detalle");

	$tpl->load("detalle");

	$tpl->setVars(["CHIPID"=>explode("/",$_GET['slug'])[1]]);

	// imprime la vista en la página
	$tpl->print();


 ?>