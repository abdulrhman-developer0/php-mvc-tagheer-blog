CREATE TABLE `articles`
(
    `article_id` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `article_title` VARCHAR(80) NOT NULL,
    `article_content` TEXT NOT NULL,
    `article_img` VARCHAR(100) NULL,
    `article_date` DATE
);

CREATE TABLE `users`
(
    `article_id` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `user_name` VARCHAR(100) NOT NULL,
    `user_email` VARCHAR(100) NOT NULL,
    `user_password` VARCHAR(100) NOT NULL,
    `user_type` INT(1) NOT NULL
);

INSERT INTO `users` ( `user_name`,`user_email`,`user_password`,`user_type` )
VALUES ('admin1','admin@tagheer.com','12345600',1);