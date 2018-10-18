CREATE TABLE actors
(
    id SERIAL PRIMARY KEY
    , name VARCHAR(100) NOT NULL
    , gender char(1) NOT NULL
    , birthYear SMALLINT
);

CREATE TABLE movies
(
    id SERIAL PRIMARY KEY
    , title VARCHAR(100) NOT NULL
    , runtime SMALLINT
    , year SMALLINT NOT NULL
);

CREATE TABLE actorsMovies
(
    id SERIAL PRIMARY KEY
    , actor_id INT NOT NULL REFERENCES actors(id)
    , movie_id INT NOT NULL REFERENCES movies(id)
);

INSERT INTO actors (name, gender, birthYear) VALUES
('Jimmy Stewart', 'M', 1908);
('Christ Pratt', 'M', 1979);
('Tom Cruise', 'M', 1962),
('Meryl Streep', 'F', 1949),
('Carrie Fisher', 'F', 1956);

INSERT INTO movies (title, runtime, year) VALUES
('It''s a Wonderful Life', 120, 1957),
('The Devil Wears Prada', 125, 2006),
('Guardians of the Galaxy', 140, 2014);

INSERT INTO actorsMovies (actor_id, movie_id) VALUES
(2, 3),
(1, 1),
(1, 3),
(4, 2),
(1, 2);

SELECT * FROM movies WHERE title = 'It''s a Wonderful Life';
SELECT * FROM movies WHERE title LIKE '%W%';

SELECT * FROM actorsmovies WHERE movie_id = 3;

SELECT a.name, m.title, a.birthYear FROM movies m
    JOIN actorsMovies am ON m.id = am.movie_id
    JOIN actors a ON am.actor_id = a.id
    WHERE m.title LIKE 'The Devil%'
    ORDER BY a.birthYear;

