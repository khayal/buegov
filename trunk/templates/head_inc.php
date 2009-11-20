<?
	$oFechaHoy = new dateTimeObject();
	$oFechaHoy->setToday();
	
	$oMenu = new Menu('body', 'menu_entornos', 'menu_entornos', true);
	$oMenu->setMuestraSelector(true);
	$cSql = "SELECT ncMenu, cdMenu, cUrl, bExpandido, cDescripcion FROM gtMenu WHERE ncEstadoPublicacion = 2 AND ncMenuPadre = 1";
	$oRs = $this->oDatabase->recordset($cSql);
	while ( $oRs->moveNext() )
	{
		$cUrl = substr($oRs->aFields['cUrl'], 0, 7) == 'http://' ? $oRs->aFields['cUrl'] : '?' . $oRs->aFields['cUrl'] . '&amp;ncMenu=' . $oRs->aFields['ncMenu'];
		$oMenu->addItem( extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) , $cUrl, 'body', $oRs->aFields['cDescripcion'], $oRs->aFields['bExpandido'] );
	}
	
?>
	<div id="barra_entorno">
		<div>mapa buenos aires</div>
		<div><h1>Buenos Aires</h1></div>
		<div><h2>entorno</h2></div>
		<div><h3>portal oficial de turismo de la ciudad de buenos aires</h3></div>
		<div class="fecha"><?=$oFechaHoy->getValue ("dd")." de ".$oFechaHoy->getValue ("mmmm, yyyy")?></div>
		<div class="fecha"><?=$oFechaHoy->getValue ("hh:ii")?></div>
		<div>
			<ul class="menu_idiomas">
				<li>español</li>
				<li>english</li>
				<li>portugues</li>
			</ul>
		</div>
	</div>
	
	<div id="subcontainer"> <!-- Cierra en el FOOT -->
		<div id="head">
			<div style="overflow: auto">
				<div style="float: left">Mi Buenos Aires > <a href='?ac=perfil&amp;mo=clientes'>registrarme</a> <a href='?ac=login&amp;mo=clientes' onclick="openPopup('?ac=login&amp;mo=clientes&fr=action' , 'Ingresar' );return false;">ingresar</a></div>
				<div style="float: right">buscador</div>
			</div>
			<div><? $oMenu->makeHTML(); ?></div>
		</div>