<?
	define ( 'DB_MODO' , 2);
	$oModBase =& loadModule( 'base' );
	
	$oModBase->loadLibrary('database');
	$oModBase->loadLibrary('common');
	$oModBase->loadLibrary('mensajes');
	$oModBase->loadLibrary('menu');
	$oModBase->loadLibrary('session');
	$oModBase->loadLibrary('componentes');
	$oModBase->loadLibrary('window');	
	//$oModBase->loadLibrary('mapa');	
	if ( MODO_ADMIN === true) 
		$oModBase->loadLibrary('interfaces');	
	else
		$oModBase->addHeadFile( "templates/style_inc.php" );
	
	$aModule[$cModule]->copy( &$oModBase , false );	
	$aModule[$cModule]->oUserSession = new UserSession();	
	$aModule[$cModule]->oMenu = new Menu( 'body_main' );
	$aModule[$cModule]->bPermisosDB = true;
	//$aModule[$cModule]->oDatabase = openDB( DB_MYSQL, 'localhost', 'librosar', 'cal', 'isbn1982');
	$aModule[$cModule]->oDatabase = openDB( DB_MYSQL, 'localhost', 'git', 'root', 'c4r4m3l0');
	$aModule[$cModule]->oDatabase->connect();
	$aModule[$cModule]->addStyleSheet( "bue.css" );
	$aModule[$cModule]->setTemplateHead( $oModBase->getTemplateHead() );
  // Define las constantes del la contrasena
	define ( 'CLAVE_SAVE_AS_HASH' ,  true);
	define ( 'CLAVE_HASH' ,  'E7k5w3J26Q2Qo7T0d34e' );
    define ( 'BLOQUEA_MAX_INTENTOS', 3 );   // Si a los x intentos se bloquea la cuenta ( 0 es nunca )
    define ( 'CLAVE_MINIMO_TAMANO', 6 );    // Si la clave tiene un minimo de caracteres
    define ( 'CLAVE_MIN_NUMEROS', 0 );  // Si la clave tiene un minimo de numeros
    define ( 'CLAVE_MIN_LETRAS', 0 );  // Si la clave tiene un minimo de letras
    define ( 'CLAVE_CASE_SENSITIVE', false );  // Si la clave discrimina mayusculas y minusculas
    define ( 'CLAVE_EXPIRA_EN_DIAS', 0 );   // Si la clave tiene que cambiarse cada x dias (0 es nunca)

	$aModule[$cModule]->setTitle( "Sitio oficial de turismo de la Ciudad de Buenos Aires" );
?>