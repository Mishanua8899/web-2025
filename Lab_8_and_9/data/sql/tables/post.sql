CREATE TABLE post(
   id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
   user_id INT, 
   content MEDIUMTEXT,
   img_src VARCHAR(255),
   date_of_creation DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
); /*user_id, id must be unsigned, not null */