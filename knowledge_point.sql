
-- Create database and use it
CREATE DATABASE IF NOT EXISTS knowledge_point;
USE knowledge_point;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Courses table
CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00
);

-- Purchases table
CREATE TABLE IF NOT EXISTS purchases (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    course_id INT,
    purchase_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (course_id) REFERENCES courses(id)
);

-- Contact Messages table
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert some courses
INSERT INTO courses (title, description, price) VALUES
('Mathematics - Class 10', 'Full syllabus of CBSE Class 10 Mathematics', 299.00),
('Science - Class 10', 'Physics, Chemistry and Biology for Class 10', 349.00),
('English Literature - Class 10', 'All chapters and grammar topics', 199.00),
('Social Science - Class 10', 'History, Geography, Civics and Economics', 299.00),
('Hindi - Class 10', 'Complete Hindi literature and grammar', 199.00);
