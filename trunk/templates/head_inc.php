<?
    $oFechaHoy = new dateTimeObject();
    $oFechaHoy->setToday();
    
    $ncMenu = getParam(ncMenu, START_MENU);
    list($nEntorno ) = explode('.', getParam('mn', 1));
    $lang = getParam(lang, 'es');
    
    $oMenuEntornos = new Menu('body', 'menu_entornos', 'menu_entornos', true);
    $oMenuEntornos->setMuestraSelector(true);
    $cSql = "SELECT ncMenu, cdMenu, cUrl, bExpandido, cDescripcion FROM gtMenu WHERE ncEstadoPublicacion = 2 AND ncMenuPadre = 1";
    $oRs = $this->oDatabase->recordset($cSql);
    $nIndex = 1;
    while ( $oRs->moveNext() )
    {
        $cdMenu = extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) ;
        if ( $nIndex == $nEntorno)  
        {
            $cEntorno = $cdMenu;
            $ncEntorno =  $oRs->aFields['ncMenu'];
            $cColorPpal  = extractLanguage( $oRs->aFields['cDescripcion'], 'es');
        }
        $cUrl = substr($oRs->aFields['cUrl'], 0, 7) == 'http://' ? $oRs->aFields['cUrl'] : '?' . $oRs->aFields['cUrl'] . '&amp;ncMenu=' . $oRs->aFields['ncMenu'];
        $oMenuEntornos->addItem( extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) , $cUrl, 'body', $oRs->aFields['cDescripcion'], $oRs->aFields['bExpandido'] );
        $nIndex++;
    }
    
    $oMenuPpal = new Menu('body', 'menu_ppal', 'menu_ppal', true);
    $oMenuPpal->setMuestraSelector(true);
    $oMenuPpal->setKeyName( 'sb' );
    $cSql = "SELECT ncMenu, cdMenu, cUrl, bExpandido, cDescripcion FROM gtMenu WHERE ncEstadoPublicacion = 2 AND ncMenuPadre = $ncEntorno";
    $oRs = $this->oDatabase->recordset($cSql);
    while ( $oRs->moveNext() )
    {
        $cdMenu = extractLanguage( $oRs->aFields['cdMenu'], $this->getLanguage()) ;
        $cUrl = substr($oRs->aFields['cUrl'], 0, 7) == 'http://' ? $oRs->aFields['cUrl'] : '?' . $oRs->aFields['cUrl'] . '&amp;mn=' . $nEntorno. '.&amp;ncMenu=' . $oRs->aFields['ncMenu'];
        $oMenuPpal->addItem( $cdMenu, $cUrl, 'body', $oRs->aFields['cDescripcion'], $oRs->aFields['bExpandido'] );
    }
    //echo "<link  rel='stylesheet'  href='/bue/css/".strtolower(extractLanguage($cEntorno,'es')).".css' type='text/css' />";
    //$aModule[$cModule]->addStyleSheet( $cEntorno.".css" );
    
    echo "
        <style>
            a:hover    {color:$cColorPpal;}
            
            #container
            {
                position: relative;
                overflow: auto;
                margin: auto;
                width: 960px;
                background: $cColorPpal url(imagenes/fondo_". $ncMenu .".gif) repeat-y;
                border: 1px solid #cccccc;
            }
            
            .menu_idiomas{margin:30px 0 0 0; padding:0; height:30px; width:100%; display:block;}
            .menu_idiomas li{padding:0; margin:0; list-style:none; display:inline;}
            .menu_idiomas li a{float:left; display:block; margin-left:4px; color:#1b1819; text-decoration:none; font-size:12px; text-transform: lowercase; cursor:pointer;}
            .menu_idiomas li a span{padding:0 3px; text-align:center; line-height:16px; float:left; display:block;}
            .menu_idiomas li a:hover{background:#1b1819; color:$cColorPpal;}
            .menu_idiomas li a:hover span{background-position:100% -60px;}
            .menu_idiomas li a.active, .menu_idiomas li a.active:hover{line-height:16px; font-size:12px; text-transform: lowecase; color:$cColorPpal; background: #1b1819;}
            
            .menu_ppal{margin:0 auto; padding:0; height:36px; width:100%; display:block; border-top: 2px solid #7f7c7c; border-bottom: 2px solid #7f7c7c;}
            .menu_ppal li{padding:0; margin:0; list-style:none; display:inline;}
            .menu_ppal li a{float:left; padding-left:15px; display:block; color:#1b1819; text-decoration:none; font-size:13px; text-transform: lowercase; cursor:pointer;}
            .menu_ppal li a span{line-height:36px; float:left; display:block; padding-right:15px;}
            .menu_ppal li a:hover{background-position:0px -60px; color:$cColorPpal;}
            .menu_ppal li a:hover span{background-position:100% -60px;}
            .menu_ppal li a.active, .menu_ppal li a.active:hover{line-height:36px; font-size:13px; text-transform: lowecase; color:$cColorPpal;}
                
        </style>";
    
    ?>
    
    <div id="barra_entorno">
        <div style="margin-top: 20px"><a href="http://www.buenosaires.gob.ar"><img src="imagenes/logoBA_<?=$ncEntorno?>.gif" width="202" height="43" style="border:none" alt="Gobierno de Buenos Aires" /></a></div>
        <div style="padding: 10px">
            <div><h1>Buenos Aires</h1></div>
            <div><h2><?=$cEntorno?></h2></div>
            <div><h3><?=mostrar_termino('LBL_Titulo_Portal')?></h3></div>
            <div class="fecha">
                <?=$oFechaHoy->getValue ("dd")." de ".$oFechaHoy->getValue ("mmmm, yyyy")?><br/>
                <?=$oFechaHoy->getValue ("hh:ii")?>
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
    
    <div id="subcontainer"> <!-- Cierra en el FOOT -->
        <div id="head">
            <div style="overflow: auto; height: 40px">
                <div style="float: left">
                    <div style="overflow: auto">
                        <div style="float:left">Mi Buenos Aires <img src="imagenes/fle_der.gif" width="7" height="8" style="border:none" alt=">" /></div>
                        <div style="float:left; margin-left: 10px"><a href='?ac=perfil&amp;mo=clientes'>registrarme</a></div>
                        <div style="float:left; margin-left: 10px"><a href='?ac=login&amp;mo=clientes' onclick="openPopup('?ac=login&amp;mo=clientes&fr=action' , 'Ingresar' );return false;">ingresar</a></div>
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

