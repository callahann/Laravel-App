
-- Script para la realización de pruebas.
-- 1-. Procedimiento almacenado progreso recolección:

insert into medidas VALUES(1,NULL,NULL,NULL,NULL,NULL);
insert into recolecciones VALUES(1,1,NULL,NULL,NULL,NULL,NULL,NULL,13,19);

select progreso_recoleccion(1);

-- 2-. Procedimiento almacenado progreso bingo:

insert into medidas VALUES(2,NULL,NULL,NULL,NULL,NULL);
insert into bingos VALUES(2,2,NULL,NULL,NULL,NULL,NULL,NULL,36,NULL,75);

select progreso_bingo(2);

-- 3-. Procedimiento almacenado progreso donación:

insert into medidas VALUES(3,NULL,NULL,NULL,NULL,NULL);
insert into donaciones VALUES(3,3,NULL,NULL,NULL,NULL,NULL,19823,NULL,24500);

select progreso_donacion(3);

-- 4-. Procedimiento almacenado progreso voluntariado:

insert into medidas VALUES(4,NULL,NULL,NULL,NULL,NULL);
insert into voluntariados VALUES(4,4,NULL,NULL,NULL,NULL,NULL,NULL,17,41);

select progreso_voluntariado(4);

-- 5-. Prueba Trigger:

insert into tipo_usuarios values(1, 'Administrador', 'desc. tipo', 'permisos');
insert into usuarios values(1,1,NULL,NULL,NULL,NULL, false);
delete from usuarios where id_user=1;