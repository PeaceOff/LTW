PRAGMA FOREIGN_KEYS = ON;
.mode columns
.header ON
.nullvalue NULL

CREATE TABLE restaurants {
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    description TEXT
}

CREATE TABLE users {
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    username TEXT,
    password TEXT
}

CREATE TABLE owners {
    id INTEGER REFERENCES users(id) PRIMARY KEY
}

CREATE TABLE reviewers {
    id INTEGER REFERENCES users(id) PRIMARY KEY
}
