CREATE DATABASE es_191;
USE es_191;
CREATE TABLE Abbonamenti (
    Numero INT PRIMARY KEY,
    Nome VARCHAR(20),
    Scadenza DATE
);
INSERT INTO Abbonamenti VALUES
(1, 'Pippo', '2016-12-31'),
(2, 'Pluto', '2016-06-30');