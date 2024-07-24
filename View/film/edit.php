<?php include __DIR__.'/../header.php';?>
    <div class="container">
    <form action="index.php?action=update" method="post">
        <input type="hidden" name="id" value="<?=$film->getId()?>">
        <div>
            <label for="titre">titre</label>
            <input class="form-control" type="text" name="titre" value="<?=$film->getTitre()?>"/>
        </div>
        <div>
            <label for="id_genre">Genre</label>
            <select class="form-select" name="id_genre" >
                <?php foreach($genres as $g) { ?>
                    <option value="<?=$g->getId()?>" <?php if($film->getGenre()==$g->getId()) echo 'selected' ;?>><?=$g->getGenre()?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="duree">Durée</label>
            <input type="text" class="form-control" name="duree" value="<?=$film->getDuree()?>"/>
        </div>
        <div>
            <label for="affiche">Affiche</label>
            <input type="text" class="form-control" name="affiche" value="<?=$film->getAffiche()?>"/>
        </div>
        <div>
            <label for="producteur">Producteur</label>
            <input type="text" class="form-control" name="producteur" value="<?=$film->getProducteur()?>"/>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="10"><?=$film->getDescription()?></textarea>
        </div>
        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>