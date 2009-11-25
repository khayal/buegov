<?
    list($nEntorno ) = explode('.', getParam('mn'));
	$aColores = array('#4dc1b7', '#7763ac', '#cbdb2a', '#ff4e53');
	$cColorPpal  = $aColores[$nEntorno-1];
?>
<style>
		a:hover    {color:<?=$cColorPpal;?>}
		
		#container
		{
			position: relative;
			overflow: auto;
			margin: auto;
			width: 960px;
			background: <?=$cColorPpal;?> url(imagenes/fondo_<?= $nEntorno?>.gif) repeat-y;
			border: 1px solid #cccccc;
		}
		
		.menu_idiomas{margin:30px 0 0 0; padding:0; height:30px; width:100%; display:block;}
		.menu_idiomas li{padding:0; margin:0; list-style:none; display:inline;}
		.menu_idiomas li a{float:left; display:block; margin-left:4px; color:#1b1819; text-decoration:none; font-size:12px; text-transform: lowercase; cursor:pointer;}
		.menu_idiomas li a span{padding:0 3px; text-align:center; line-height:16px; float:left; display:block;}
		.menu_idiomas li a:hover{background:#1b1819; color:<?=$cColorPpal;?>;}
		.menu_idiomas li a:hover span{background-position:100% -60px;}
		.menu_idiomas li a.active, .menu_idiomas li a.active:hover{line-height:16px; font-size:12px; text-transform: lowecase; color:<?=$cColorPpal;?>; background: #1b1819;}
		
		.menu_ppal{margin:0 auto; padding:0; height:36px; width:100%; display:block; border-top: 2px solid #7f7c7c; border-bottom: 2px solid #7f7c7c;}
		.menu_ppal li{padding:0; margin:0; list-style:none; display:inline;}
		.menu_ppal li a{float:left; padding-left:15px; display:block; color:#1b1819; text-decoration:none; font-size:13px; text-transform: lowercase; cursor:pointer;}
		.menu_ppal li a span{line-height:36px; float:left; display:block; padding-right:15px;}
		.menu_ppal li a:hover{background-position:0px -60px; color:<?=$cColorPpal;?>;}
		.menu_ppal li a:hover span{background-position:100% -60px;}
		.menu_ppal li a.active, .menu_ppal li a.active:hover{line-height:36px; font-size:13px; text-transform: lowecase; color:<?=$cColorPpal;?>;}
			
	</style>