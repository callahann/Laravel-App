create or replace function progreso_voluntariado(id integer) returns void as $$
declare 
	cpa integer;
	cpe integer;
begin
	cpa = (select cant_personas_actual from voluntariados where voluntariados.id_med = id);
	cpe = (select cant_personas_esperadas from voluntariados where voluntariados.id_med = id);
	update voluntariados set progreso = (cpa*100/cpe) where voluntariados.id_med = id;
end;
$$ language plpgsql;

