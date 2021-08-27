<?php  

//This is an example of XSS in HTML attribute context.

session_start();
setcookie("cookie_name");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SEARCH BY NAME</title>
</head>
<body style="margin-top: 100px; text-align: center;">
<h1>Welcome to fortuneteller, you can ask questions that their answers are yes or no </h1>
<form id="search" action="ref_xss_attribute_processor.php" method="GET">
	<input id = "searched" name = "search_word" type="text" placeholder="Kullanıcı ara"> <!-- Kullanıcı ara means Search User in Turkish-->
	<input type="submit" name="Ara"> <!-- Ara means seach in Turkish-->
</form>

</body>
</html>

