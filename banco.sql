CREATE DATABASE IF NOT EXISTS academia;
USE academia;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (username, senha) VALUES (
    'admin',
    'admin123'
);
