-- Crear BD
CREATE DATABASE IF NOT EXISTS taller_recambios_db;
USE taller_recambios_db;

-- Crear tabla de Coches
CREATE TABLE coches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    matricula VARCHAR(20) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    propietario VARCHAR(100) NOT NULL,
    vendido TINYINT(1) NOT NULL DEFAULT 0 -- 0 = disponible, 1 = vendido (soft-delete)
);

-- Crear tabla de Piezas
CREATE TABLE piezas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    referencia VARCHAR(50) NOT NULL UNIQUE,
    stock INT NOT NULL DEFAULT 0
);