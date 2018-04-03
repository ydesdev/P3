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
    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-offset-3 col-lg-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="close" href="index.php?action=accessAdmin"> <span class="glyphicon glyphicon-remove-circle"></span></a>
                <h2> Commentaires signalés</h2>

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                        <th class="col-xs-2">Auteur</th>
                        <th class="col-xs-2">Commentaire</th>
                        <th class="col-xs-1">Flags</th>
                        <th class="col-xs-3">Action</th>
                        </tr>
                        <tr>
                            <?php
                            if(count($flags)){
                            foreach ($flags as $flag)
                            {
                            ?>


                            <td class="col-xs-2"><p><strong><?= htmlspecialchars($flag['author']) ?></strong><br/>
                                    le <?= $flag['comment_date_fr'] ?></p></td>
                            <td class="col-xs-2"><p><?= nl2br(htmlspecialchars($flag['comment'])) ?></p></td>
                            <td class="col-xs-1"><p><?= nl2br(htmlspecialchars($flag['flag_count'])) ?></p></td>
                            <td class="col-xs-3">
                                <a href="index.php?action=okComment&amp;id=<?= $flag['id'] ?>" class="btn btn-primary btn-xs">Valider ce commentaire</a>
                            <br/>
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteComment"> Effacer ce commentaire</button>

                                <br/>
                                <a href="index.php?action=post&amp;id=<?= $flag['post_id'] ?>" type="submit" class="btn btn-info btn-xs">Voir le billet</a>
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
            <div class="modal fade" id="deleteComment" role="dialog" aria-labelledby="deleteComment" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4>
                        </div>
                        <div class="modal-body">
                        <p><span class="glyphicon glyphicon-alert"></span> Etes-vous sûr de vouloir effacer de commentaire?</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button"  class="btn btn-info" data-dismiss="modal">Annuler</button>
                        <a href="index.php?action=deleteComment&amp;id=<?=$flag['id']?>"class="btn btn-danger" role="button">Effacer</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();?>
<?php require('View/template.php'); ?>





