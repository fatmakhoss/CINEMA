<?php include __DIR__.'/../header.php'; ?>
<div class="container">
    <form action="index.php?controller=Genre&action=update" method="post" > 
        <input type="hidden" name="id" value="<?=$genre->getId()?>">
        <div>
            <label for="genre">Genre</label>
            <input class="form-control"type="text" name="genre" value="<?=$genre->getGenre()?>"/>
        </div>

        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
</div>
</body>
</html>