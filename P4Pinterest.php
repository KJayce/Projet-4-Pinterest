<?php
$upDir = "assets/uploads/";

if(isset($_POST["submit"])){
    $fName = $_FILES["pik"]["name"];
    $fTarget = $upDir . basename($Fname);
    $fType = pathinfo($fTarget, PATHINFO_EXTENSION);
}
$err = false;

if(isset($_POST["submit"])){
    $fNametmp = $_FILES["pik"]["tmp_name"];
    $check = getimagesize($fNametmp);
    if($check !== false){
        echo "<p> The file you uploaded is an image - " . $check ["mime"] . " .</p>";
        $err = false;
    }else {
        echo "<p> Sorry, you must upload an images only.</p>";
        $err = true;
    }
}

if($_FILES["fName"]["size"] > 500000){
    echo "<p> File's size exceeds authorized limit </p>";
    $err;
}

if($fType !== "jpg" &&
   $fType !== "png" && 
   $fType !== "jpeg" && 
   $fType !== "gif" && 
   $fType !== "svg"){
    echo "<p> Please upload an image in the following format: jpg, png, jpeg, gif, svg </p>";
    $err;
}

if ($err){
    echo "<p> File could not be uploaded </P>";
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
            <li>Sent file: <?php echo $_FILES["pik"]["name"] ?></li>
            <li>File Size: <?php echo $_FILES["pik"]["size"] ?></li>
            <li>File type: <?php echo $_FILES["pik"]["type"] ?></li>
        </ul>

    </form>

</body>
</html>