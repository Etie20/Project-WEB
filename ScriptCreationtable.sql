/*1-Creation of the table of functions*/
DROP TABLE IF EXISTS Functions;
CREATE TABLE Functions (
function_id VARCHAR(2) NOT NULL CHECK (function_id REGEXP '^F[0-9]$'),
name VARCHAR(25) NOT NULL CHECK (LENGTH(name) <= 25),
PRIMARY KEY (function_id)
);

/*2-Creation of the table of users*/
DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
function_id VARCHAR(2) NOT NULL CHECK (function_id REGEXP '^F[0-9]$'),
user_id VARCHAR(4) NOT NULL CHECK (user_id REGEXP '^U[0-9]{3}$'),
name VARCHAR(50) NOT NULL CHECK (LENGTH(name) <= 50),
surname VARCHAR(50) NOT NULL CHECK (LENGTH(surname) <= 50),
email VARCHAR(50) NOT NULL CHECK (email REGEXP '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'),
password VARCHAR(25) NOT NULL CHECK (password REGEXP '[a-zA-Z0-9]'),
localisation VARCHAR(25) NOT NULL CHECK (LENGTH(localisation) <= 25),
FOREIGN KEY (function_id) REFERENCES Functions(function_id),
PRIMARY KEY (user_id)
);

/*3-Creation of the table of Admin*/
DROP TABLE IF EXISTS Admin;
CREATE TABLE Admin (
admin_id VARCHAR(2) NOT NULL CHECK (admin_id REGEXP '^A[0-9]$'),
name VARCHAR(50) NOT NULL CHECK (LENGTH(name) <= 50),
surname VARCHAR(50) NOT NULL CHECK (LENGTH(surname) <= 50),
email VARCHAR(50) NOT NULL CHECK (email REGEXP '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'),
password VARCHAR(25) NOT NULL CHECK (password REGEXP '[a-zA-Z0-9]'),
PRIMARY KEY (admin_id)
);

/*4-Creation of the table of Category*/
DROP TABLE IF EXISTS Category;
CREATE TABLE Category (
cat_id VARCHAR(3) NOT NULL CHECK (cat_id REGEXP '^C[0-9]{2}$'),
name VARCHAR(50) NOT NULL CHECK (LENGTH(name) <= 50),
PRIMARY KEY (cat_id)
);

/*5-Creation of the table of Product*/
DROP TABLE IF EXISTS Product;
CREATE TABLE Product (
cat_id VARCHAR(3) NOT NULL CHECK (cat_id REGEXP '^C[0-9]{2}$'),
prod_id VARCHAR(4) NOT NULL CHECK (prod_id REGEXP '^P[0-9]{3}$'),
name VARCHAR(50) NOT NULL CHECK (LENGTH(name) <= 50),
description VARCHAR(50) NOT NULL CHECK (LENGTH(description) <= 50),
image VARCHAR(50) NOT NULL CHECK (image REGEXP '[a-zA-Z0-9]+ .png$'),
price VARCHAR(10) NOT NULL CHECK (price REGEXP '^[0-9]+ FCFA$'),
quantity VARCHAR(3) NOT NULL CHECK (quantity REGEXP '^[0-9]+$'),
FOREIGN KEY (cat_id ) REFERENCES Category(cat_id),
PRIMARY KEY (prod_id)
);

/*6-Creation of the table of Basket*/
DROP TABLE IF EXISTS Basket;
CREATE TABLE Basket (  
user_id VARCHAR(4) NOT NULL CHECK (user_id REGEXP '^U[0-9]{3}$'),
prod_id VARCHAR(4) NOT NULL CHECK (prod_id REGEXP '^P[0-9]{3}$'),
quantity VARCHAR(3) NOT NULL CHECK (quantity REGEXP '^[0-9]+$'),
FOREIGN KEY (user_id) REFERENCES Users(user_id),
FOREIGN KEY (prod_id) REFERENCES Product(prod_id)
);

/*7-Creation of the table of Activity*/
DROP TABLE IF EXISTS Activity;
CREATE TABLE Activity (
user_id VARCHAR(4) NOT NULL CHECK (user_id REGEXP '^U[0-9]{3}$'),
act_id VARCHAR(4) NOT NULL CHECK (act_id REGEXP '^A[0-9]{3}$'),
name VARCHAR(50) NOT NULL CHECK (LENGTH(name) <= 50),
description VARCHAR(50) NOT NULL CHECK (LENGTH(description) <= 50),
image VARCHAR(50) NOT NULL CHECK (image REGEXP '[a-zA-Z0-9]+ .png$'),
votes INT(4) NOT NULL,
FOREIGN KEY (user_id) REFERENCES Users(user_id),
PRIMARY KEY (act_id)
);

/*8-Creation of the table of Event*/
DROP TABLE IF EXISTS Events;
CREATE TABLE  Events (
act_id VARCHAR(4) NOT NULL CHECK (act_id REGEXP '^A[0-9]{3}$'),
dates TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (act_id) REFERENCES Activity(act_id)
);

/*9-Creation of the table of Comments*/
DROP TABLE IF EXISTS Comments;
CREATE TABLE Comments (
user_id VARCHAR(4) NOT NULL CHECK (user_id REGEXP '^U[0-9]{3}$'),
act_id VARCHAR(4) NOT NULL CHECK (act_id REGEXP '^A[0-9]{3}$'),
message VARCHAR(500) NOT NULL CHECK (LENGTH(message) <= 500),
FOREIGN KEY (user_id) REFERENCES Users(user_id),
FOREIGN KEY (act_id) REFERENCES Activity(act_id)
);