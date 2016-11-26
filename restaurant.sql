PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: owner
DROP TABLE IF EXISTS owner;

CREATE TABLE owner (
    user_id INTEGER PRIMARY KEY
                  REFERENCES user (id) 
                  NOT NULL
);


-- Table: picture
DROP TABLE IF EXISTS picture;

CREATE TABLE picture (
    id            INTEGER PRIMARY KEY AUTOINCREMENT
                          NOT NULL,
    restaurant_id         NOT NULL
                          REFERENCES restaurant (id),
    content       VARCHAR NOT NULL
);


-- Table: restaurant
DROP TABLE IF EXISTS restaurant;

CREATE TABLE restaurant (
    id          INTEGER PRIMARY KEY AUTOINCREMENT
                        NOT NULL,
    name        VARCHAR NOT NULL,
    description VARCHAR DEFAULT ('Description not available'),
    owner       INTEGER REFERENCES owner (user_id),
    type        INTEGER REFERENCES restaurant_type (id) 
                        NOT NULL
);


-- Table: restaurant_type
DROP TABLE IF EXISTS restaurant_type;

CREATE TABLE restaurant_type (
    id   INTEGER PRIMARY KEY AUTOINCREMENT
                 NOT NULL,
    type VARCHAR NOT NULL
                 DEFAULT ('familiar') 
);


-- Table: review
DROP TABLE IF EXISTS review;

CREATE TABLE review (
    id            INTEGER PRIMARY KEY AUTOINCREMENT
                          NOT NULL,
    rating        INTEGER CHECK (rating < 6 AND 
                                 rating > -1) 
                          NOT NULL,
    description   VARCHAR DEFAULT ('Review not available'),
    positive      BOOLEAN NOT NULL,
    reviewer_id   INTEGER REFERENCES reviewer (user_id) 
                          NOT NULL,
    restaurant_id INTEGER REFERENCES restaurant (id) 
                          NOT NULL
);


-- Table: reviewer
DROP TABLE IF EXISTS reviewer;

CREATE TABLE reviewer (
    user_id INTEGER PRIMARY KEY
                  REFERENCES user (id) 
                  NOT NULL
);


-- Table: user
DROP TABLE IF EXISTS user;

CREATE TABLE user (
    id         INTEGER PRIMARY KEY AUTOINCREMENT
                       NOT NULL,
    nome       VARCHAR DEFAULT ('defaultUser'),
    password   VARCHAR NOT NULL,
    username   VARCHAR NOT NULL,
    picture_id INTEGER REFERENCES picture (id) 
                       DEFAULT NULL
);


COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
