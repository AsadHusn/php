<?php
/*
The setcookie() function must appear BEFORE the <html> tag.

A cookie is often used to identify a user.
A cookie is a small file that the server embeds on the user's computer.
Each time the same computer requests a page with a browser, it will send the cookie too.
With PHP, you can both create and retrieve cookie values.
*/


//  setcookie(name, value, expire, path, domain, secure, httponly);
setcookie('user', 'Asad', time() + 60, "/");

if(isset($_COOKIE['user'])){
    echo $_COOKIE['user']; 
}


/*  -------------------
The value of the cookie is automatically URLencoded when sending the cookie,
and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
*/
setrawcookie("user", "Ahmad", time()+60);


//  ----------------------

//  To delete a cookie, use the setcookie() function with an expiration date in the past
setcookie('user', 'Asad', time() - 60, "/");


//  ----------------------

//  Check Cookies Enabled
if(count($_COOKIE) > 0)
    echo "Cookies are enabled.";
else
    echo "Cookies are disabled.";
