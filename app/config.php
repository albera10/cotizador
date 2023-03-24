<?php
	// Para saber si estamos en ambiente local.
	define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));	// 1
	define('URL', (IS_LOCAL ? 'http://localhost/proyectos/cotizador/' : 'La url de su servidor en producción')); // http://localhost/proyectos/cotizador/

	// Rutas de carpetas locales no webs
	define('DS', DIRECTORY_SEPARATOR); 			// (/)		
	define('ROOT', getcwd().DS); 				// /opt/lampp/htdocs/proyectos/cotizador/app/
	define('APP', ROOT.'app'.DS);				// /opt/lampp/htdocs/proyectos/cotizador/app/app/
	define('ASSETS', ROOT.'assets'.DS);			// /opt/lampp/htdocs/proyectos/cotizador/app/assets/
	define('TEMPLATES', ROOT.'template'.DS);	// //opt/lampp/htdocs/proyectos/cotizador/app/template/
	define('INCLUDES', TEMPLATES.'includes'.DS);// /opt/lampp/htdocs/proyectos/cotizador/app/template/includes/
	define('MODULES', TEMPLATES.'modules'.DS);	// /opt/lampp/htdocs/proyectos/cotizador/app/template/modules/
	define('VIEWS', TEMPLATES.'views'.DS);		// /opt/lampp/htdocs/proyectos/cotizador/app/template/views/
	define('UPLOADS', ROOT.'uploads'.DS);		// /opt/lampp/htdocs/proyectos/cotizador/app/uploads/

	// Para archivos que vayamos a incluir en header o footer (css o js)
	define('CSS', URL.'assets/css/'); 	// http://localhost/proyectos/cotizador/assets/css/
	define('IMG', URL.'assets/img/'); 	// http://localhost/proyectos/cotizador/assets/img/
	define('JS', URL.'assets/js/');		// http://localhost/proyectos/cotizador/assets/js/