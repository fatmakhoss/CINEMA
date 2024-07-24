<?php include __DIR__.'/../headerClient.php';?>
<div class="row">
    
<?php $i=0;
foreach($films as $f){ 
    $i++;
    ?>
<div class="col-4">
    <div class="card" >
    <img src="public/img/<?=$f->getAffiche()?>" class="card-img-top" >
    <div class="card-body">
        <h5 class="card-title"><?=$f->getTitre()?></h5>
        <p class="card-text"><?=$f->getDescription()?></p>
        <a href="index.php?controller=Home&action=book&id=<?=$f->getId()?>" class="btn btn-warning float-end">Réserver</a>
    </div>
    </div>
</div>
    <?php if($i%3==0){ ?>
    </div>
    <?php }} 
    if($i%3>0){?>
    </div>
    <?php }?>
</div>  
</body>
</html>
