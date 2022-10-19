<form>
    Name: <input type="text" name="name">
    Age: <input type="text" name="age">
    <input type="submit" value="submit" name="submit">
</form>
<?php

if(isset($_GET["submit"])){

    echo filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS);

    echo filter_var($_GET['age'], FILTER_SANITIZE_SPECIAL_CHARS);

}

?>
