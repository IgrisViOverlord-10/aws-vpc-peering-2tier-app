-- Create a new database for the application
CREATE DATABASE companydb;

-- Select the database to start working inside it
USE companydb;

-- Create employees table to store employee details
CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,     -- Unique employee ID
    name VARCHAR(100) NOT NULL,            -- Employee name
    role VARCHAR(100) NOT NULL,            -- Employee job role
    salary INT NOT NULL                    -- Employee salary
);

-- Insert initial employee records into the table
INSERT INTO employees (name, role, salary) VALUES
('John', 'Developer', 60000),
('Alice', 'DevOps Engineer', 75000),
('Mark', 'Database Admin', 70000);

-- Retrieve all records to verify successful insertion
SELECT * FROM employees;

-- Update salary of a specific employee
UPDATE employees
SET salary = 80000
WHERE name = 'Alice';

-- Delete a specific employee record from table
DELETE FROM employees
WHERE name = 'Mark';

-- Insert a new employee record after deletion
INSERT INTO employees (name, role, salary)
VALUES ('David', 'Cloud Engineer', 72000);

-- Display final table data after insert, update, delete operations
SELECT * FROM employees;