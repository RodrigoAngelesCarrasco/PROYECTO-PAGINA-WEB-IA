-- sql/init.sql
-- Crea la BD (si no existe) y las tablas necesarias

CREATE DATABASE IF NOT EXISTS mvc_simple_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE mvc_simple_db;

-- Tabla alumnos (usuarios)
CREATE TABLE IF NOT EXISTS alumnos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  apellido VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  carrera VARCHAR(150) DEFAULT NULL,
  semestre VARCHAR(50) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabla contactos (opcional, para tu formulario de contacto)
CREATE TABLE IF NOT EXISTS contactos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL,
  mensaje TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;