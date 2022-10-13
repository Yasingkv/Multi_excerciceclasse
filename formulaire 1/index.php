<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="">
        <fieldset>
            <legend>vos coordonées</legend>
            
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
                <div>
                    <label for="">Entrez un mail :</label>
                    <input type="email" id="mail" placeholder="votre adresse mail">
                </div>
                <div>
                    <label for=""> Pays : </label>
                    <select name="pays" id="pays">
                        <optgroup label="Europe">
                            <option value="belgique">Belgique</option>
                    </optgroup>
                        <optgroup label="amerique du nord">
                        <option value="etats-unis">Algérie</option>
                        <option value="canada">Tunisie</option>
                    </optgroup>
                    <optgroup label="asie">
                        <option value="japon">Canada</option>
                        <option value="chine">Canada</option>
                    </optgroup>
                    </select>
                </div>
                <div>
                    <label for="">Nombre de copie souhaiter</label>
                    <input type="nombre" id="nombre">
                </div>
            
        </fieldset>
        <fieldset>
        <legend>periodicités</legend>
            
            <div>
                <input type="radio" id="h" name="sexe" value="homme">
                <label for="h">newsletter hebdomadaire</label>
            </div>
            <div>
                <input type="radio" id="f" name="sexe" value="femme">
                <label for="f">newsletter mensuelle</label>
            </div>
            <div>
                <input type="radio" id="f" name="sexe" value="femme">
                <label for="f">newsletter trimestrielle</label>
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