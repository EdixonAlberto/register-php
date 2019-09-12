-- DATABASE: MYSQL

-- USERS
CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(20) NOT NULL,
    `lastname` varchar(20) NOT NULL,
    `age` int(3) NOT NULL,
    `sexo` varchar(10) NOT NULL,
    `country` varchar(20) NOT NULL,
    `created_at` timestamp NOT NULL,
    PRIMARY KEY (`id`)
);
