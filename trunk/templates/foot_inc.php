<?
	$pe = getParam('pe');
	if ( $pe )
		$cInicio = "?mo=portal&ac=componentes&ncMenu=$pe&tr=body&mn=$pe";
	else
		$cInicio = "";
?>
<div id="foot">
	<div class="barra_entorno">
		<div class="foot_in_entorno">© 2004-2009<br/><?=mostrar_termino('LBL_SitioOficial')?></div>
	</div>
	<div class="subcontainer">
		<div class="fondo_foot">
			<div style="float: left">
				<a href="<?=$cInicio?>">inicio</a>
			</div>
			
			<div style="float: right">
				<div>
					<a href="">Uso de la información</a> | 
					<a href="">Créditos</a> | 
					<a href="">Autoridades</a> |
					<a href="">Estadísticas</a></td>
				</div>
			</div>
		</div>
	</div>
</div>
