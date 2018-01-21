DROP TABLE IF EXISTS post ;
DROP TABLE IF EXISTS admin ;
DROP TABLE IF EXISTS category ;

CREATE TABLE post (
  id_post INT AUTO_INCREMENT NOT NULL,
  title_post VARCHAR(255),
  content_post VARCHAR(255),
  date_post VARCHAR(100),
  id_admin INT,
  id_category INT,
  PRIMARY KEY (id_post)

);


CREATE TABLE admin (
  id_admin INT AUTO_INCREMENT NOT NULL,
  username_admin VARCHAR(255),
  password_admin VARCHAR(255),
  PRIMARY KEY (id_admin)
);


CREATE TABLE category (
  id_category INT AUTO_INCREMENT NOT NULL,
  name_category VARCHAR(255),
  PRIMARY KEY (id_category)
);

ALTER TABLE post ADD CONSTRAINT FK_post_id_admin FOREIGN KEY (id_admin) REFERENCES admin (id_admin);

ALTER TABLE post ADD CONSTRAINT FK_post_id_category FOREIGN KEY (id_category) REFERENCES category (id_category);
