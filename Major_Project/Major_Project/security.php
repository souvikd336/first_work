<?php
session_start();
if(isset($_SESSION['login_user'])){
	header('Location: Frontend/Student_Login.php');
}
?>