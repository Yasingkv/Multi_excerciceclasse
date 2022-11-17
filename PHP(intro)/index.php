<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //etape 0
        echo "<p> hello norld </p>";

        //etape 1
        $i = 1;
            
        while($i <= 10){
            echo "<p>le nombre vaut  $i </p>";
            $i++;
        }
        //etape2
        $i = 1;
            
        while($i <= 10){
            if ($i != 3)
                echo "<p>le nombre vaut $i</p>";
                $i++;
        }

        //etape3
        $i = 1;
            
        while($i <= 10){
            if ($i < 4 or $i >7)
                echo "<p>le nombre vaut $i</p>";
                $i++;
        }
        //etape4
        $a = -5;
        $b = 10;
        echo"<p>la valeur absolue de $a est ". abs($a) . "</p>";
        echo"<p>la valeur absolue de $b est ". abs($b) . "</p>";    

    
    ?>
    
</body>
</html>