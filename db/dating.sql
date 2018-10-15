CREATE TABLE users
(
    id SERIAL PRIMARY KEY
    , username VARCHAR(50) UNIQUE NOT NULL
    , password VARCHAR(50) NOT NULL
    , phone NUMERIC(10) UNIQUE NOT NULL
    , class_id INT REFERENCES classes(id)
    , pay_id INT REFERENCES paymethods(id)
);

CREATE TABLE classes
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(100) UNIQUE NOT NULL
    , cost SMALLINT NOT NULL
    , studentCount SMALLINT NOT NULL
);

CREATE TABLE paymethods
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(50) UNIQUE NOT NULL
);

INSERT INTO users (username, password, phone, class_id, pay_id) VALUES
();