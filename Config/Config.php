<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	const BASE_URL = "http://localhost/tienda_virtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "charset=utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "Q";

	//Datos para envio de correo
	const NOMBRE_REMITENTE = "La Oculta"; //nombre de la empresa
	const EMAIL_REMITENTE = "no-reply@tobares.com";

	const NOMBRE_EMPRESA = "La Oculta";
	const WEB_EMPRESA = "www.LaOculta.com";
	


 ?>