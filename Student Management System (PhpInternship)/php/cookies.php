<?php
/*
Cookies is basically a tag which helps devs to identify the same user and show results according to his previous preferences. 

Helps to learn user's variable.

User cannot set cookies.
*/


session_start();
if(isset($_SESSION['email']))
{
$cookie_name = $_SESSION['firstname']; //value taken from the registration form
$cookie_value = $_SESSION['email'];    //value taken from the registration form
          //cookiname, cookieContent, cookieValidity from moment to when?
setcookie($cookie_name,$cookie_value, time()+ (86400*30), "/");
echo 'Cookies are:', '<br>';

echo $cookie_name,'<br>',$cookie_value;
}

else
echo 'Cookies are set!','<br>', 'And Session is unset now';


?>
