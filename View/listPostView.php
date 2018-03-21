<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 27/02/2018
 * Time: 09:25
 */
$title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-muted"> Billet simple pour l'Alaska</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center text-muted"> Jean Forteroche</h3>
        </div>
    </div>
    <div id="chapter-index" class="row">
        <blockquote class="blockquote-reverse">
    <p> Partir pour se perdre. Se perdre pour se trouver. </p>
        </blockquote>
    </div>

<?php

foreach ($posts as $data) {

    ?>
        <div class="row">
            <div class="row col-md-offset-5 col-md-3">
                <div class="panel">
                  <h4><a href="index.php?action=post&amp;id=<?=$data['id']?>">
                          <?= htmlspecialchars($data['title'])?> </a></h4>
                </div>
            </div>
         </div>
    <?php

}

?>
<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>
</div>
