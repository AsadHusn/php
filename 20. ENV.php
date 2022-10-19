<?php

foreach($_ENV as $key=>$s){
    echo nl2br("$key | $s\n<hr>");
}

?>
