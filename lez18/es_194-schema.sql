CREATE DATABASE es_194;

USE es_194;

CREATE TABLE artista (
    id INT PRIMARY KEY,
    cognome VARCHAR(50),
    nome VARCHAR(50)
);

CREATE TABLE canzone (
    id INT PRIMARY KEY,
    titolo VARCHAR(255),
    durata INT
);

CREATE TABLE interpretazione (
    id_artista INT
        REFERENCES artista(id),
    id_canzone INT
        REFERENCES canzone(id)
);

CREATE TABLE album (
    codice INT PRIMARY KEY,
    titolo VARCHAR(255),
    anno INT CHECK (anno BETWEEN 1970 AND 2100),
    artista INT
        REFERENCES artista(id)
);
