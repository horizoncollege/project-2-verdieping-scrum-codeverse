DROP DATABASE IF EXISTS `codeverse`;

CREATE DATABASE `codeverse`;

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






