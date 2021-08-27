<?php

//This is an example of XSS in HTML attribute context.

//Possible XSS vulnerability in line 7

$inputVar = $_GET["search_word"]; 

//Safe code in line 11

//$inputVar = htmlspecialchars($_GET["search_word"], ENT_QUOTES,'UTF-8');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Title of the Document</title>
  </head>
  <body>
    <center>
  
    <input type="text" placeholder="Type " id="inputId" value='<?php echo"$inputVar"?>'>
    <br>
    <p id="pid"></p>
    <script type="text/javascript">
        var ans = Math.floor(Math.random()*2);
        if(ans == 0){
          document.getElementById("pid").innerHTML="The answer is yes";
        }
        else{
         document.getElementById("pid").innerHTML="The answer is no"; 
        }
    </script>
   
 
    <br><br>
  
    <input type="button" value="Go back!" onclick="history.back()">
    <br><br>
    
  </center>
  </body>
</html>