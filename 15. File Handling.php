<?php

    $file = "data.txt";
    if(file_exists($file)){

        //  read all file + give size
        // echo readfile($file);

        $handle = fopen($file, "r");
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;

    } else{
        $handle = fopen($file, "w");
        $contents = "asad". PHP_EOL . "ali" . PHP_EOL . "ahmad" . PHP_EOL;
        fwrite($handle, $contents);
        fclose($handle);
    }