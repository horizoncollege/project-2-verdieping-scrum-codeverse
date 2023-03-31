DROP DATABASE IF EXISTS `codeverse`;

CREATE DATABASE `codeverse`;

CREATE TABLE `code` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Repository_name VARCHAR(100) NOT NULL,
    Author VARCHAR(100) NOT NULL,
    Last_Update VARCHAR(100) NOT NULL,
    Tags VARCHAR(100) NOT NULL,
    language VARCHAR(100) NOT NULL,
    licence VARCHAR(100) NOT NULL,
    code TEXT NOT NULL
);

    INSERT INTO `code` (`Repository_name`, `Author`, `Last_Update`, `Tags`, `language`, `licence`, `code`) VALUES
	('galgje','Tim Abbing', '31-03-2023', 'PHP','PHP' , 'rfbo', 'hello');






