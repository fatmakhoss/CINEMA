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
    <a class="btn btn-primary" href="index.php?action=create">Ajouter</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Genre</th>
            <th>Durée</th>
            <th>Affiche</th>
            <th>Producteur</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php foreach($films as $f){ ?>
            <tr>
                <td><?=$f->getId()?></td>
                <td><?=$f->getTitre()?></td>
                <td><?=$f->getGenre()?></td>
                <td><?=$f->getDuree()?></td>
                <td><img src="public/img/<?=$f->getAffiche()?>" width="200"/></td>
                <td><?=$f->getProducteur()?></td>
                <td><?=$f->getDescription()?></td>
                <td><a class="btn btn-success" href="index.php?action=edit&id=<?=$f->getId()?>">Modifier</a> | <a class="btn btn-danger" href="index.php?action=destroy&id=<?=$f->getId()?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>