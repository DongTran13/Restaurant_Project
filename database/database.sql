CREATE DATABASE book_table

CREATE TABLE information(
id INT(5)PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    day DATE,
    telephone INT(14),
    hour TIME,
    email VARCHAR(255),
    bookTable INT(3)
)


CREATE TABLE comment_restaurant(
id INT(10)PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    telephone INT(14),
    note VARCHAR(255)
)