<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <!-- etape0 -->
        <?php $nom = "world";?>
        <p>Hello <?= $nom ?></p>


        <!-- etaê 1 -->
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <p>Le nombre vaut <?= $i ?> </p>
        <?php endfor ?>

        <!-- etape 2 -->
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if($i != 3) : ?>
                    <p>Le nombre vaut <?= $i ?> </p>
            <?php endif ?>
        <?php endfor ?>
        <!-- etape 3 -->
        
    
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if($i < 4 || $i > 7) : ?>
                    <p>Le nombre vaut <?= $i ?> </p>
            <?php endif ?>
        <?php endfor ?>

        <!-- etape 4 -->
        
        <?php
            $a = - 5 ;
            $b = 10;
        ?>
        <p>la valeur absolue de <?= $a ?> est <?= abs($a) ?></p>
        <p>la valeur absolue de <?= $b ?> est <?= abs($b) ?> </p>




 

 

 

 


        
       
        
    
    
</body>
</html>