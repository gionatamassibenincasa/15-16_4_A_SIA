CREATE DATABASE es_192;
USE es_192;
CREATE TABLE abbonato (  
    numero INT PRIMARY KEY,
    nome VARCHAR(25),
    cognome VARCHAR(25),
    scadenza DATE
);
INSERT INTO abbonato VALUES 
(1,'Mario','Livieri','2016-04-15'),
(2,'Luca','Rossi','2016-01-01'),
(3,'Lino','Rettaroli','2016-02-15');
