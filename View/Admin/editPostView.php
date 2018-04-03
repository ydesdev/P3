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
        <div class="row col-xs-12 col-sm-10 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="close" href="index.php?action=accessAdmin"> <span class="glyphicon glyphicon-remove-circle"></span></a>
                   <h2> Editer un chapitre</h2>
                </div>
                <div class="panel-body">


                    <table class="table table-hover">
                        <?php

                        foreach ($posts as $data)
                        {
                        ?>
                <tr>
                    <td><h5> <?= htmlspecialchars($data['title']) ?></h5></td>
                    <td class="col-md-1"><input type="submit" class="btn btn-primary" data-toggle="modal"
                                                data-target="#editPost<?= $data['id'] ?>" value="Modifier"></td>
                    <td class="col-md-1"><input type="submit" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deletePost<?= $data['id'] ?>" value="Effacer"></a></td>
                </tr>

                            <?php
                        }
                        ?>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <?php

    foreach ($posts as $data)
    {
    ?>
    <div class="modal fade" id="editPost<?= $data['id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4>Modifier un chapitre</h4>

                    <div class="modal-body">
                        <form action="index.php?action=editPost&amp;id=<?= $data['id'] ?> " method="post">
                            <div class="col-xs-12 form-group">
                                <label for="title"> Titre :</label>
                                <input type="text" class="form-control" name="title" id="title"
                                       value="<?= htmlspecialchars($data['title']) ?>">
                            </div>
                            <div class="col-xs-12 form-group">
                                <label for="content"> Texte :</label>
                                <textarea class="form-control tinymce" rows="15" name="content" id="content"> <?= htmlspecialchars($data['content']) ?></textarea>

                            </div>
                            <div class="modal-footer">
                                <div class="col-xs-12 form-group">
                                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="deletePost<?= $data['id'] ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h4>Confirmation</h4></div>
                <div class="modal-body">
                    <p><span class="glyphicon glyphicon-alert"></span> Etes-vous sûr de vouloir effacer de
                        chapitre?</p> </div>
                <div class="modal-footer">
                    <a href="index.php?action=displayEditForm"><input type="submit" class="btn btn-info"
                                                                      value="Annuler"></a>
                    <a href="index.php?action=deletePost&amp;id=<?= $data['id'] ?>"><input type="submit"
                                                                                           class="btn btn-danger"
                                                                                           value="Effacer"></a>
                </div>
            </div>
        </div>
    </div>
        <?php
    }
    ?>






    <?php $content = ob_get_clean(); ?>

    <?php require('View/template.php'); ?>

</div>

