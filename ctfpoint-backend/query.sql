CREATE DATABASE ctfpoint;
USE ctfpoint;

CREATE TABLE users (
	user_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL UNIQUE,
	email VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	role INT NOT NULL, -- 0 = User, 1 = Premium User, 2 = Writer, 3 = Admin
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE events (
	event_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	event_name VARCHAR(50) NOT NULL UNIQUE,
	event_description TEXT NOT NULL,
	start_date DATE NOT NULL,
	event_organizer VARCHAR(50),
	finish_date DATE NOT NULL,
	open_date DATE NOT NULL,
	close_date DATE NOT NULL,
	status INT NOT NULL,
	event_url VARCHAR(200),
	image_name VARCHAR(200)
);