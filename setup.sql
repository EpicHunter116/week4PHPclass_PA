-- Run this in phpMyAdmin or MySQL CLI

CREATE DATABASE IF NOT EXISTS sdc310_wk4pa;

CREATE USER IF NOT EXISTS 'ecpi_user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON sdc310_wk4pa.* TO 'ecpi_user'@'localhost';
FLUSH PRIVILEGES;

USE sdc310_wk4pa;

CREATE TABLE IF NOT EXISTS products (
    ProductNo INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Type VARCHAR(50) NOT NULL
);

INSERT INTO products (Name, Type) VALUES
('Maytag Washer', 'Appliances'),
('Maytag Dryer', 'Appliances'),
('Toshiba Laptop', 'Electronics-Computers'),
('Sony LED TV', 'Electronics-Televisions'),
('Nintendo Switch Game System', 'Electronics-Games');
