CREATE DATABASE bd_foto DEFAULT CHARACTER SET = 'utf8mb4';

USE bd_foto;

CREATE TABLE foto (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    foto VARCHAR(1000)
)