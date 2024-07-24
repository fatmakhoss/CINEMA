<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?action=store" method="post"> 
        <div>
            <label for="titre">titre</label>
            <input type="text" name="titre"/>
        </div>
        <div>
            <label for="id_genre">Genre</label>
            <select name="id_genre" >
                <?php foreach($genres as $g) { ?>
                    <option value="<?=$g->getId()?>"><?=$g->getGenre()?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="duree">Durée</label>
            <input type="text" name="duree"/>
        </div>
        <div>
            <label for="affiche">Affiche</label>
            <input type="text" name="affiche"/>
        </div>
        
        <div>
            <label for="producteur">Producteur</label>
            <input type="text" name="producteur"/>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" cols="40" rows="20"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>