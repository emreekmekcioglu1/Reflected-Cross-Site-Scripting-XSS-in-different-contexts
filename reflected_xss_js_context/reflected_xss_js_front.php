<?php  
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
<h1>Merhaba, bu site en basit hali ile reflected XSS'in JS contextinde tespiti yapılması için kurulmuştur.</h1> <!--In English: Hello, this site is created to see reflected XSS in basics. -->
<form id="search" action="reflected_xss_js_processor.php" method="GET">
	<input id = "searched" name = "search_word" type="text" placeholder="Kullanıcı ara"> <!-- Kullanıcı ara means Search User in Turkish-->
	<input type="submit" name="Ara"> <!-- Ara means seach in Turkish-->
</form>

</body>
</html>
