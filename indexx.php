<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<?php  

    // заполняем массив всеми элементами из директории
    $handle = opendir('imgs/gals/family/preview');

    while (false !== ($file = readdir($handle))) {
        $files[] = $file;
    }

    foreach ($files as $src) { 
        if($src=='.' || $src=='..') continue;
        echo "$src<br>";
    }
    
    closedir($handle); 
?> 
</body>
</html>
