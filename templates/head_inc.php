<?
    $oFechaHoy = new dateObject();
    $oFechaHoy->setToday();
    
    $oHoraHoy = new dateTimeObject();
    $oHoraHoy->setToday();
    
    $ncMenu = getParam(ncMenu, START_MENU);
	
    list($nEntorno ) = explode('.', getParam('pe'));
	if ( !$nEntorno  ) $nEntorno  = 1;
    $lang = getParam('lang', 'es');
    
    $oMenuEntornos = new Menu('body', 'menu_entornos', 'menu_entornos', true);
    $oMenuEntornos->setKeyName( 'pe' );
    $oMenuEntornos->setMuestraSelector(true);
    $cSql = "SELECT ncMenu, cdMenu, cUrl, bExpandido, cDescripcion FROM gtMenu WHERE ncEstadoPublicacion = 2 AND ncMenuPadre = 1";
    $oRs = $this->oDatabase->recordset($cSql);
    $nIndex = 1;
    while ( $oRs->moveNext() )
    {
        $cdMenu = extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) ;
        if ( !$ncEntorno || $nIndex == $nEntorno)  
        {
            $_SESSION[cEntorno] = $cEntorno = $cdMenu;
            $ncEntorno =  $oRs->aFields['ncMenu'];
        }
        $cUrl = substr($oRs->aFields['cUrl'], 0, 7) == 'http://' ? $oRs->aFields['cUrl'] : '?' . $oRs->aFields['cUrl'] . '&amp;ncMenu=' . $oRs->aFields['ncMenu'];
        $oMenuEntornos->addItem( extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) , $cUrl, 'body', $oRs->aFields['cDescripcion'], $oRs->aFields['bExpandido'] );
        $nIndex++;
    }
    $oMenuPpal = new Menu('body', 'menu_ppal', 'menu_ppal', true, 'sb');
    $cSql = "SELECT ncMenu, cdMenu, cUrl, bExpandido, cDescripcion FROM gtMenu WHERE ncEstadoPublicacion = 2 AND ncMenuPadre = $ncEntorno";
    $oRs = $this->oDatabase->recordset($cSql);
    while ( $oRs->moveNext() )
    {
        $cdMenu = extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) ;
        $cUrl = substr($oRs->aFields['cUrl'], 0, 7) == 'http://' ? $oRs->aFields['cUrl'] : '?' . $oRs->aFields['cUrl'] . '&amp;pe=' . $nEntorno. '.&amp;ncMenu=' . $oRs->aFields['ncMenu'];
        $oMenuPpal->addItem( $cdMenu, $cUrl, 'body', $oRs->aFields['cDescripcion'], $oRs->aFields['bExpandido'] );
    }
    //echo "<link  rel='stylesheet'  href='/bue/css/".strtolower(extractLanguage($cEntorno,'es')).".css' type='text/css' />";
    //$aModule[$cModule]->addStyleSheet( $cEntorno.".css" );
        
    ?>
    
    <div id="barra_entorno">
        <div style="margin-top: 20px"><a href="http://www.buenosaires.gob.ar"><img src="imagenes/logoBA_<?=$nEntorno?>.gif" width="202" height="43" style="border:none" alt="Gobierno de Buenos Aires" /></a></div>
        <div style="padding: 10px">
            <div><h1>Buenos Aires</h1></div>
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
        <div class="foot_in_head">© 2004-2009<br/><?=mostrar_termino('LBL_SitioOficial')?></div>
    </div>
    
    <div id="subcontainer"> <!-- Cierra en el FOOT -->
        <div id="head">
            <div style="overflow: auto; height: 40px">
                <div style="float: left">
                    <div style="overflow: auto">
                        <div style="float:left">Mi Buenos Aires <img src="imagenes/fle_der.gif" width="7" height="8" style="border:none" alt=">" /></div>
                        <div style="float:left; margin-left: 10px"><a href='?ac=perfil&amp;mo=clientes'>registrarme</a></div>
                        <div style="float:left; margin-left: 10px"><a href='?ac=login&amp;mo=clientes' onclick="openPopup('?ac=login&amp;mo=clientes&rf=action' , 'Ingresar' );return false;">ingresar</a></div>
                    </div>
                </div>
                <div style="float: right">
                    <div style="overflow: auto; border: 2px solid #bbbbbb">
                        <form>
                            <div style="float:left"><input type="text" name="buscar" style="border:none; width:100px" /></div>
                            <div style="float:left"><select style="border:none; width:60px"></select></div>
                            <div style="float:left"><input type="submit" value="buscar" style="width:60px; height:20px; border:none; background:#1b1819; font:10px Georgia; color:#ffffff; text-transform:uppercase" /></div>
                        </form>
                    </div>
                </div>
            </div>
            <div><? $oMenuEntornos->makeHTML(); ?></div>
            <div><? $oMenuPpal->makeHTML(); ?></div>
        </div>

