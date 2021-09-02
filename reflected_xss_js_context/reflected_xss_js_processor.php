<?php

//Possible XSS vulnerability in line 4
$searched = $_GET["search_word"]; 

//Safe code in line 8 or 9; if you want to use line 8 change aranan to aranan_safe at line 23.

$searched_safe = filter_var($aranan,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
//$aranan = json_encode(htmlspecialchars($_GET["search_word"],ENT_QUOTES,'UTF-8')); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SEARCH BY NAME</title>
</head>
<body style="margin-top: 100px; text-align: center;">
<h1>This site use the user input in JavaScript.<h1> <!--In English: Hello, this site is created to see reflected XSS in basics. -->

<p id="result"></p>
<script type="text/javascript">
	//var MyValue = document.getElementById('searched').value;
	var x = '<?php echo"$searched"?>';
	//document.write(x);
	document.getElementById("result").innerHTML = x;
	//document.getElementById("result").value = x;
</script>
 <input type="button" value="Go back!" onclick="history.back()">

</body>
</html>
