CREATE DATABASE bus_system;

USE bus_system;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100)
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100),
    seat_number INT
);

CREATE TABLE buses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bus_number VARCHAR(50),
    driver_name VARCHAR(100)
);

CREATE TABLE drivers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    driver_name VARCHAR(100),
    phone VARCHAR(20)
);