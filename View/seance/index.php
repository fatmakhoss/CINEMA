<?php include __DIR__.'/../header.php';?>
    <div class="container">

    
    <?php if(isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
        <?=$_SESSION['error']?>
        </div>
        <?php 
        unset($_SESSION['error']);
        } ?>
        <?php if(isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
        <?=$_SESSION['success']?>
        </div>
        <?php 
        unset($_SESSION['success']);
        } ?>
    <a class="btn btn-primary" href="index.php?action=create&controller=Seance">Ajouter</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>film</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Prix</th>
            <th>Prix Enfant</th>
            <th>Places Restants</th>
            <th>Salle</th>
            <th>Action</th>
        </tr>
        <?php foreach($seances as $f){ ?>
            <tr>
                <td><?=$f->getId()?></td>
                <td><?=$f->getIdFilm()?></td>
                <td><?=$f->getDate()?></td>
                <td><?=$f->getHeure()?></td>
               <td><?=$f->getPrix()?></td>
               <td><?=$f->getPrixEnfant()?></td>
                <td><?=$f->NbPlaceRestant()?></td>
                <td><?=$f->getSalle()?></td>
                <td><a class="btn btn-success" href="index.php?action=edit&controller=Seance&id=<?=$f->getId()?>">Modifier</a> | <a class="btn btn-danger" href="index.php?controller=Seance&action=destroy&id=<?=$f->getId()?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>