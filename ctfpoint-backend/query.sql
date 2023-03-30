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

INSERT INTO events (event_name, event_description, start_date, event_organizer, finish_date, open_date, close_date, status, event_url, image_name)
VALUES 
('CyberSec CTF 2023', 'Join the ultimate challenge in cybersecurity and compete with other teams to capture the flag!', '2023-05-12', 'CyberSec Corporation', '2023-05-13', '2023-05-11', '2023-05-12', 1, 'https://www.cybersecctf.com', 'cybersecctf.png'),
('Hackathon CTF 2023', 'Show your hacking skills and solve challenges to get the flag in this exciting competition!', '2023-06-22', 'Hackathon Inc.', '2023-06-23', '2023-06-21', '2023-06-22', 1, 'https://www.hackathonctf.com', 'hackathonctf.png'),
('SecureCTF 2023', 'Join the SecureCTF challenge and compete with other security enthusiasts to find the vulnerabilities and capture the flag!', '2023-08-15', 'SecureCTF LLC', '2023-08-16', '2023-08-14', '2023-08-15', 1, 'https://www.securectf.com', 'securectf.png');
