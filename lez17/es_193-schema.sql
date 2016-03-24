BEGIN;

CREATE DATABASE es_193;

USE es_193;

CREATE TABLE correntista (
    id_correntista INT PRIMARY KEY,
    cognome VARCHAR(20),
    nome VARCHAR(20)
);

CREATE TABLE conto_corrente (
    numero INT PRIMARY KEY,
    id_correntista INT REFERENCES 
        correntista(id_correntista),
    saldo REAL NOT NULL DEFAULT 0
);

CREATE TABLE movimento (
    numero INT PRIMARY KEY,
    cc INT REFERENCES 
        conto_corrente(numero),
    tipo ENUM('prelievo', 'versamento')
        NOT NULL,
    importo REAL NOT NULL,
    data TIMESTAMP NOT NULL DEFAULT NOW(),
    registrato BOOLEAN NOT NULL DEFAULT 0
);

COMMIT;
