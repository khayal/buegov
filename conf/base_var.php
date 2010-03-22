<?
	// Define las Constantes de Directorios
	define ( 'MODO_AJAX', MODO_AJAX_HABILITADO);
	define( 'PATH_FILES' ,   '/home/sclaros/htdocs/desa/files' );
	define( 'URL_FILES' ,  '../desa/files/' );
	define( 'LOG_FILE' , PATH_ROOT . 'log/log.txt' );
	define( 'PATH_TMP' , PATH_FILES . 'tmp' );
	define( 'PATH_BANCO_IMAGENES' , PATH_ROOT . 'files/banco_imagenes' );
	define ( 'MENSAJE_MUESTRA' , E_USER_WARNING  );
	define ( 'MENSAJE_REGISTRA' , E_USER_ERROR || E_ERROR );

	define ( 'CALENDAR_HORA_DESDE', 8 );
	define ( 'CALENDAR_HORA_HASTA', 21 );
	define ( 'CALENDAR_INTERVALO_WEEK', 1 );
	define ( 'CALENDAR_INTERVALO_DAY', 1 );
	
	define( 'PATH_FONT' , PATH_MODULES . 'base/componentes/' );
	define ( 'FONT_FILE', PATH_MODULES . 'base/componentes/georgiab.ttf' );
	
	define ( 'USER_SESSION_VARIABLE_NAME', 'user_session_data_bsas' );
	define ( 'ENTORNO_METADATA', true);
	define ( 'JAVASCRIPT_COMPRESSED', false);
	define ( 'EDITOR', false );
	//$aModule[$cModule]->addScript ( "function refreshHead() { send( '?refresh=head' , refreshElement, 'head' , false ); window.setTimeout( refreshHead(), 12000); } window.setTimeout( refreshHead(), 12000);" , false) ;
	$aModule[$cModule]->setTitle('Bue');
?>
