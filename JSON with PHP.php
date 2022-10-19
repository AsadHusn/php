<?php
    $person = [
        "name" => "Asad",
        "age" => 17
    ];

    //  json_encode()
    $str = json_encode($person);

    //  json_decode()
    $obj = json_decode($str);

    print_r($obj);

?>