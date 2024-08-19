CREATE DATABASE organiza;

use organiza;

CREATE TABLE users(
    idUser int PRIMARY KEY AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    email varchar(100) NOT NULL, 
    password varchar(255) NOT NULL,
    created_at TIMESTAMP NOT NULL,
    verify BOOLEAN DEFAULT FALSE
)