<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 06/03/2018
 * Time: 09:25
 */


/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 01/03/2018
 * Time: 16:56
 */

$title = 'Billet simple pour l\'Alaska'; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="row col-xs-offset-1 col-xs-10">
            <h2> Editer un chapitre</h2>
        </div>
    </div>
<?php

while ($data = $posts->fetch()){

    ?>
    <div class="row">
        <div class="row col-md-offset-2 col-md-5">
            <table class="table table-hover">
                <tr>
                  <td><h5> Chapitre <?= htmlspecialchars($data['id'])?> : <?= htmlspecialchars($data['title'])?></h5></td>
                  <td class="col-md-1"><a href="index.php?action=editPost&amp;id=<?=$data['id']?>"><input type="submit" class="btn btn-primary btn-xs" value="Modifier"></a></td>
                  <td class="col-md-1"><a href="index.php?action=deletePost&amp;id=<?=$data['id']?>"><input type="submit" class="btn btn-alert btn-xs" value="Effacer"></a></td>
                </tr>
            </table>
        </div>
    </div>
    <?php

}
$posts->closeCursor();
?>

<div class="row">
    <div class="row col-xs-offset-1 col-xs-10">
        <div class="panel">
            <div class="panel-heading"><h2>Modifier un chapitre</h2></div>
            <div class="panel-body">
                <form action="index.php?action=writePost" method="post">
                    <div class="col-xs-2 form-group">
                        <label for="chapter_id"> Chapitre :</label>
                        <input type="text" class="form-control" id="chapter_id">
                    </div>
                    <div class="col-xs-12 form-group">
                        <label for="title"> Titre :</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="col-xs-12 form-group">
                        <label for="content"> Texte :</label>
                        <textarea class="form-control" rows="10" id="content"></textarea>
                    </div>
                    <div class="col-xs-12 form-group">
                        <input type="submit" class="btn btn-primary" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <?php $content = ob_get_clean(); ?>

    <?php require('View/template.php'); ?>
</div>
