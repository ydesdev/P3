<?php $title = htmlspecialchars($post['title']) ?>

<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-1 chevron">
            <form>
                <a href="index.php?action=previousChapter&amp;id=<?=$post['id']?>"><h1> < </h1></a>
            </form>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="close" href="index.php?action=listPosts"> <span class="glyphicon glyphicon-remove-circle"></span></a>

                    <h2> <?= htmlspecialchars($post['title']) ?> </h2>
                </div>
                <div class="panel-body">
                    <p><?= nl2br(htmlspecialchars($post['content'])) ?> </p>

                </div>
            </div>
        </div>
        <div class="row col-md-offset-1 col-md-1 chevron"><a href="index.php?action=nextChapter&amp;id=<?=$post['id']?>"><h1>   > </h1></a></div>


    </div>

    <div class="row">
        <div class="col-md-offset-1 col-md-8">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    <h3> Commentaires</h3>
                     <input type="submit" class="btn btn-info btn-xs" data-toggle="modal" data-target="#addComment" value="Ajouter un commentaire">
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                       <tr>
                    <?php
                    if(count($comments)){
                        foreach ($comments as $comment)
                        {
                    ?>
                           <td><p><strong><?= htmlspecialchars(trim($comment['author'])) ?></strong><br/> le <?= $comment['comment_date_fr'] ?></p></td>
                            <td><p><?= nl2br(htmlspecialchars(trim($comment['comment']))) ?></p></td>
                           <td><a href="index.php?action=flagComment&amp;id=<?=$comment['id']?>"><input type="submit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#flagPost" value="Signaler"></a></td>
                       </tr>
                    <?php
                        }

                    }else{ ?>

                    <p> Pas de commentaire </p>
                        <?php
                    }
                    ?>
                    </table>
                </div>
            </div>
        </div>
        <aside class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                    foreach ($posts as $data) {
                        ?>
                        <h5><a href="index.php?action=post&amp;id=<?=$data['id']?>">
                                <?= htmlspecialchars($data['title'])?> </a></h5>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </aside>
    </div>
    <div class="modal fade" id="addComment">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                    </button>
                        <h4> Ajouter un commentaire</h4>
                </div>
                <div class="modal-body">
                    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                        <div class="col-xs-12 form-group">
                            <label for="author">Auteur</label><br/>
                            <input type="text" id="author" name="author" />
                        </div>
                        <div class="col-xs-12 form-group">
                            <label for="comment">Commentaire</label><br>
                            <textarea id="comment" name="comment"></textarea>
                        </div>
                        <input type="submit" class="btn btn-info btn-xs" value="Ajouter le commentaire">
                    </form>
                    <div class="modal-footer">
                    <h4><a href="index.php"> Retour à l'index</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>
</div>

