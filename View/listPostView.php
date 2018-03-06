<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 27/02/2018
 * Time: 09:25
 */
$title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

    <h1> Billet simple pour l'Alaska</h1>
    <h2> Jean Forteroche</h2>
    <p> Partir pour se perdre. Se perdre pour se trouver. </p>


<?php

while ($data = $posts->fetch()){

    ?>
    <div class="container">
        <div class="row">
        <h4><a href="index.php?action=post&amp;id=<?=$data['id']?>"> Chapitre
            <?= htmlspecialchars($data['id'])?> : <?= htmlspecialchars($data['title'])?> </a></h4>
        </div>
    </div>
    <?php

}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>