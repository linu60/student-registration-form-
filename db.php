CREATE DATABASE IF NOT EXISTS student_db;

USE student_db;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    reg VARCHAR(50),
    dob DATE,
    course VARCHAR(50),
    gender VARCHAR(10)
);
