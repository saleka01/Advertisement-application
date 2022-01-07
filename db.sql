-- Create database
CREATE DATABASE sample;
USE sample;

-- Create users table
CREATE TABLE users (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    name varchar(100) NOT NULL
) Engine=InnoDB;

-- Create advertisements table
CREATE TABLE advertisements (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userid int,
    title varchar(255) NOT NULL,
    FOREIGN KEY (userid) REFERENCES users(id)
) Engine=InnoDB;

-- Insert datas to users & advertisements
INSERT INTO users(name) VALUES('T A');
INSERT INTO users(name) VALUES('T B');
INSERT INTO users(name) VALUES('T C');
INSERT INTO users(name) VALUES('T D');
INSERT INTO users(name) VALUES('T E');
INSERT INTO users(name) VALUES('T F');

INSERT INTO advertisements(userid, title) VALUES(1, 'T advert1');
INSERT INTO advertisements(userid, title) VALUES(1, 'T advert2');
INSERT INTO advertisements(userid, title) VALUES(1, 'T advert3');
INSERT INTO advertisements(userid, title) VALUES(2, 'T advert4');
INSERT INTO advertisements(userid, title) VALUES(2, 'T advert5');
INSERT INTO advertisements(userid, title) VALUES(2, 'T advert6');
INSERT INTO advertisements(userid, title) VALUES(3, 'T advert7');
INSERT INTO advertisements(userid, title) VALUES(2, 'T advert8');
INSERT INTO advertisements(userid, title) VALUES(3, 'T advert9');
INSERT INTO advertisements(userid, title) VALUES(3, 'T advert10');