<?php 
include_once '../include/conn.php';

//header('Content-type: application/json;charset=UTF-8');

$userName = $_POST['userName'];
$password = $_POST['password'];
//$error = "";

function login($userName,$password) {
	global $db,$error;
	$sql="select * from Users where name='$userName'";
	$user = $db->get_row($sql);
	if ( $user->hashed_password == md5($password)){
		session_start();
		$_SESSION["user"] = $user;
		header("Location: index.php");
	}
	else
	{
		$error = "密码错误或者账号不存在";
	}
}

login($userName, $password);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录页面</title>
</head>
<body>
<div>
<form action="login.php" method="post">
	<div class="notice">
		<?php echo $error; ?>
	</div>	
  <table>
	<tr>
	  <td>用户名：</td>
	  <td><input type="text" name="userName" /></td>
	</tr>
	<tr>
	  <td>密码：</td>
	  <td><input type="text" name="password" /></td>
	</tr>
  </table>
  <div><input type="submit" value="登录" /></div>
</form>
</div>
</body>
</html>