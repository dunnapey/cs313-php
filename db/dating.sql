CREATE TABLE users
(
    id SERIAL PRIMARY KEY
    , username VARCHAR(50) UNIQUE NOT NULL
    , fName VARCHAR(50) NOT NULL
    , lName VARCHAR(50) NOT NULL
    , password VARCHAR(50) NOT NULL
    , email VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE classesusers
(
    user_id INT REFERENCES users(id) NOT NULL
    , class_id SMALLINT REFERENCES classes(id) NOT NULL
);

CREATE TABLE classes
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(100) UNIQUE NOT NULL
    , cost SMALLINT NOT NULL
);

INSERT INTO classes (name, cost) VALUES
('Communication', 20),
('Trust', 20),
('Meeting Needs', 20),
('Commitment', 30),
('Intimacy', 40),
('Full Course', 75);

INSERT INTO users (username, fName, lName, password, email) VALUES
('user1', 'fname1', 'lname2', 'password1', 'email1@gmail.com'),
('user2', 'fname2', 'lname2', 'password2', 'email2@gmail.com'),
('user3', 'fname3', 'lname3', 'password3', 'email3@gmail.com'),
('user4', 'fname4', 'lname4', 'password4', 'email4@gmail.com'),
('user5', 'fname5', 'lname5', 'password5', 'email5@gmail.com'),
('user6', 'fname6', 'lname6', 'password6', 'email6@gmail.com'),
('user7', 'fname7', 'lname7', 'password7', 'email7@gmail.com'),
('user8', 'fname8', 'lname8', 'password8', 'email8@gmail.com');

INSERT INTO classesusers (user_id, class_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 1),
(5, 2),
(6, 3),
(7, 2),
(8, 6);