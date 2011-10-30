<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录页面</title>
</head>
<body>
<div>
<form action="../ajax/login.php" method="post">
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