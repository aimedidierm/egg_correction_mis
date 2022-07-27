<?php 
session_start();
require 'php-includes/connect.php';
extract($_POST);
$password=md5($password);
$query = "SELECT id, email FROM farmer WHERE email= ? AND password = ? limit 1";
$stmt = $db->prepare($query);
$stmt->execute(array($email, $password));
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
if ($stmt->rowCount()>0) {
	$_SESSION['email'] = $email;
	$_SESSION['id'] = session_id();
	$_SESSION['login_type'] = "farmer";
	echo "<script>window.location.assign('farmer/dashboard.php')</script>";
}
$query = "SELECT id, email FROM admin WHERE email= ? AND password = ? limit 1";
$stmt = $db->prepare($query);
$stmt->execute(array($email, $password));
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
if ($stmt->rowCount()>0) {
	$_SESSION['email'] = $email;
	$_SESSION['id'] = session_id();
	$_SESSION['login_type'] = "admin";
	echo "<script>window.location.assign('admin/dashboard.php')</script>";
}else{
	echo "<script>alert('Your ID or Password is Wrong');window.location.assign('index.php')</script>";
}
?>