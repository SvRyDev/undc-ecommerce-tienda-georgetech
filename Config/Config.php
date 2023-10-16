<?php 
	
	define("BASE_URL", "http://localhost/undc-ecommerce-tienda-georgetech/");
	//const BASE_URL = "https://tecomsis.com/";

	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos
	const DB_HOST = "clear-flyer-1361.g8x.cockroachlabs.cloud";
	const DB_NAME = "clear-flyer-1361.defaultdb";
	const DB_USER = "daniel";
	const DB_PASSWORD = "K6Bcj4lIYyZhqDyH8QyDlQ";
	const DB_CHARSET = "utf8";
	const DB_PORT = "26257";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/";
 ?>