<?php
require '../connection.php';

// sql to create table
$sql = "CREATE TABLE `student_all` (
    S_No INT AUTO_INCREMENT PRIMARY KEY,
    Student_Id VARCHAR(10) UNIQUE NOT NULL,
    Student_Name VARCHAR(50) NOT NULL,
    Student_Mobile VARCHAR(10) NOT NULL,
    College_Code INT NOT NULL,
    Course_Name VARCHAR(10) NOT NULL,
    Password VARCHAR(25) DEFAULT '12345' NOT NULL,
    SignIn INT DEFAULT 1 NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table student_all created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>