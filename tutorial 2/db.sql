CREATE DATABASE db_sample_for_ajax;

USE db_sample_for_ajax;

CREATE TABLE tbl_comments(
  ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Author TEXT NOT NULL,
  Message TEXT NOT NULL
);

INSERT INTO tbl_comments(Author, Message) VALUES('Yuna', 'Hello Arvee');
INSERT INTO tbl_comments(Author, Message) VALUES('Arvee', 'Hello Yuna!');
INSERT INTO tbl_comments(Author, Message) VALUES('Yuna', 'How are you?');
INSERT INTO tbl_comments(Author, Message) VALUES('Arvee', "I'm well, how about you?");
INSERT INTO tbl_comments(Author, Message) VALUES('Yuna', 'Not well');
INSERT INTO tbl_comments(Author, Message) VALUES('Arvee', "Why?");
INSERT INTO tbl_comments(Author, Message) VALUES('Yuna', 'I am sick');
INSERT INTO tbl_comments(Author, Message) VALUES('Arvee', "osige");