<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- partie traitement -->
<?php

function factorielle($nombreDepart)
{
    $resultatFact = 1;
    for ($i = 1; $i <= $nombreDepart;$i++) {
        $resultatFact = $resultatFact * $i ;
    }
    return $resultatFact; 
}

function nombreLettre($phrase, $lettre) 
{
    $nombreCompteur = 0;
    for ($i = 0; $i <strlen($phrase) ;$i++) {
        if ($phrase[$i] == $lettre){
            $nombreCompteur++;
        }
    }
    return $nombreCompteur;
}

?>

    <!-- partie affichage -->
    <p>la factorille de 7 vaut <?= factorielle(7) ?></p>
    <p>il y a  <?= nombreLettre("bonjour tous le monde" , "o")   ?> "o" dans bonjour tous le monde  </p>




</body>
</html>