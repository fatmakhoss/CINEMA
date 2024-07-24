<?php include __DIR__.'/../header.php';?>
    <div class="container">

    
    <?php if(isset($_SESSION['error'])) { ?>
        <span font-color="red"><?=$_SESSION['error']?></span>
    <?php 
    unset($_SESSION['error']);
    } ?>
    <?php if(isset($_SESSION['success'])) { ?>
        <span font-color="red"><?=$_SESSION['success']?></span>
    <?php 
    unset($_SESSION['success']);
    } ?>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>nom</th>
            <th>email</th>
            <th>tel</th>
            <th>film</th>
            <th>seance</th>
            <th>date de réservation</th>
            <th>adultes</th>
            <th>enfants</th>
            <th>total</th>
        </tr>
        <?php foreach($reservations as $r){ ?>
            <tr>
                <td><?=$r->getId()?></td>
                <td><?=$r->getNom()?></td>
                <td><?=$r->getEmail()?></td>
                <td><?=$r->getTel()?></td>
               <td><?=$r->getTitre()?></td>
               <td><?=$r->getDate()?> <?=$r->getHeure()?></td>
                <td><?=$r->getDatereservation()?></td>
                <td><?=$r->getNbad()?></td>
                <td><?=$r->getNbenf()?></td>
                <td><?=$r->getTotal()?></td>
                
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>