<?php include __DIR__.'/../header.php'; ?>
<div class="container">
    <form action="index.php?controller=Genre&action=store" method="post" > 
        <div>
            <label for="genre">Genre</label>
            <input class="form-control" type="text" name="genre"/>
        </div>

        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
</div>
</body>
</html>