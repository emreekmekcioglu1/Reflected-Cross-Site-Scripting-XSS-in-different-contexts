This project contains two folders named reflected_xss_html_context and Hacker. In the reflected_xss_html_context folder  there is a page vulnerable to reflected XSS. In the Hacker
folder there
is a page created to steal cookies. In the reflected_xss_html_context folder, there is two documents named "reflected_xss_html_front.php" and "reflected_xss_html_processor.php". 
This two pages are created to search name given by the user. And it is a sample of a site that is vulnerable to reflected XSS. The application takes a search parameter as an input
from the user anda make a search. For
the simplicity of example, for every searched word the application turns back the name of the searched word and inform user that it is not found. The attack vector rises from the 
print back the input without any control (as you can see on line 3.) You can use <script>alert(1)</script> to try. For the exploitation part, Hacker folder contains 
"hack_xss_reflected.php" which was created by the attacker who wants to exploit XSS vulnerability. The attacker uses url encoding to make a link will be send to the user
since there are some special characters in URL (ex. "="). When the user (victim that attacker choose) clicked the link sent by attacker (in that point a bit of social engineering
is important for make user click to prepared link) via mail, message or other methods. The link redirect the user to the attackers site, in my example it is bazinga.com 
(the virtual host I used and  hack_xss_reflected.php is located.), by using location.href ( you can see the in the hack_xss_reflected.php on line 15.) in a javascript as the input
variable search_word in the reflected_xss.php, and add a variable named data which is equal to document.cookie, to fetch the information from victims' browser. The javascript code
will be execute in the victims browser and fetch the information from here and send them to the address of the sender. As you can see in the hack_xss_reflected.php, attackers take 
the victim_data variable by $_GET superglobal and log it for him/her own. And then redirect the user to the vulnerable site, in my example it is 
learnvul.com/Reflected_XSS/reflected_xss_html_context/reflected_xss_html_front.php (learnvul.com is the virtual host I used.) . You can see my video in youtube attached here to see
how exploitation made. After the stealing the cookie the attacker can introduce
him as victim to the application. So how to prevent this attack? There are different kind of prevention for different kind of XSS. In this example when we take a look at the source
code of the vulnerable site, the application take
the search_word parameter given by the user from form, than processes it at the reflected_xss_01_processor.php the problem is if the given input is a javascript code, the browser 
consider it as javascript and execute it so we want to
prevent that, for this reason we should discard the <script>...</script> tags. Since we use the input in html context (THIS is important, because if the input is used in other 
contexts like javascript the prevention would be different!)
we can use htmlspeacialchars() bult-in PHP function which preserve some speacial characters in HTML their meanings, such as &,",',<,> 
(you can see https://www.php.net/manual/en/function.htmlspecialchars.php) (be carefull, you should
set ENT_QUOTES option true for single quote character.) . So if we use htmlspecialchars() function when we getting input it would be nice , otherwise if we use the function
only when we echo the parameter we may be should using it again when we use the search_term another time.
but by using it when we get ,input the varible will be always safe (you can see my video to see the changes for prevention.).
A little tip: You can use url shortener since there is lots of word like victim_data, hack etc in the url.
