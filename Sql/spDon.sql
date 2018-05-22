create or replace function progreso_donacion(id integer) returns void as $$
declare 
	md integer;
	me integer;
begin
	md = (select monto_don from donaciones where donaciones.id_med = id);
	me = (select meta from donaciones where donaciones.id_med = id);
	update donaciones set progreso = (md*100/me) where donaciones.id_med = id;
end;
$$ language plpgsql;

