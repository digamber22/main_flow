CREATE DATABASE user_auth;

USE user_auth;
  
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Dummy Users
INSERT INTO users (username, email, password) VALUES
('john_doe', 'john@example.com', '$2y$10$abcdefghijklmnopqrstuv'), -- hashed placeholder
('jane_doe', 'jane@example.com', '$2y$10$abcdefghijklmnopqrstuv'),
('admin', 'admin@example.com', '$2y$10$abcdefghijklmnopqrstuv');  

