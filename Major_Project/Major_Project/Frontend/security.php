<?php
session_start();
$set = isset($_SESSION['login_user']);
if($set == false){
	header('Location: ../Student_Login.php');
}
?>