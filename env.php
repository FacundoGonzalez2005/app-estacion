<?php 

	/**
	 * 
	 * En el caso de utilizar el archivo .env
	 * 
	 * $host = $_ENV["HOST"];
	 * otra forma
	 * define("HOST", $_ENV["HOST"]);
	 * 
	 * */

	/*< Sección para ejecutar la app en modo release o debug*/
	// define("RELEASE", 0); // Ejecución
	// define("DEBUG", 1); // Desarrollo

	// /*< Para modo debug o release cambiar */
	// define("MODE", DEBUG);

	// variables de entorno para nombres de la aplicacion y rutas
	$_ENV["PROJECT_NAME"] = "App-estacion";
	$_ENV["PROJECT_DESCRIPTION"] = "Bienvenido al app estación, podes consultar el estado del tiempo con diferentes caracteristicas que necesites saber.";
	$_ENV["PROJECT_AUTHOR"] = "Facundo Gonzalez";
	$_ENV["PROJECT_AUTHOR_CONTACT"] = "facundo.gonza2005@gmail.com";
	$_ENV["PROJECT_WEB"] = "http://app-estacioncom.ar";
	// $_ENV["PROJECT_KEYWORDS"] = "Matias Baez,matias baez,mattprofe,MattProfe,Matt Profe,matt profe,programación,programacion,robotica,robótica,informática,informatica,desarrollo,web";


	// $_ENV["PROJECT_MODE"] = MODE ? "?v=".mt_rand(0, 9999) : "";

 ?>