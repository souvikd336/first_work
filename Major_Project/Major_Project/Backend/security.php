<?php
session_start();
$set = isset($_SESSION['login_user']);
if($set == false){
	echo 'Access Denied';
}
?>