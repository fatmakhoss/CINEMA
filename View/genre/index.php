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
    <a class="btn btn-primary" href="index.php?controller=Genre&action=create">Ajouter</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Genre</th>
            <th>Action</th>
        </tr>
        <?php foreach($genres as $g){ ?>
            <tr>
                <td><?=$g->getId()?></td>
                <td><?=$g->getGenre()?></td>
                 <td><a class="btn btn-success" href="index.php?controller=Genre&action=edit&id=<?=$g->getId()?>">Modifier</a> | <a class="btn btn-danger" href="index.php?controller=Genre&action=destroy&id=<?=$g->getId()?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>