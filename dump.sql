CREATE TABLE `users`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `age` TINYINT UNSIGNED DEFAULT NULL,
    `name` CHAR(200) NOT NULL,
    `email` CHAR(255) UNIQUE NOT NULL,
    `password` CHAR(60) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP DEFAULT NULL
);

CREATE TABLE `posts`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `title` CHAR(255),
    `content` TEXT,
    `user_id` INT UNSIGNED,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP DEFAULT NULL,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
);

CREATE TABLE `tags`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `title` CHAR(255),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP DEFAULT NULL
);

CREATE TABLE `posts_tags`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `post_id` INT UNSIGNED,
    `tag_id` INT UNSIGNED,
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`id`),
    FOREIGN KEY (`tag_id`) REFERENCES `tags`(`id`)
);

INSERT INTO `users`(`name`, `email`, `password`) VALUES ('Kate', 'kate@gmail.com', '123456789'), ('Mike', 'mike@gmail.com', '123456789')

SELECT * FROM `users` WHERE `age` > 25;
SELECT * FROM `users` WHERE `age` BETWEEN 25 AND 29;
SELECT * FROM `users` WHERE `age` >= 25 AND (`age` <= 29 OR `email` = 'kate@gmail.com');
SELECT * FROM `users` WHERE `email` LIKE '%@gmail.com';
SELECT * FROM `users` WHERE `deleted_at` IS NOT NULL;
SELECT * FROM `users` WHERE `deleted_at` IS NULL;
SELECT * FROM `users` WHERE `id` = 1 OR `id` = 4;
SELECT * FROM `users` WHERE `id` IN (1, 4);
SELECT * FROM `users` WHERE `id` NOT IN (1, 4);
SELECT * FROM `users` LIMIT 1, 1;
SELECT * FROM `users` ORDER BY `id` ASC;
SELECT * FROM `users` ORDER BY `id` DESC;
SELECT * FROM `users` ORDER BY `updated_at` ASC;
SELECT * FROM `users` WHERE `age` > 24 ORDER BY `created_at` DESC LIMIT 2;

UPDATE `users` SET `age` = `age` + 30 WHERE `age` >= 25;

DELETE FROM `users` WHERE;