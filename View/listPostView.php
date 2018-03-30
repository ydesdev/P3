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
            <div class="col-xs-offset-1 col-xs-5">
                <div class="panel panel-info">
                    <div class="panel-heading">
                            <h3>Table des matières</h3>
                    </div>
                    <div class="panel-body">

                    <?php
                    foreach ($posts as $data) {
                    ?>
                  <h4><a href="index.php?action=post&amp;id=<?=$data['id']?>">
                          <?= htmlspecialchars($data['title'])?> </a></h4>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
         </div>

<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>
</div>
