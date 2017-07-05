<?php
$upDir = "./assets/uploads";

if(isset($_POST["submit"])){
$filePath = $upDir . basename($_FILES["pik"]["name"]);
$uploadOk = 1;
$imgExt = pathinfo($upDir, PATHINFO_EXTENSION);


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

    </form>

</body>
</html>