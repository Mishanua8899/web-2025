CREATE TABLE user(
   id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
   user_name VARCHAR(200) DEFAULT '',
   user_description MEDIUMTEXT,
   img_src VARCHAR(200) DEFAULT '',
   email VARCHAR(200) DEFAULT '',
   age INT UNSIGNED,
   date_of_creation DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);/*надо сделать пароль*/