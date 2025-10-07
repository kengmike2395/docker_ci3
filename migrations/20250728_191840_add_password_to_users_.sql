-- Migration: 20250728_191840_add_password_to_users_.sql
-- Created: Mon, Jul 28, 2025  7:18:40 PM

-- db-init/init.sql

CREATE TABLE IF NOT EXISTS users2 (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL
);

INSERT INTO users (username, email) VALUES
('admin', 'admin@example.com'),
('developer', 'dev@example.com');
