<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/formulaire.css">
    <title>Document</title>
</head>
<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li  class="menu"><a href="profil.php">Page profil</a></li>
            <li  class="menu"><a href="connexion.php">Connexion</a></li>
            <li  class="menu"><a href="inscription.php">Inscription</a></li>
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="connexion.php"><ion-icon size="large" name="cloud-done-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="inscription.php"><ion-icon size="large" name="cloud-download-outline"></ion-icon></a></li>
        </ul>
    </header>
<main>
    <div class="flex justify-content-space-evenly">
        <div class="flex ">
            <form action="">
                <fieldset>
                    <legend>vos coordonées</legend>
                    
                        <div>     
                            <label for="">Nom</label>
                            <input name="text" type="text" placeholder="votre nom">
                        </div>
                        <div>
                            <label for="">Prénom</label>
                            <input name="text" type="text" placeholder="votre nom">
                        </div>
                        <div>
                            <label for="">Date de naissance</label>
                            <input name="date" type="date" placeholder="votre date de naissance">
                        </div>
                        <div>
                            <label for="">Entrez un mail :</label>
                            <input type="email" id="mail" placeholder="votre adresse mail">
                        </div>
                </fieldset>
                    <div class="flex justify-content-space-evenly">
                        <button class="button">Button</button>
                    </div>
                        
            </form>
        </div>
    </div>
    
    
</main>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>