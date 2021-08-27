<?php

//Possible XSS vulnerability in line 3-4
$searched = $_GET["search_word"];
echo $searched;  

//Safe code in line 8
//$aranan = htmlspecialchars($_GET["search_word"], ENT_QUOTES,'UTF-8'); 
echo $aranan; 

echo " bulunamadı."; //bulunamadı means not found in Turkish language.

?>