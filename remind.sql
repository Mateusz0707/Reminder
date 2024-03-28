CREATE DATABASE IF NOT EXISTS moja_baza_danych;

USE moja_baza_danych;

-- Tabela użytkowników
CREATE TABLE IF NOT EXISTS uzytkownik (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nazwa_uzytkownika VARCHAR(255) NOT NULL,
    haslo VARCHAR(255) NOT NULL
);

-- Tabela przypomnień
CREATE TABLE IF NOT
EXISTS przypomnienia (
id INT AUTO_INCREMENT PRIMARY KEY,
nazwa_przypomnienia VARCHAR(255) NOT NULL,
notatka TEXT,
godzina TIME,
data DATE,
kategoria VARCHAR(100)
);