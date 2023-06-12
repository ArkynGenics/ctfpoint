CREATE DATABASE ctfpoint;
USE ctfpoint;

CREATE TABLE users (
	user_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL UNIQUE,
	full_name VARCHAR(100) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
	mobile_number VARCHAR(50) NOT NULL,
	education VARCHAR(50) NOT NULL,
	country VARCHAR(50) NOT NULL,
	region VARCHAR(100) NOT NULl,
	profession VARCHAR(100),
	password VARCHAR(100) NOT NULL,
	role INT NOT NULL DEFAULT 0, -- 0 = User, 1 = Premium User, 2 = Writer, 3 = Admin
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE events (
	event_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	event_name VARCHAR(50) NOT NULL UNIQUE,
	event_description TEXT NOT NULL,
	start_date DATE NOT NULL,
	event_organizer VARCHAR(50),
	status INT NOT NULL,
	event_url TEXT,
	image_url TEXT
);

INSERT INTO events (event_name, event_description, start_date, event_organizer, status, event_url, image_url) VALUES
('CTF Contest 2023', 'Join our exciting CTF contest and test your hacking skills!', '2023-06-15', 'XYZ Security', 1, 'http://www.example.com/ctf-contest', 'http://www.example.com/images/ctf-contest.jpg'),-- contoh doang buat event
('Hackers Paradise CTF', 'Get ready for an intense CTF challenge with mind-bending puzzles!', '2023-07-01', 'ABC Cybersecurity', 1, 'http://www.example.com/hackers-paradise-ctf', 'http://www.example.com/images/hackers-paradise-ctf.jpg'),
('CyberWar CTF Championship', 'Compete against the best hackers worldwide and claim the title!', '2023-08-10', 'Cyber Warriors', 1, 'http://www.example.com/cyberwar-ctf-championship', 'http://www.example.com/images/cyberwar-ctf-championship.jpg'),
('CTF Mastermind Challenge', 'Test your skills in this unique CTF event where only the best prevail.', '2023-09-05', 'Mastermind Security', 1, 'http://www.example.com/ctf-mastermind-challenge', 'http://www.example.com/images/ctf-mastermind-challenge.jpg'),
('Code Breakers CTF', 'Crack the codes and puzzles to emerge as the ultimate code breaker!', '2023-10-20', 'Code Crackers Inc.', 1, 'http://www.example.com/code-breakers-ctf', 'http://www.example.com/images/code-breakers-ctf.jpg');

CREATE TABLE categories (
	category_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	category_name VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO categories (category_name) VALUES 
("Web"),("Cryptography"),("Pwn"),("Reverse Engineering");

CREATE TABLE writeups (
	writeup_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(50) NOT NULL UNIQUE,
	author TEXT NOT NULL,
    category_id INTEGER NOT NULL,
    language_used VARCHAR(10),
    like_count INT DEFAULT 0,
	is_premium INT NOT NULL,
	wu_filename TEXT NOT NULL,
	status INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);
INSERT INTO writeups (title, author, category_id, language_used, is_premium, wu_filename, status)
VALUES 
    ('Introduction to Capture the Flag', 'John Doe', 1, 'English', 0, 'ctf_intro.pdf', 1),
    ('Advanced Cryptography Challenges', 'Jane Smith', 2, 'English', 1, 'crypto_challenges.pdf', 1),
    ('Exploiting Binary Vulnerabilities', 'Alex Johnson', 3, 'Indonesia', 0, 'pwn_exploits.pdf', 1),
    ('Reverse Engineering Techniques', 'Sarah Thompson', 4, 'Indonesia', 0, 're_techniques.pdf', 1);

CREATE TABLE feedbacks (
	feedback_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	full_name TEXT NOT NULL,
	email_address VARCHAR(100) NOT NULL,
	feedback_content TEXT NOT NULL
);

INSERT INTO feedbacks (full_name, email_address, feedback_content)
VALUES
    ("John Doe", "johndoe@example.com", "I really like the design of the website. It's visually appealing and user-friendly."),
    ("Jane Smith", "janesmith@example.com", "The website's loading speed is impressive. It makes browsing a seamless experience."),
    ("Alice Johnson", "alicejohnson@example.com", "I encountered a broken link on the website. Please fix it."),
    ("Bob Anderson", "bobanderson@example.com", "The content on the website is informative and well-written. Great job!"),
    ("Sarah Williams", "sarahwilliams@example.com", "I had some trouble navigating through the website. It would be helpful to have a more intuitive menu."),
    ("David Thompson", "davidthompson@example.com", "The contact form on the website is not working. I tried submitting my query, but it failed."),
    ("Emily Davis", "emilydavis@example.com", "The website lacks a search functionality. It would be convenient for users to search for specific information.");
