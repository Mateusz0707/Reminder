CREATE DATABASE IF NOT EXISTS reminder;

USE reminder;

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
INSERT INTO przypomnienia (nazwa_przypomnienia, notatka, godzina, data, kategoria) VALUES 
('Spotkanie', 'Spotkanie z klientem XYZ', '10:00:00', '2024-04-01', 'Biznes'),
('Zakupy', 'Kupić mleko i chleb', '15:30:00', '2024-04-02', 'Domowe'),
('Wizyta u lekarza', 'Wizyta kontrolna', '14:00:00', '2024-04-05', 'Zdrowie');