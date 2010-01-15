insert into gtMenuComponente ( ncMenu, ncComponente, nPanel )
select ncMenu, ncTipoContenido + 3, if (ncTipoContenido = 9, 2,3) 
from gtMenuContenido as a
join gtContenido as b on a.ncContenido = b.ncContenido
group by ncMenu, ncTipoContenido;

update gtMenu set nVista = 3, cUrl = 'mo=portal&amp;ac=componentes', nModo= 2
where ncMenu in ( select ncMenu from gtMenuContenido as a
join gtContenido as b on a.ncContenido = b.ncContenido
where ncTipoContenido != 9 );

insert into gtMenuComponente ( ncMenu, ncComponente, nPanel )
select distinct ncMenu, 2, 1 from gtMenuContenido as a
join gtContenido as b on a.ncContenido = b.ncContenido
where ncTipoContenido != 9 

update gtMenuComponente set cParametros = (select distinct concat('ncMenuFiltro=', ncMenuPadre) from tt where gtMenuComponente.ncMenu =tt.ncMenu )
where ncMenu in (select ncMenu FROM tt)
and ncComponente = 2