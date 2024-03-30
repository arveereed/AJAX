CREATE DATABASE db_sample_for_ajax;

USE db_sample_for_ajax;

CREATE TABLE tbl_sample(
  ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Authors TEXT NOT NULL,
  Messages TEXT NOT NULL
);

INSERT INTO tbl_sample(Authors, Messages) VALUES('Yuna', 'Hello Arvee');
INSERT INTO tbl_sample(Authors, Messages) VALUES('Arvee', 'Hello Yuna!');
INSERT INTO tbl_sample(Authors, Messages) VALUES('Yuna', 'How are you?');
INSERT INTO tbl_sample(Authors, Messages) VALUES('Arvee', "I'm well, how about you?");
