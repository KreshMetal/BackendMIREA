CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT, DELETE ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;
CREATE TABLE IF NOT EXISTS users (
  login VARCHAR(100) NOT NULL,
  bday VARCHAR(10) NOT NULL,
  password VARCHAR(50) NOT NULL,
  PRIMARY KEY (login)
);

INSERT INTO users VALUES ('XQC', '20.07.1932', '123'),
                        ('Cake', '08.01.1999', '123'),
                        ('Melharucos', '08.01.1989', '123');


CREATE TABLE IF NOT EXISTS comicses (
  comics_id int(11) NOT NULL AUTO_INCREMENT,
  comics_name VARCHAR(100) NOT NULL,
  comics_desc VARCHAR(100) NOT NULL,
  PRIMARY KEY (comics_id)
);


INSERT INTO comicses VALUES (1, 'Naruto', 'Test desc'),
                        (2, 'Tokyo Ghoul', 'Test desc'),
                        (3, 'Jojo', 'Test desc');