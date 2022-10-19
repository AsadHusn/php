<?php

if(isset($_POST["submit"])){

    if(!$_FILES["file"]["error"]){

        $filename = $_FILES["file"]["name"];

        $filesize = $_FILES["file"]["size"];

        $filetype = $_FILES["file"]["type"];
        // $filetype = getimagesize($_FILES["file"]["tmp_name"])['mime'];   (width,height)
        $filedir = $_FILES["file"]["tmp_name"];
        $filetarget = "uploads/" . $filename;
        $ext = explode("/", $filetype)[0];
        // $ext = pathinfo($filename, PATHINFO_EXTENSION); == jpg

        if($ext=="image" && $filesize <= 1000000){

            move_uploaded_file($filedir, $filetarget);
            $msg = "File Uploaded";
        } else{
            $msg = "Select the correct file type";
        }
    }
    else{
        $msg = "Select an image file to upload";
    }

}
?>

<form method="post" enctype="multipart/form-data">
    Upload: <input type="file" name="file">
    <br>
    <input type="submit" name="submit">
    <br>
    <?php echo $msg ?? null ?>
</form>
