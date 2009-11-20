<?
	// Define Constantes del Modulo
	//define( 'PATH_ROOT' , '/home/hurrell/public_html/bue' );    
	//define( 'PATH_MODULES' , '/home/hurrell/public_html/desa/modules/' );
	define( 'PATH_ROOT' , '/home/sclaros/htdocs/bue/' );    
	define( 'PATH_MODULES' , '/home/sclaros/htdocs/desa/modules/' );
	//define( 'PATH_ROOT' , '/var/www/bue/' );
	//define( 'PATH_MODULES' , '/var/www/desa/modules/' );
	//define( 'PATH_ROOT' , '/var/www/html/bue/' );
	//define( 'PATH_MODULES' , '/var/www/html/desa/modules/' );
	
    define( 'URL_ROOT'      , '/bue/' );
    define( 'URL_MODULES'      , '/desa/modules/' );
    define( 'URL_IMAGES'    ,  URL_MODULES . URL_ROOT . '/imagenes' );
    
    define( 'URL_MAP_IMAGES', '/mibaq/imagenes');
    define( 'START_MODULE'  , 'portal' );
    define( 'START_ACTION'  , 'home' );
    define( 'START_MENU'  , 100);

	$aLanguage = array (
                 array ('es', 'Español'  , 'lang_es.gif'),
                 array ('en', 'Ingles'   , 'lang_en.gif'),
                 array ('pt', 'Portugues', 'lang_pt.gif'),
                       );
	// Abre los objetos de los modulos
	// Abre los objetos de los modulos
	$aInstallModules['base'] = array (  'nModule' => 1, 'cPathModule' => PATH_MODULES . 'base',
                                      'cUrl' => URL_MODULES  .'/base' ,
										'cPathConf' => './conf' ,
										'cUrlCss' => (defined('MODO_ADMIN') && MODO_ADMIN ? URL_MODULES .'base/css'  : URL_ROOT .'css'  ), 
										'cPathTemplates' => (defined('MODO_ADMIN') && MODO_ADMIN ? PATH_MODULES .'base/templates1' : PATH_ROOT .'templates' )
									);
	$aInstallModules['seguridad'] = array ( 'nModule' => 3,'cPathModule' => PATH_MODULES .'seguridad',
                                            'cUrlCss' => URL_ROOT .'css' ,
											'cUrl' => URL_ROOT .'/modules/seguridad' ,
											'cPathConf' => './conf' 
										);
	$aInstallModules['documentacion']    = array (  'nModule' => 2, 'cPathModule' => PATH_MODULES . 'documentacion',									
											'cUrl' => URL_ROOT .'/modules/documentacion' 
										);
	$aInstallModules['administracion'] = array ( 'nModule' => 4,'cPathModule' => PATH_MODULES . 'administracion',
											'cUrl' => URL_ROOT .'/modules/base' ,
										);
	$aInstallModules['portal']    = array (   'nModule' => 5,'cPathModule' => PATH_MODULES . 'portal',									
											'cUrl' => URL_ROOT .'/modules/portal'
										);
	$aInstallModules['clientes']    = array (   'nModule' => 13,'cPathModule' => PATH_MODULES . 'clientes',									
											'cUrl' => URL_ROOT .'/modules/clientes'
										);
	$aInstallModules['eventos']    = array (   'nModule' => 6,'cPathModule' => PATH_MODULES . 'eventos',									
											'cUrl' => URL_ROOT .'/modules/eventos'
										);
	$aInstallModules['agenda']    = array (   'nModule' => 7,'cPathModule' => PATH_MODULES . 'agenda',									
											'cUrl' => URL_ROOT .'/modules/agenda'
										);
	$aInstallModules['noticias']    = array (   'nModule' => 8,'cPathModule' => PATH_MODULES . 'noticias',									
											'cUrl' => URL_ROOT .'/modules/noticias'
										);
	$aInstallModules['poesia']    = array (   'nModule' => 9,'cPathModule' => PATH_MODULES . 'poesia',									
											'cUrl' => URL_ROOT .'/modules/poesia'
										);
	$aInstallModules['servicios']    = array (   'nModule' => 11,'cPathModule' => PATH_MODULES . 'servicios',									
											'cUrl' => URL_ROOT .'/modules/servicios'
										);
	$aInstallModules['recorridos']    = array (   'nModule' => 12,'cPathModule' => PATH_MODULES . 'recorridos',
											'cUrl' => URL_ROOT .'/modules/recorridos'
										);

?>