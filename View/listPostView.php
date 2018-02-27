<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 27/02/2018
 * Time: 09:25
 */
<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
    <h1> Billet simple pour l\'Alaska</h1>
    <h2> Jean Forteroche</h2>
    <p> Partir pour se perdre. Se perdre pour se trouver. </p>


<?php

while ($data = $posts->fetch())
{
    ?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title'])?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
    <?php

}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>