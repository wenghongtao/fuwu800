<?php
include_once '../include/conn.php';

header('Content-type: application/json;charset=UTF-8');

$userName = $_POST['userName'];
$password = $_POST['password'];

function login($userName,$password) {
	global $db;
	$sql="select hashed_password from Users where name='".$userName."'";
	$has_pwd = $db->get_var($sql);
	
	if ($has_pwd == md5($password)) {
		header("Location: ../admin/index.php");  
	}else
	{
		echo "<script>window.location =\"../admin/login.php\";alert('密码输入错误！');</script>"; 
	}
}

login($userName, $password);



?>