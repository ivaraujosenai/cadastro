<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $texto = "111.111.111-11";
    if (preg_match('/(\d)\1{10}/', $texto)) {
        return false;
    }
    //$limpo = preg_replace('/[.-]/is','',$texto);

    echo ($limpo);
    ?>
</body>
</html>