<?

	$aColorEntorno = array(
		2 => '#4dc1b7',	//	turistas
		3 => '#7763ac',	//	profesionales
		4 => '#cbdb2a',	//	colaboradores
		5 => '#ff4e53'	//	prensa
		);
	global $aMenu;
	$cColorPpal = $aColorEntorno[$aMenu[ncEntorno]];
?>
<style type='text/css'>
<!--
	a:hover    {color:<?=$cColorPpal?>}
	
	.home_titulo_color
	{
		margin-top:8px;
		width:600px;
		font-size:36px;
		font-weight:bold;
		text-transform:lowercase;
		color:<?=$cColorPpal?>;
	}
	#home_link .link_abajo a		{ color:<?=$cColorPpal?>; }
	
	.boton_favoritos
	{
		margin: 10px 0;
		padding:2px 4px;
		width:120px;
		font-size:11px;
		background:#e6e6e6;
		-moz-border-radius-topleft: 2px;
		-webkit-border-top-left-radius: 2px;
		-moz-border-radius-topright: 2px;
		-webkit-border-top-right-radius: 2px;
		-moz-border-radius-bottomleft: 2px;
		-webkit-border-bottom-left-radius: 2px;
		-moz-border-radius-bottomright: 2px;
		-webkit-border-bottom-right-radius: 2px;
		border:1px solid <?=$cColorPpal?>;
	}
	#link a:hover	{ color:<?=$cColorPpal?>; }
	
	#container
	{
		position: relative;
		overflow: auto;
		margin: auto;
		width: 960px;
		background: #ffffff url(imagenes/fondo_<?= $aMenu[ncEntorno]?>.gif) repeat-y;
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
	
	#contenido a	{	color:<?=$cColorPpal?>;	}
	
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
	
	.fondo_foot	{ overflow:auto; padding:4px 10px; color:#ffffff; background: <?=$cColorPpal?> }
	
	#contenido a.a_banner		{ color:#1b1819; font-weight:normal; }
	#contenido a.a_banner:hover	{ color:<?=$cColorPpal?>; font-weight:normal; }
	
	.menuhomebotones a { color:<?=$cColorPpal?> }
	.subtitulobottomhome { font-size:12px; color:<?=$cColorPpal?> }
	
	.subtitulo	{ margin-top:10px; font-weight:bold; text-transform:uppercase; color:<?=$cColorPpal?> }

-->
</style>