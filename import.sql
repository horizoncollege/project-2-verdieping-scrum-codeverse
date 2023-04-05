DROP DATABASE IF EXISTS `codeverse`;

CREATE DATABASE `codeverse`;

USE `codeverse`;

CREATE TABLE `code` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    repositoryname VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    lastupdate VARCHAR(100) NOT NULL,
    tags VARCHAR(100) NOT NULL,
    language VARCHAR(100) NOT NULL,
    licence VARCHAR(100) NOT NULL,
    code TEXT NOT NULL
);

    INSERT INTO `code` (`repositoryname`, `author`, `lastupdate`, `tags`, `language`, `licence`, `code`) VALUES
	('galgje','Tim Abbing', '31-03-2023', 'PHP','PHP' , 'rfbo', 'hello');


CREATE TABLE `gebruikers` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    wachtwoord VARCHAR(16) NOT NULL
);


INSERT INTO `gebruikers` (`username`, `wachtwoord`) VALUES
 ('test-user', 'wachtwoord')





