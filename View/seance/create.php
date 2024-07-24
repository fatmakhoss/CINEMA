<?php include __DIR__.'/../header.php'; ?>
<div class="container">
    <form action="index.php?controller=Seance&action=store" method="post"> 
        <div>
            <label for="id_film">Film</label>
            <select class="form-select" name="id_film" >
                <?php foreach($films as $g) { ?>
                    <option value="<?=$g->getId()?>"><?=$g->getTitre()?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="date">date</label>
            <input type="date" class="form-control" name="date"/>
        </div>
        
        <div>
            <label for="heure">Heure</label>
            <input type="time" class="form-control" name="heure"/>
        </div>
        <div>
            <label for="prix">Prix</label>
            <input type="text" class="form-control" name="prix"/>
        </div>
        
        <div>
            <label for="salle">Salle</label>
            <select class="form-select" name="salle" >
                    <?php for($i=1;$i<10;$i++) { ?>
                        <option value="<?=$i?>"><?=$i?></option>
                    <?php } ?>
            </select>
        </div>
        <div>
            <label for="nbplace">Nb place</label>
            <input type="number" class="form-control" name="nbplace" value="200"/>
        </div>
        <div>
            <label for="vendu">vendu</label>
            <input type="number" class="form-control" name="vendu" />
        </div>
        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>