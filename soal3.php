<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal No.3</title>
</head>
<body>
    
<?php
    for($a=1; $a<=3; $a++)
    {
        echo "<br />";
        for($b=3; $b>=$a; $b--)
        {
            echo "=";
        }
        for($c=1; $c<=$a; $c++)
        {
            echo "@";
        }
        for($d=3; $d>=$a; $d--)
        {
            echo "=";
        }
    }

    for($e=3; $e>=1; $e--)
    {
        echo "<br />";
        for($b=3; $b>=$e; $b--)
        {
            echo "=";
        }
        for($c=1; $c<=$e; $c++)
        {
            echo "@";
        }
        for($d=3; $d>=$e; $d--)
        {
            echo "=";
        }
    }
?>

</body>
</html>