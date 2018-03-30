    <?php
    /**
     * Created by PhpStorm.
     * User: yanndesdevises
     * Date: 29/03/2018
     * Time: 08:59
     */
    $title = 'Billet simple pour l\'Alaska'; ?>
    <?php ob_start(); ?>

    <div class="container">
        <div class="row col-xs-12 col-md-offset-1 col-md-10">
            <div class="panel fade in collapse">
                <div class="panel-body">
                    <a class="close" href="index.php?action=accessAdmin"> <span class="glyphicon glyphicon-remove-circle"></span></a>
                    <h2> Bloc-Notes</h2>
                    <?php
                    {
                    ?>
                    <form action="index.php?action=updateNotes" method="post">
                        <div class="col-xs-12 form-group">
                            <label for="updatedContent"> Notes et idées: ajoutez ici vos notes pour les copier/coller plus tard </label>
                            <textarea class="form-control tinymce" rows="15" name="updatedContent" id="updatedContent">
                               <?= htmlspecialchars($notes['notes_content']) ?>


                            </textarea>
                        </div>
                         <div class="col-xs-12 form-group">
                            <input type="submit" class="btn btn-primary" value="Enregistrer">
                         </div>

                    </form>
                    <?php
                        }
                        ?>
                </div>
            </div>
        </div>

        <?php $content = ob_get_clean(); ?>

        <?php require('View/template.php'); ?>
    </div>

