CREATE TABLE kadaidb.person (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name Varchar(50),
    age INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP\
    );
    