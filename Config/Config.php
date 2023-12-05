<?php 

	CONST PROT = "http://";
	CONST WEB = "localhost/undc-ecommerce-tienda-georgetech";
	//const BASE_URL = "http://georgetecnologia.com";
	const BASE_URL = PROT . WEB;
	//const BASE_URL = "https://tecomsis.com";

	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "u717302495_tienda";
	const DB_USER = "u717302495_root";
	const DB_PASSWORD = "Q*j4z23Eit7v";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/";
	const CURRENCY = "PEN";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@tecomsis.com";
	const NOMBRE_EMPESA = "George Tecnologia";
	const WEB_EMPRESA = WEB;

	const DESCRIPCION = "Una tienda especializada en moda de avanzada para hombre y mujeres.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Imperial - Cañete";
	const DIRECCION2 = "Av. 28 de Julio N° 524 ";
	const DIRECCION3 = "Galeria '28 de Julio' Stand 7";
	const TELEMPRESA = "+(51)942134272";
	const WHATSAPP = "942134272";
	const EMAIL_EMPRESA = "georgetech@gmail.com";
	const EMAIL_PEDIDOS = "georgetech@gmail.com"; 
	const EMAIL_SUSCRIPCION = "info@tecomsis.com";
	const EMAIL_CONTACTO = "info@tecomsis.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'tecomsis';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 12;
	const PROCATEGORIA = 12;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/profile.php?id=100085460866773&sk=about";
	const NOMFACEBOOK = "George Tecnologia";
	const INSTAGRAM = "https://www.instagram.com/tecomsis/";
	

 ?>