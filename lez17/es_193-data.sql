BEGIN;

USE es_193;

INSERT INTO correntista (
    id_correntista,
    cognome,
    nome
) VALUES
(1, 'Livieri', 'Livio'),
(2, 'Rettaroli', 'Christian');

INSERT INTO conto_corrente (
    numero,
    id_correntista
) VALUES
(1,1),
(2,2),
(3,1);

COMMIT;
