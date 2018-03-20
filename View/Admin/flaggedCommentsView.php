<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 05/03/2018
 * Time: 17:23
 */
 $title = "Gestion des Commentaires" ?>

<?php ob_start(); ?>
<div class="container">
<div class="row">
    <div class="row col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Commentaires Signalés</h2>

            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <tr>
                    <th>Auteur</th>
                    <th>Commentaire</th>
                    <th>Nombre de signalements</th>
                    <th>Action</th>
                    </tr>
                    <tr>
                        <?php
                        if(count($flags)){
                        foreach ($flags as $flag)
                        {
                        ?>

                        <td><p><strong><?= htmlspecialchars($flag['author']) ?></strong><br/>
                                le <?= $flag['comment_date_fr'] ?></p></td>
                        <td><p><?= nl2br(htmlspecialchars($flag['comment'])) ?></p></td>
                        <td><p><?= nl2br(htmlspecialchars($flag['flag_count'])) ?></p></td>
                        <td><a href="index.php?action=okComment&amp;id=<?= $flag['id'] ?>"><input type="submit"
                                                                                                    class="btn btn-primary btn-xs"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#flagPost"
                                                                                                    value="Valider ce commentaire"></a>
                        <br/>
                        <a href="index.php?action=okComment&amp;id=<?= $flag['id'] ?>"><input type="submit"
                                                                                                  class="btn btn-danger btn-xs"
                                                                                                  data-toggle="modal"
                                                                                                  data-target="#flagPost"
                                                                                                  value="Effacer ce commentaire"></a>
                        </td>
                    </tr>
                    <?php
                    }

                    }else{ ?>

                        <p> Pas de commentaire signalé</p>

                        <?php

                    }
                    ?>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();?>
<?php require('View/template.php'); ?>

</div>
<!--fetch des commentaires flaggés, par ordre décroissant de flags

//pour chaque commentaire un bouton delete et un bouton ok

//un retour à la liste après chaque opération

//un lien de retour vers l'admin
--!>


