<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h1>un super formulaire</h1>
        <form action="">
            <fieldset>
                <legend>données personelles</legend>
                
                    <div>     
                        <label for="">Nom</label>
                        <input name="text" type="text" placeholder="votre nom">
                    </div>
                    </div>
                        <label for="">Prénom</label>
                        <input name="text" type="text" placeholder="votre nom">
                    </div>
                    <div>
                        <label for="">Date de naissance</label>
                        <input name="date" type="date">
                    </div>
            </fieldset>
            <fieldset>
            <legend>les nouveaux input</legend>
                <div>
                    <label for="">Votre URL</label>
                    <input type="url" name="url">
                </div>
                <div>
                    <label for="">votre numero des telephone</label>
                    <input type="tel" name="phone">
                </div>
                <div>
                    <label>votre appreciations (entre 10 et 20)</label>
                    <input type="">
                </div>
            </fieldset>  
            <fieldset>
            <legend>versions paper - informatique</legend>
                
                    <div>
                        <input type="checkbox" id="html" name="competences" value="html">
                        <label for="html">recevoir la version papier</label>
                    </div>
                    <div>
                        <input type="checkbox" id="html" name="competences" value="html">
                        <label for="html">recevoir la version informatique</label>
                    </div>
                
            </fieldset> 
            
            <input type="submit" value="Envoyer">
            
        </form>
</body>
</html>