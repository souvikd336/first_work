<?php
require '../security.php';
$S_Id = $_SESSION['login_user'];
if ($S_Id != NULL) {
	require '../../connection.php';
//TODO

$sql = "SELECT `Student_Name`, `College_Code`, `Course_Name` FROM `student_all` WHERE Student_Id = '$S_Id'";
$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $S_Name = $row['Student_Name'];
    $college_code = $row['College_Code'];
    $Course = $row['Course_Name'];
}
else{
    echo "Something went wrong";
}

$table_name = $college_code.'_'.strtolower($Course);


$Course_Under_By = $_POST['C_By'];
$Entrance_Type = $_POST['E_Type'];
$CET_Roll = $_POST['CET_Roll'];
$RANK = $_POST['Rank'];
$Course_Type = $_POST['C_Type'];
$CATEGORY = $_POST['Category'];
$AADHAAR = $_POST['A_No'];
$Passing_Year = $_POST['P_Year'];
$RegN_12th = $_POST['R12_N'];
$Fathers_Name = $_POST['F_Name'];
$Mothers_Name = $_POST['M_Name'];
$DOB = $_POST['DOB'];;
$Nationality = $_POST['Nationality'];
$Gender = $_POST['Gen'];
$Blood_Group = $_POST['B_Group'];
$Religion = $_POST['Religion'];
$Gurdian_Name = $_POST['G_Name'];
$Gurdian_Address = $_POST['G_Address'];
$Gurdian_Contact = $_POST['G_Contact'];
$Relation_With_Student = $_POST['Relation_S'];
$Residential_Status = $_POST['R_Status'];
$Student_Address = $_POST['S_Address'];
$Student_State = $_POST['S_State'];
$Student_District = $_POST['S_District'];
$Student_Pin = $_POST['S_Pincode'];
$Student_Mobile = $_POST['S_M'];
$Student_Altno = $_POST['S_Altno'];
$Student_Email = $_POST['S_Email'];
$Examination_Name_12th = $_POST['E_12Name'];
$Board = $_POST['Board_Name'];
$Paper_1_Name = $_POST['P1_Name'];
$Paper_1_Marks = $_POST['P1_Marks'];
$Paper_2_Name = $_POST['P2_Name'];
$Paper_2_Marks = $_POST['P2_Marks'];
$Paper_3_Name = $_POST['P3_Name'];
$Paper_3_Marks = $_POST['P3_Marks'];
$Paper_4_Name = $_POST['P4_Name'];
$Paper_4_Marks = $_POST['P4_Marks'];
$Paper_5_Name = $_POST['P5_Name'];
$Paper_5_Marks = $_POST['P5_Marks'];
$Paper_6_Name = $_POST['P6_Name'];
$Paper_6_Marks = $_POST['P6_Marks'];
$Total_Marks = $_POST['Total_Marks'];
$Division = $_POST['Division'];
$CGPA = $_POST['CGPA'];
$XII_Marks_Sheet = $_FILES['Marks_Sheet'];
$Aadhaar_Card = $_FILES['A_Card'];
$Photo = $_FILES['Dp'];
$Signature = $_FILES['Sign'];
$DOB_Proof = $_FILES['DOB_Card'];
$Anti_Ragging_Declaration = $_FILES['Anti_Dec'];
$Domicile_Certificate = $_FILES['Domicile'];
$Caste_Certificate = $_FILES['Caste_Card'];
$CET_Allotment_Card = $_FILES['CET_A_Card'];



$XII_Marks_Sheet_Name = $XII_Marks_Sheet['name'];
$XII_Marks_Sheet_Path = $XII_Marks_Sheet['tmp_name'];
$XII_Marks_Sheet_Error = $XII_Marks_Sheet['error'];
$XII_Marks_Sheet_Size = $XII_Marks_Sheet['size'];
if($XII_Marks_Sheet_Error == 0 && $XII_Marks_Sheet_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_XII_Marks_Sheet.jpg';
	//'Soft_Copy/'.$table_name.'/'.$S_Id.'_XII_Marks_Sheet.jpg'
	move_uploaded_file($XII_Marks_Sheet_Path, $Destination_File);
	$XII_Marks_Sheet = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$Aadhaar_Card_Name = $Aadhaar_Card['name'];
$Aadhaar_Card_Path = $Aadhaar_Card['tmp_name'];
$Aadhaar_Card_Error = $Aadhaar_Card['error'];
$Aadhaar_Card_Size = $Aadhaar_Card['size'];
if($Aadhaar_Card_Error == 0 && $Aadhaar_Card_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_Aadhaar_Card.jpg';
	move_uploaded_file($Aadhaar_Card_Path, $Destination_File);
	$Aadhaar_Card = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$Photo_Name = $Photo['name'];
$Photo_Path = $Photo['tmp_name'];
$Photo_Error = $Photo['error'];
$Photo_Size = $Photo['size'];
if($Photo_Error == 0 && $Photo_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_Photo.jpg';
	move_uploaded_file($Photo_Path, $Destination_File);
	$Photo = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$Signature_Name = $Signature['name'];
$Signature_Path = $Signature['tmp_name'];
$Signature_Error = $Signature['error'];
$Signature_Size = $Signature['size'];
if($Signature_Error == 0 && $Signature_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_Signature.jpg';
	move_uploaded_file($Signature_Path, $Destination_File);
	$Signature = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$DOB_Proof_Name = $DOB_Proof['name'];
$DOB_Proof_Path = $DOB_Proof['tmp_name'];
$DOB_Proof_Error = $DOB_Proof['error'];
$DOB_Proof_Size = $DOB_Proof['size'];
if($DOB_Proof_Error == 0 && $DOB_Proof_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_DOB_Proof.jpg';
	move_uploaded_file($DOB_Proof_Path, $Destination_File);
	$DOB_Proof = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$Anti_Ragging_Declaration_Name = $Anti_Ragging_Declaration['name'];
$Anti_Ragging_Declaration_Path = $Anti_Ragging_Declaration['tmp_name'];
$Anti_Ragging_Declaration_Error = $Anti_Ragging_Declaration['error'];
$Anti_Ragging_Declaration_Size = $Anti_Ragging_Declaration['size'];
if($Anti_Ragging_Declaration_Error == 0 && $Anti_Ragging_Declaration_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_Anti_Ragging_Declaration.jpg';
	move_uploaded_file($Anti_Ragging_Declaration_Path, $Destination_File);
	$Anti_Ragging_Declaration = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$Domicile_Certificate_Name = $Domicile_Certificate['name'];
$Domicile_Certificate_Path = $Domicile_Certificate['tmp_name'];
$Domicile_Certificate_Error = $Domicile_Certificate['error'];
$Domicile_Certificate_Size = $Domicile_Certificate['size'];
if($Domicile_Certificate_Error == 0 && $Domicile_Certificate_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_Domicile_Certificate.jpg';
	move_uploaded_file($Domicile_Certificate_Path, $Destination_File);
	$Domicile_Certificate = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$Caste_Certificate_Name = $Caste_Certificate['name'];
$Caste_Certificate_Path = $Caste_Certificate['tmp_name'];
$Caste_Certificate_Error = $Caste_Certificate['error'];
$Caste_Certificate_Size = $Caste_Certificate['size'];
if($Caste_Certificate_Error == 0 && $Caste_Certificate_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_Caste_Certificate.jpg';
	move_uploaded_file($Caste_Certificate_Path, $Destination_File);
	$Caste_Certificate = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$CET_Allotment_Card_Name = $CET_Allotment_Card['name'];
$CET_Allotment_Card_Path = $CET_Allotment_Card['tmp_name'];
$CET_Allotment_Card_Error = $CET_Allotment_Card['error'];
$CET_Allotment_Card_Size = $CET_Allotment_Card['size'];
if($CET_Allotment_Card_Error == 0 && $CET_Allotment_Card_Size < 204000){
	$Destination_File = '../../Soft_Copy/'.$table_name.'/'.$S_Id.'_CET_Allotment_Card.jpg';
	move_uploaded_file($CET_Allotment_Card_Path, $Destination_File);
	$CET_Allotment_Card = $Destination_File;
}
else{
	echo "Error or size >= 200KB";
}

$sql = "INSERT INTO `$table_name` (Student_Id,Student_Name,	Course_Under_By,	Entrance_Type,	Course_Name,	CET_Roll,	RANK,	Course_Type,	CATEGORY,	AADHAAR,	Passing_Year,	RegN_12th,	Fathers_Name,	Mothers_Name,	DOB,	Nationality,	Gender,	Blood_Group,	Religion,	Gurdian_Name,	Gurdian_Address,	Gurdian_Contact,	Relation_With_Student,	Residential_Status,	Student_Address,	Student_State,	Student_District,	Student_Pin,	Student_Mobile,	Student_Altno,	Student_Email,	Examination_Name_12th,	Board,	Paper_1_Name,	Paper_1_Marks,	Paper_2_Name,	Paper_2_Marks,	Paper_3_Name,	Paper_3_Marks,	Paper_4_Name,	Paper_4_Marks,	Paper_5_Name,	Paper_5_Marks,	Paper_6_Name,	Paper_6_Marks,Total_Marks,	Division,	CGPA,	XII_Marks_Sheet,	Aadhaar_Card,	Photo,	Signature,	DOB_Proof,	Anti_Ragging_Declaration,	Domicile_Certificate,	Caste_Certificate,	CET_Allotment_Card	)
VALUES ('$S_Id','$S_Name',	'$Course_Under_By',	'$Entrance_Type',	'$Course',	'$CET_Roll',	'$RANK',	'$Course_Type',	'$CATEGORY',	'AADHAAR',	'$Passing_Year',	'$RegN_12th',	'$Fathers_Name',	'$Mothers_Name',	'$DOB',	'$Nationality',	'$Gender',	'$Blood_Group',	'$Religion',	'$Gurdian_Name',	'$Gurdian_Address',	'$Gurdian_Contact',	'$Relation_With_Student',	'$Residential_Status',	'$Student_Address',	'$Student_State',	'$Student_District',	'$Student_Pin',	'$Student_Mobile',	'$Student_Altno',	'$Student_Email',	'$Examination_Name_12th',	'$Board',	'$Paper_1_Name',	'$Paper_1_Marks',	'$Paper_2_Name',	'$Paper_2_Marks',	'$Paper_3_Name',	'$Paper_3_Marks',	'$Paper_4_Name',	'$Paper_4_Marks',	'$Paper_5_Name',	'$Paper_5_Marks',	'$Paper_6_Name',	'$Paper_6_Marks','$Total_Marks',	'$Division',	'$CGPA',	'$XII_Marks_Sheet',	'$Aadhaar_Card',	'$Photo',	'$Signature',	'$DOB_Proof',
	'$Anti_Ragging_Declaration',	'$Domicile_Certificate',	'$Caste_Certificate',	'$CET_Allotment_Card')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>