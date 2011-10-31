<?php 
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: ../login.php");  
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>


</body>
</html>