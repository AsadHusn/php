<?php

/*
Note: The session_start() function must be the very first thing in your document. Before any HTML tags.

A session is a way to store information (in variables) to be used across multiple pages.
Unlike a cookie, the information is not stored on the users computer.
*/

session_start();

    $_SESSION["color"] = "red";

    
?>
