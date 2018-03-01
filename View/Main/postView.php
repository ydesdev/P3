<?php $title = htmlspecialchars($post['title']) ?>

<?php ob_start(); ?>
    <h1> Chapitre <? htmlspecialchars(post['id']) ?> </h1>

    <div class="chapitre">
        <h3>
            <?= htmlspecialchars($post['title']) ?>
            <em> le <?= $post['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </p>

    </div>

    <h2> Commentaires</h2>
    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <div>
            <label for="author">Auteur</label><br/>
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br>
            <textarea id="comment" name="comment"></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>
    <p><a href="index.php"> Retour à l'index</a></p>

<?php
if(count($comments)){

    foreach ($comments as $comment)
    {
        ?>
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment']))?></p><a href="index.php?action=getComment&amp;id=<?= $comment['id']?>"> Modifier</a>
        <?php
    }

}else{ ?>

    <p> Pas de commentaire</p>
    <?php

}
?>
<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>