CREATE TABLE students (
    student_id INT PRIMARY KEY,
    age INT,
    gender VARCHAR(10),
    grade FLOAT
);
ALTER TABLE students ADD COLUMN name VARCHAR(255) NOT NULL;
ALTER TABLE students ADD COLUMN student_grade INT;

SELECT * FROM students;