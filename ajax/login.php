<?php
include_once 'conn.php';

$userName = $_POST['userName'];
$password = $_POST['password'];

function login($userName,$password) {
	global $db;
	$sql="select hashed_password from Users where name={$userName}";
	$user = $db->get_row($sql);	
	
	if ($user->hashed_password == md5($password)) {
		header("Location: index.php"); 
	}else
	{
		echo "密码错误！";
	}
}

login($userName, $password);




?>