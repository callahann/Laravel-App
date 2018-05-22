CREATE OR REPLACE FUNCTION bloquear_usuario() RETURNS TRIGGER AS $bloqueo$
DECLARE BEGIN
	INSERT INTO usuarios VALUES(OLD.id_user, OLD.id_tipo, OLD.id_logs, OLD.id_med, OLD.nombre_user, OLD.clave, true);
	RETURN NULL;
END;
$bloqueo$ LANGUAGE plpgsql;

CREATE TRIGGER bloqueo_trigger AFTER DELETE
ON usuarios FOR EACH ROW
EXECUTE PROCEDURE bloquear_usuario();