<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tmpil"></div>
    <?php
        $filene = 'backend/output/dataform.txt';
        $foto = 'backend/output/img.txt';
        $filecon = file_get_contents($filene);
        $filecn = file_get_contents($foto);
        echo $filecn, "<br>", $filecon;
    ?>
</body>
</html>