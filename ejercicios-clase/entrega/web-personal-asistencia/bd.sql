CREATE DATABASE IF NOT EXISTS curso_cesur;
USE curso_cesur;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    ultima_visita DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insertamos un usuario de prueba
-- Usuario: juan
-- Email: juan@correo.com
-- Contraseña: "1234" (encriptada en MD5 es '81dc9bdb52d04dc20036dbd8313ed055')
INSERT INTO usuarios (usuario, email, password, ultima_visita) VALUES 
('jiaxin', 'jiaxin@correo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2010-10-10 10:10:00');

-- Creamos la tabla de asistencias
CREATE TABLE IF NOT EXISTS asistencia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    horas INT NOT NULL
);

-- Insertamos datos de ejemplo para el usuario 'juan' (asumiendo que tiene id=1)
INSERT INTO asistencia (usuario_id, horas) VALUES 
(1, 39);