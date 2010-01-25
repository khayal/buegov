<?
	global $aMenu;

	$oFechaHoy = new dateObject();
	$oFechaHoy->setToday();

	$oHoraHoy = new dateTimeObject();
	$oHoraHoy->setToday();
	
	$lang = getParam('lang', 'es');
?>

<div id="body">
	<div class="barra_entorno">
		<div style="padding:0 10px">
			<div><h1><a href="?ncMenu=<?=$aMenu[ncEntorno]?>">Buenos Aires</a></h1></div>
			<div><h2>turismo</h2></div>
			<div><h3><?=mostrar_termino('LBL_Titulo_Portal')?></h3></div>
			<div class="fecha">
				<?=$oFechaHoy->getWeekDayName()." ".$oFechaHoy->getValue ("dd")." de ".$oFechaHoy->getValue ("mmmm, yyyy")?><br/>
				<?=$oHoraHoy->getValue ("hh:ii")?>
			</div>
			<div>
				<ul class="menu_idiomas">
					<li><a href="?lang=es" <?if($lang=='es') echo "class='active'"?>><span>español</span></a></li>
					<li><a href="?lang=en" <?if($lang=='en') echo "class='active'"?>><span>english</span></a></li>
					<li><a href="?lang=pt" <?if($lang=='pt') echo "class='active'"?>><span>portugues</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="subcontainer"><?	$this->show(); ?></div>
</div>
