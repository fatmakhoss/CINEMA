<?php include __DIR__.'/../header.php'; ?>
<div class="container">
    <form action="index.php?controller=Seance&action=update" method="post"> 
        <input type="hidden" name="id" value="<?=$seance->getId()?>">
        <div>
            <label for="id_film">Film</label>
            <select class="form-select" name="id_film" >
                <?php foreach($films as $g) { ?>
                    <option value="<?=$g->getId()?>" <?php if($g->getId()==$seance->getIdFilm()) echo 'selected' ;?>><?=$g->getTitre()?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="date">date</label>
            <input class="form-control" type="date" name="date" value="<?=$seance->getDate()?>"/>
        </div>
        
        <div>
            <label for="heure">Heure</label>
            <input class="form-control"  type="time" name="heure" value="<?=$seance->getHeure()?>"/>
        </div>
        <div>
            <label for="prix">Prix</label>
            <input class="form-control"  type="text" name="prix" value="<?=$seance->getPrix()?>"/>
        </div>
        
        <div>
            <label for="salle">Salle</label>
            <select class="form-select"  name="salle" >
                    <?php for($i=1;$i<10;$i++) { ?>
                        <option value="<?=$i?>" <?php if($i==$seance->getSalle()) echo 'selected' ;?>><?=$i?></option>
                    <?php } ?>
            </select>
        </div>
        <div>
            <label for="nbplace">Nb place</label>
            <input class="form-control"  type="number" name="nbplace" value="<?=$seance->getNbplace()?>"/>
        </div>
        <div>
            <label for="vendu">vendu</label>
            <input class="form-control"  type="number" name="vendu" value="<?=$seance->getVendu()?>"/>
        </div>
        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>