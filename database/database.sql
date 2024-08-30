CREATE DATABASE organiza;

use organiza;

CREATE TABLE users(
   idUser INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
   username varchar(60) NOT NULL,
   emailName varchar(60) NOT NULL,
   email varchar(100) NOT NULL,
   password varchar(255) NOT NULL,
   created_at TIMESTAMP NOT NULL,
   verify BOOLEAN DEFAULT FALSE 
);

CREATE TABLE tokenType(
   idType INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
   type varchar(50) NOT NULL
);

CREATE TABLE token(
   idToken INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
   token VARCHAR(255) NOT NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   kill_at TIMESTAMP NULL DEFAULT NULL,
   intentos INT(10) NOT NULL DEFAULT 3,
   contador INT(10),
   Is_revoked BOOLEAN DEFAULT FALSE,
   idType INT(50) NOT NULL,
   FOREIGN KEY (idType) REFERENCES tokenType(idType)
);

CREATE TABLE userTokens(
    user_id INT(10) NOT NULL,
    token_id INT(10) NOT NULL,
    PRIMARY KEY (user_id, token_id),
    FOREIGN KEY (user_id) REFERENCES users(idUser) ON DELETE CASCADE,
    FOREIGN KEY (token_id) REFERENCES token(idToken) ON DELETE CASCADE,
    assigned_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



CREATE TABLE labels()