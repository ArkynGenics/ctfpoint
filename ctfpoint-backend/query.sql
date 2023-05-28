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
CREATE TABLE writeups (
	writeup_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(50) NOT NULL UNIQUE,
	author TEXT NOT NULL,
    category_id INTEGER NOT NULL,
    description TEXT,
    like_count INT DEFAULT 0,
	is_premium INT NOT NULL,
	status INT NOT NULL,
    content TEXT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES wu_category(category_id)
);
CREATE TABLE wu_images (
	image_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    writeup_id INTEGER NOT NULL,
    name VARCHAR(50) NOT NULL UNIQUE,
    position INT NOT NULL,
    FOREIGN KEY (writeup_id) REFERENCES writeups(writeup_id)
);