CREATE DATABASE IF NOT EXISTS cyber_monday;
USE cyber_monday;

CREATE TABLE ofertas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    web VARCHAR(255) NOT NULL
);

INSERT INTO ofertas (nombre, precio, web) VALUES 
('Auriculares Sony WH-1000XM5', 349.99, 'Amazon'),
('Auriculares Sony WH-1000XM5', 299.00, 'MediaMarkt'),
('Auriculares Sony WH-1000XM5', 320.50, 'PcComponentes'),
('Monitor LG Ultrawide', 199.99, 'Amazon');