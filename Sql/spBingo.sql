create or replace function progreso_bingo(id integer) returns void as $$
declare 
	mob integer;
	meb integer;
begin
	mob = (select monto_bingos from bingos where bingos.id_med = id);
	meb = (select meta_bingos from bingos where bingos.id_med = id);
	update bingos set progreso = (mob*100/meb) where bingos.id_med = id;
end;
$$ language plpgsql;

