<?php include __DIR__.'/../headerClient.php';?>


<div class="row">
<div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="public/img/<?=$film->getAffiche()?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$film->getTitre()?></h5>
        <p class="card-text"><?=$film->getDescription()?></p>
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
        <form action="index.php?controller=Home&action=createbook" method="post">
            <div>
                <label for="">Seance</label>
                <select class="form-select" name="id_seance" >
                    <?php foreach($seances as $s) {?>
                        <option value="<?=$s->getId();?>"><?=$s->getDate();?> <?=$s->getHeure()?> Salle: <?=$s->getSalle()?>(<?=$s->NbPlaceRestant()?> places)</option>
                    <?php }?>
                </select>
            </div>
            <div>
                <label for="">Adultes</label>
                <input class="form-control" type="number" name="nbad" id="">
            </div>
            <div>
                <label for="">Enfants</label>
                <input class="form-control" type="number" name="nbenf" id="">
            </div>
            <div>
                <label for="">Nom</label>
                <input class="form-control" type="text" name="nom" id="">
            </div>
            <div>
                <label for="">Email</label>
                <input class="form-control" type="text" name="email" id="">
            </div>
            <div>
                <label for="">Tél</label>
                <input class="form-control" type="text" name="tel" id="">
            </div>
            <button class="btn btn-warning flex-end" type="submit">Réserver</button>
        </form>
    </div>
    </div>
  </div>
</div>
</div>
</div>  
</body>
</html>
