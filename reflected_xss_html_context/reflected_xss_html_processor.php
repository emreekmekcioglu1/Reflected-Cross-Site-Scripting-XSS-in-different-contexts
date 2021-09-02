<?php

//Possible XSS vulnerability in line 4
$searched = $_GET["search_word"];

//Safe code in line 7
//$searched = htmlspecialchars($_GET["search_word"], ENT_QUOTES,'UTF-8'); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<p>Aradığınız kelime <?php echo $searched ?> bulunamadı</p>
	<br>
	<input type="button" value="Geri" onclick="history.back()">
</body>
</html>
