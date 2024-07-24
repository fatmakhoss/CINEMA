<?php include __DIR__.'/../header.php';?>
    <div class="container">
        <form action="index.php?action=store" method="post" enctype="multipart/form-data"> 
            <div>
                <label for="titre">titre</label>
                <input class="form-control" type="text" name="titre"/>
            </div>
            <div>
                <label for="id_genre">Genre</label>
                <select class="form-select" name="id_genre" >
                    <?php foreach($genres as $g) { ?>
                        <option value="<?=$g->getId()?>"><?=$g->getGenre()?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="duree">Durée</label>
                <input type="text" class="form-control" name="duree"/>
            </div>
            <div>
                <label for="affiche">Affiche</label>
                <input type="file" name="fileAffiche"/>
            </div>
            
            <div>
                <label for="producteur">Producteur</label>
                <input type="text" class="form-control" name="producteur"/>
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" class="form-control" ></textarea>
            </div>
            <button class="btn btn-success" type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>