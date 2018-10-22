CREATE TABLE users
(
    id SERIAL PRIMARY KEY
    , username VARCHAR(50) UNIQUE NOT NULL
    , fName VARCHAR(50) NOT NULL
    , lName VARCHAR(50) NOT NULL
    , password VARCHAR(50) NOT NULL
    , phone NUMERIC(10) UNIQUE NOT NULL
    , class_id INT REFERENCES classes(id)
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

INSERT INTO users (username, fName, lName, password, phone, class_id) VALUES
('user1', 'fname1', 'lname2', 'password1', 1234567890, 1),
('user2', 'fname2', 'lname2', 'password2', 2345678901, 2),
('user3', 'fname3', 'lname3', 'password3', 3456789012, 3),
('user4', 'fname4', 'lname4', 'password4', 4567890123, 1),
('user5', 'fname5', 'lname5', 'password5', 5678901234, 2),
('user6', 'fname6', 'lname6', 'password6', 6789012345, 3),
('user7', 'fname7', 'lname7', 'password7', 7890123456, 2),
('user8', 'fname8', 'lname8', 'password8', 8901234567, 6);