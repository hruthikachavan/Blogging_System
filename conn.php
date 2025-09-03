<?php

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "health_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$usersTable = "CREATE TABLE IF NOT EXISTS Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(250) NOT NULL,
    category VARCHAR(100) NOT NULL
)";


$postsTable = "CREATE TABLE IF NOT EXISTS Posts (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(150) NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


$commentsTable = "CREATE TABLE IF NOT EXISTS Comments (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(150) NOT NULL,
    post_id INT NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES Posts(post_id) ON DELETE CASCADE
)";


if ($conn->query($usersTable) === TRUE) {
    echo "Users table created successfully.<br>";
} else {
    echo "Error creating Users table: " . $conn->error . "<br>";
}

if ($conn->query($postsTable) === TRUE) {
    echo "Posts table created successfully.<br>";
} else {
    echo "Error creating Posts table: " . $conn->error . "<br>";
}

if ($conn->query($commentsTable) === TRUE) {
    echo "Comments table created successfully.<br>";
} else {
    echo "Error creating Comments table: " . $conn->error . "<br>";
}


$conn->close();
?>
