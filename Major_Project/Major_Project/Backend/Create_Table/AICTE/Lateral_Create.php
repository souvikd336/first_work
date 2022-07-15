<?php
require '../connection.php';
// sql to create table
// 130, 309, 226
$sql = "CREATE TABLE `130_lateral` (
Student_Id VARCHAR(10) PRIMARY KEY,
Student_Name VARCHAR(50) NOT NULL,
Course_Under_By VARCHAR(10) DEFAULT 'AICTE',
Entrance_Type VARCHAR(25) NOT NULL,
Course_Name VARCHAR(10) NOT NULL,
JELET_Roll VARCHAR(20) NOT NULL,
RANK VARCHAR(10) NOT NULL,
Course_Type VARCHAR(50) NOT NULL,
CATEGORY VARCHAR(8) NOT NULL,
AADHAAR VARCHAR(12) NOT NULL,
Passing_Year VARCHAR(4) NOT NULL,
RegN VARCHAR(11) NOT NULL,
Fathers_Name VARCHAR(50),
Mothers_Name VARCHAR(50),
DOB VARCHAR(10) NOT NULL,
Nationality VARCHAR(10) NOT NULL,
Gender VARCHAR(6) NOT NULL,
Blood_Group VARCHAR(10),
Religion VARCHAR(20) NOT NULL,
Gurdian_Name VARCHAR(50) NOT NULL,
Gurdian_Address VARCHAR(100) NOT NULL,
Gurdian_Contact VARCHAR(50) NOT NULL,
Relation_With_Student VARCHAR(10) NOT NULL,
Residential_Status VARCHAR(20) NOT NULL,
Student_Address VARCHAR(100) NOT NULL,
Student_State VARCHAR(20) NOT NULL,
Student_District VARCHAR(50) NOT NULL,
Student_Pin VARCHAR(50) NOT NULL,
Student_Mobile VARCHAR(10) NOT NULL,
Student_Altno VARCHAR(11) NOT NULL,
Student_Email VARCHAR(50) NOT NULL,
Examination_Name VARCHAR(10) NOT NULL,
Board VARCHAR(50) NOT NULL,
Paper_1_Name VARCHAR(30) DEFAULT 'sem_1',
Paper_1_Marks INT NOT NULL,
Paper_2_Name VARCHAR(30) DEFAULT 'sem_2',
Paper_2_Marks INT NOT NULL,
Paper_3_Name VARCHAR(30) DEFAULT 'sem_3',
Paper_3_Marks INT NOT NULL,
Paper_4_Name VARCHAR(30) DEFAULT 'sem_4',
Paper_4_Marks INT NOT NULL,
Paper_5_Name VARCHAR(30) DEFAULT 'sem_5',
Paper_5_Marks INT NOT NULL,
Paper_6_Name VARCHAR(30) DEFAULT 'sem_6',
Paper_6_Marks INT NOT NULL,
Paper_7_Name VARCHAR(30) DEFAULT 'sem_7',
Paper_7_Marks INT,
Paper_8_Name VARCHAR(30) DEFAULT 'sem_8',
Paper_8_Marks INT,
Division VARCHAR(3) NOT NULL,
CGPA VARCHAR(4) NOT NULL,
Marks_Sheet VARCHAR(100) NOT NULL,
Aadhaar_Card VARCHAR(100) NOT NULL,
Photo VARCHAR(100) NOT NULL,
Signature VARCHAR(100) NOT NULL,
DOB_Proof VARCHAR(100) NOT NULL,
Anti_Ragging_Declaration VARCHAR(100) NOT NULL,
Domicile_Certificate VARCHAR(100),
Caste_Certificate VARCHAR(100),
JELET_Allotment_Card VARCHAR(100),
JELET_Rank_Card VARCHAR(100),
Reg_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table 130_lateral created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE `309_lateral` (
Student_Id VARCHAR(10) PRIMARY KEY,
Student_Name VARCHAR(50) NOT NULL,
Course_Under_By VARCHAR(10) DEFAULT 'AICTE',
Entrance_Type VARCHAR(25) NOT NULL,
Course_Name VARCHAR(10) NOT NULL,
JELET_Roll VARCHAR(20) NOT NULL,
RANK VARCHAR(10) NOT NULL,
Course_Type VARCHAR(50) NOT NULL,
CATEGORY VARCHAR(8) NOT NULL,
AADHAAR VARCHAR(12) NOT NULL,
Passing_Year VARCHAR(4) NOT NULL,
RegN VARCHAR(11) NOT NULL,
Fathers_Name VARCHAR(50),
Mothers_Name VARCHAR(50),
DOB VARCHAR(10) NOT NULL,
Nationality VARCHAR(10) NOT NULL,
Gender VARCHAR(6) NOT NULL,
Blood_Group VARCHAR(10),
Religion VARCHAR(20) NOT NULL,
Gurdian_Name VARCHAR(50) NOT NULL,
Gurdian_Address VARCHAR(100) NOT NULL,
Gurdian_Contact VARCHAR(50) NOT NULL,
Relation_With_Student VARCHAR(10) NOT NULL,
Residential_Status VARCHAR(20) NOT NULL,
Student_Address VARCHAR(100) NOT NULL,
Student_State VARCHAR(20) NOT NULL,
Student_District VARCHAR(50) NOT NULL,
Student_Pin VARCHAR(50) NOT NULL,
Student_Mobile VARCHAR(10) NOT NULL,
Student_Altno VARCHAR(11) NOT NULL,
Student_Email VARCHAR(50) NOT NULL,
Examination_Name VARCHAR(10) NOT NULL,
Board VARCHAR(50) NOT NULL,
Paper_1_Name VARCHAR(30) DEFAULT 'sem_1',
Paper_1_Marks INT NOT NULL,
Paper_2_Name VARCHAR(30) DEFAULT 'sem_2',
Paper_2_Marks INT NOT NULL,
Paper_3_Name VARCHAR(30) DEFAULT 'sem_3',
Paper_3_Marks INT NOT NULL,
Paper_4_Name VARCHAR(30) DEFAULT 'sem_4',
Paper_4_Marks INT NOT NULL,
Paper_5_Name VARCHAR(30) DEFAULT 'sem_5',
Paper_5_Marks INT NOT NULL,
Paper_6_Name VARCHAR(30) DEFAULT 'sem_6',
Paper_6_Marks INT NOT NULL,
Paper_7_Name VARCHAR(30) DEFAULT 'sem_7',
Paper_7_Marks INT,
Paper_8_Name VARCHAR(30) DEFAULT 'sem_8',
Paper_8_Marks INT,
Division VARCHAR(3) NOT NULL,
CGPA VARCHAR(4) NOT NULL,
Marks_Sheet VARCHAR(100) NOT NULL,
Aadhaar_Card VARCHAR(100) NOT NULL,
Photo VARCHAR(100) NOT NULL,
Signature VARCHAR(100) NOT NULL,
DOB_Proof VARCHAR(100) NOT NULL,
Anti_Ragging_Declaration VARCHAR(100) NOT NULL,
Domicile_Certificate VARCHAR(100),
Caste_Certificate VARCHAR(100),
JELET_Allotment_Card VARCHAR(100),
JELET_Rank_Card VARCHAR(100),
Reg_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table 309_lateral created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE `226_lateral` (
Student_Id VARCHAR(10) PRIMARY KEY,
Student_Name VARCHAR(50) NOT NULL,
Course_Under_By VARCHAR(10) DEFAULT 'AICTE',
Entrance_Type VARCHAR(25) NOT NULL,
Course_Name VARCHAR(10) NOT NULL,
JELET_Roll VARCHAR(20) NOT NULL,
RANK VARCHAR(10) NOT NULL,
Course_Type VARCHAR(50) NOT NULL,
CATEGORY VARCHAR(8) NOT NULL,
AADHAAR VARCHAR(12) NOT NULL,
Passing_Year VARCHAR(4) NOT NULL,
RegN VARCHAR(11) NOT NULL,
Fathers_Name VARCHAR(50),
Mothers_Name VARCHAR(50),
DOB VARCHAR(10) NOT NULL,
Nationality VARCHAR(10) NOT NULL,
Gender VARCHAR(6) NOT NULL,
Blood_Group VARCHAR(10),
Religion VARCHAR(20) NOT NULL,
Gurdian_Name VARCHAR(50) NOT NULL,
Gurdian_Address VARCHAR(100) NOT NULL,
Gurdian_Contact VARCHAR(50) NOT NULL,
Relation_With_Student VARCHAR(10) NOT NULL,
Residential_Status VARCHAR(20) NOT NULL,
Student_Address VARCHAR(100) NOT NULL,
Student_State VARCHAR(20) NOT NULL,
Student_District VARCHAR(50) NOT NULL,
Student_Pin VARCHAR(50) NOT NULL,
Student_Mobile VARCHAR(10) NOT NULL,
Student_Altno VARCHAR(11) NOT NULL,
Student_Email VARCHAR(50) NOT NULL,
Examination_Name VARCHAR(10) NOT NULL,
Board VARCHAR(50) NOT NULL,
Paper_1_Name VARCHAR(30) DEFAULT 'sem_1',
Paper_1_Marks INT NOT NULL,
Paper_2_Name VARCHAR(30) DEFAULT 'sem_2',
Paper_2_Marks INT NOT NULL,
Paper_3_Name VARCHAR(30) DEFAULT 'sem_3',
Paper_3_Marks INT NOT NULL,
Paper_4_Name VARCHAR(30) DEFAULT 'sem_4',
Paper_4_Marks INT NOT NULL,
Paper_5_Name VARCHAR(30) DEFAULT 'sem_5',
Paper_5_Marks INT NOT NULL,
Paper_6_Name VARCHAR(30) DEFAULT 'sem_6',
Paper_6_Marks INT NOT NULL,
Paper_7_Name VARCHAR(30) DEFAULT 'sem_7',
Paper_7_Marks INT,
Paper_8_Name VARCHAR(30) DEFAULT 'sem_8',
Paper_8_Marks INT,
Division VARCHAR(3) NOT NULL,
CGPA VARCHAR(4) NOT NULL,
Marks_Sheet VARCHAR(100) NOT NULL,
Aadhaar_Card VARCHAR(100) NOT NULL,
Photo VARCHAR(100) NOT NULL,
Signature VARCHAR(100) NOT NULL,
DOB_Proof VARCHAR(100) NOT NULL,
Anti_Ragging_Declaration VARCHAR(100) NOT NULL,
Domicile_Certificate VARCHAR(100),
Caste_Certificate VARCHAR(100),
JELET_Allotment_Card VARCHAR(100),
JELET_Rank_Card VARCHAR(100),
Reg_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table 226_lateral created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>