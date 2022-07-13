<html>
    <head>
        <?php echo $this->render('templates/head.html',NULL,get_defined_vars(),0); ?>
    </head>
    <bod>
        <h3>My Feed</h3>
        
        <?php foreach (($memes?:[]) as $meme): ?>
            <div class="card">
                <div class="card-header">
                    <span class="likes"><?= ($meme->getLikes()) ?></span>
                </div>
                <div class="card-body">
                    <?= ($meme->getDescription())."
" ?>
                </div>
            </div>
        <?php endforeach; ?>
    </bod>
</html>