create or replace function progreso_recoleccion(id integer) returns void as $$
declare 
	cea integer;
	cem integer;
begin
	cea = (select cant_elem_actual from recolecciones where recolecciones.id_med = id);
	cem = (select cant_elem_meta from recolecciones where recolecciones.id_med = id);
	update recolecciones set progreso = (cea*100/cem) where recolecciones.id_med = id;
end;
$$ language plpgsql;

