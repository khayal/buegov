<?
	global $aMenu;

	$oMenuEntornos = new Menu('body', 'menu_entornos', 'menu_entornos', true, 'mn');
	$oMenuEntornos->setValue( $aMenu[ncEntorno] );
	$cSql = "SELECT ncMenu, cdMenu, cUrl, bExpandido, cDescripcion, cCamino FROM gtMenu WHERE ncEstadoPublicacion = 2 AND ncMenuPadre = 1";
	$oRs = $this->oDatabase->recordset($cSql);
	$nIndex = 1;
	while ( $oRs->moveNext() )
	{
		$cdMenu = extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) ;
		$cUrl = substr($oRs->aFields['cUrl'], 0, 7) == 'http://' ? $oRs->aFields['cUrl'] : '?' . $oRs->aFields['cUrl'] . '&amp;ncMenu=' . $oRs->aFields['ncMenu'];
		$oMenuEntornos->addItem( extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) , $cUrl, 'body', $oRs->aFields['cDescripcion'], $oRs->aFields['bExpandido'], '', '', '', $oRs->aFields['ncMenu']  );
		$nIndex++;
	}
	$oMenuPpal = new Menu('body', 'menu_ppal', 'menu_ppal', true, 'mn');
	$oMenuPpal->setValue( '1.' .$aMenu[ncEntorno] .'.'. $aMenu[nSeccion] .'.' );
	$cSql = "SELECT ncMenu, cdMenu, cUrl, bExpandido, cDescripcion, cCamino FROM gtMenu WHERE ncEstadoPublicacion = 2 AND ncMenuPadre = " . $aMenu[ncEntorno];
	$oRs = $this->oDatabase->recordset($cSql);
	while ( $oRs->moveNext() )
	{
		$cdMenu = extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) ;
		$cUrl = substr($oRs->aFields['cUrl'], 0, 7) == 'http://' ? $oRs->aFields['cUrl'] : '?' . $oRs->aFields['cUrl'] . '&amp;pe=' . $aMenu[ncEntorno]. '.&amp;ncMenu=' . $oRs->aFields['ncMenu'];
		$oMenuPpal->addItem( $cdMenu, $cUrl, 'body', $oRs->aFields['cDescripcion'], $oRs->aFields['bExpandido'], '', '', '', $oRs->aFields['cCamino'] .  $oRs->aFields['ncMenu'] . '.'  );
	}
	//echo "<link  rel='stylesheet'  href='/bue/css/".strtolower(extractLanguage($cEntorno,'es')).".css' type='text/css' />";
	//$aModule[$cModule]->addStyleSheet( $cEntorno.".css" );

?>

<div id="head">
	<div class="barra_entorno">
		<div style="margin-top:20px"><a href="http://www.buenosaires.gob.ar"><img src="imagenes/logoBA_<?=$aMenu[ncEntorno]?>.gif" width="202" height="43" style="border:none" alt="Gobierno de Buenos Aires" /></a></div>
	</div>
	<div class="subcontainer">
		<!-- ingreso y buscador -->
		<div style="overflow:auto; height:40px">
			<div style="float:left">
				<div style="overflow:auto; margin-top:3px">
					<div style="float:left">Mi Buenos Aires <img src="imagenes/fle_der.gif" width="7" height="8" style="border:none" alt=">" /></div>
					<div style="float:left; margin-left:10px"><a href='?ac=perfil&amp;mo=clientes'>registrarme</a></div>
					<div style="float:left; margin-left:10px"><a href='?ac=login&amp;mo=clientes' onclick="openPopup('?ac=login&amp;mo=clientes&rf=action' , 'Ingresar' );return false;">ingresar</a></div>
				</div>
			</div>
			<div style="float:right">
				<div style="overflow: hidden; height:18px; border:2px solid #bbbbbb">
					<form method="post" action="?mo=portal&ac=busqueda" id="frmBuscar" name="frmBuscar">
					<div style="float:left"><input type="text" name="buscar" onclick="this.value=''" style="border:none; width:250px; padding:3px 0 0 2px; font-family:serif; font-size:10px; color:#6d6d6d; text-transform:uppercase" value="buscar" /></div>
					<div style="float:left"><a href="#" onclick="frmBuscar.submit(); return false;"<img src="imagenes/flecha_buscar.gif" value="buscar" width="18" height="18" style="border:none" alt="buscar" /></a></div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- menu principal -->
		<div>
			<div><? $oMenuEntornos->makeHTML(); ?></div>
			<div><? $oMenuPpal->makeHTML(); ?></div>
		</div>
	</div>
</div>
