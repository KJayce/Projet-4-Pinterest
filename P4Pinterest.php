<?php
if(isset($_FILES["pik"])){
    $err = array();
    $Fname = $_FILES["pik"]["name"];
    $Fsize = $_FILES["pik"]["type"];
    $Ftmp = $_FILES["pik"]["tmp_name"];
    $Ftype = $_FILES["pik"]["type"];
    $Fext = strtolower(end(explode('.', $_FILES["image"]["name"])));

    $ext = array("jpeg", "jpg", "png");

    if(in_array($Fext, $ext) === false){
        $err[] = "extension not allowed, please choose a JPEG, JPG or PNG file.";
    }

    if($Fsize > 4097152){
        $err = "file exceeding size limit, please choose a file of 4MB or less.";
    }

    if(empty($err)== true){
        move_uploaded_file($Ftmp,"assets/uploads/".$Fname);
        echo "File upload was successful!";
    }else{
        print_r($err);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="P4Pinterest.php" enctype="multipart/form-data">

        <label for="pik">Image to upload :</label><br />
        <input type="file" name="pik" id="pik" /><br />

        <label for="description">File description :</label><br />
        <textarea name="description" id="description"></textarea><br />
        <button type="submit"> Upload File </button>

        <ul>
            <li>Sent file: <?php echo $_FILES["pik"]["name"] ?>²</li>
            <li>File Size: <?php echo $_FILES["pik"]["size"] ?></li>
            <li>File type: <?php echo $_FILES["pik"]["type"] ?></li>
        </ul>

    </form>

</body>
</html>