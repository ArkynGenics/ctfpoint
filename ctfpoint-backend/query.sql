CREATE DATABASE ctfpoint;
USE ctfpoint;

CREATE TABLE users (
	user_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL UNIQUE,
	email VARCHAR(50) NOT NULL UNIQUE
	password VARCHAR(100) NOT NULL,
	role INT NOT NULL, -- 0 = User, 1 = Premium User, 2 = Writer, 3 = Admin
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
