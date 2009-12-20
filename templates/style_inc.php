<?
    list($nEntorno ) = explode('.', getParam('pe'));
	if ( !$nEntorno  ) $nEntorno  = 1;
	$aColores = array(
		'#4dc1b7',	//	turistas
		'#7763ac',	//	profesionales
		'#cbdb2a',	//	colaboradores
		'#ff4e53'		//	prensa
		);
	$cColorPpal = $aColores[$nEntorno-1];
?>
<style type='text/css'>
<!--
	a:hover    {color:<?=$cColorPpal?>}
	
	#container
	{
		position: relative;
		overflow: auto;
		margin: auto;
		width: 960px;
		background: #ffffff url(imagenes/fondo_<?= $nEntorno?>.gif) repeat-y;
		border: 1px solid #cccccc;
	}
	
	.menu_idiomas{margin:30px 0 0 0; padding:0; height:30px; width:100%; display:block;}
	.menu_idiomas li{padding:0; margin:0; list-style:none; display:inline;}
	.menu_idiomas li a{float:left; display:block; margin-left:4px; color:#1b1819; text-decoration:none; font-size:12px; text-transform: lowercase; cursor:pointer;}
	.menu_idiomas li a span{padding:0 3px; text-align:center; line-height:16px; float:left; display:block;}
	.menu_idiomas li a:hover{background:#1b1819; color:<?=$cColorPpal?>;}
	.menu_idiomas li a:hover span{background-position:100% -60px;}
	.menu_idiomas li a.active, .menu_idiomas li a.active:hover{line-height:16px; font-size:12px; text-transform: lowecase; color:<?=$cColorPpal;?>; background: #1b1819;}
	
	.menu_ppal{margin:0 auto; padding:0; height:36px; width:100%; display:block; border-top: 2px solid #7f7c7c; border-bottom: 2px solid #7f7c7c;}
	.menu_ppal li{padding:0; margin:0; list-style:none; display:inline;}
	.menu_ppal li a{float:left; padding-left:7px; display:block; color:#1b1819; text-decoration:none; font-size:12px; font-weight:bold; text-transform: lowercase; cursor:pointer;}
	.menu_ppal li a span{line-height:36px; float:left; display:block; padding-right:7px;}
	.menu_ppal li a:hover{background-position:0px -60px; color:<?=$cColorPpal?>;}
	.menu_ppal li a:hover span{background-position:100% -60px;}
	.menu_ppal li a.active, .menu_ppal li a.active:hover{line-height:36px; font-size:12px; font-weight:bold; text-transform: lowecase; color:<?=$cColorPpal;?>;}
	
	#contenido
	{
		font-family: sans-serif;
		border: 1px solid <?=$cColorPpal?>;
		padding: 10px;
	}
	#contenido .contenido	{	margin-top: 10px;	}
	#contenido .espacio_icono	{	width: 100px;	}
	#contenido .texto
	{
		width: 600px;
		margin-left: 10px;
		vertical-align: top;
	}
	#contenido .titulo
	{
		font-size: 11px;
		font-weight: bold;
		color: <?=$cColorPpal?>;
		text-transform: uppercase;
	}
	#contenido .descripcion	{	font-size: 11px;	}
	
	#contenido_home .celda
	{
		margin: 6px 0 0 6px;
		width: 176px;
		height: 120px;
		border: 1px solid #eeeeee;
		overflow: hidden;
	}
	#contenido_home .titulo	{	font-size: 20px; font-weight: bold;	}
	
	#filtros .subtitulo	{	font-size: 12px; font-weight: bold; text-transform: uppercase; color: <?=$cColorPpal?>	}
	#filtros a:hover	{ color: <?=$cColorPpal?> }
	
	.titulo_ficha_atractivo	{	margin-top: 20px; padding: 2px 10px; font-size: 18px; font-weight: bold; color: #ffffff; background: <?=$cColorPpal?>	}
	
	.numerito	{	font-size: 12px; color:<?=$cColorPpal?>	}
-->
</style>