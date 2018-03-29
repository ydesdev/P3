<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="Public/bootstrap/css/bootstrap.min.css">
    <!--Optimal theme -->
    <link rel="stylesheet" href="Public/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Public/customcss.css">
    <script
            src='https://code.jquery.com/jquery-2.2.4.min.js'
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script src='Public/tinymce/js/tinymce/tinymce.min.js'></script>
    <script src='Public/tinymce/js/tinymce/jquery.tinymce.min.js'></script>

<!--     <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script> -->

</head>
<header>
    <?php
    if (isset($_SESSION['user'])) : ?>
    <!--.navbar>ul.nav.navbar-nav>li*5>a[href=#]!-->

        <div class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php?action=accessAdmin">Accueil</a></li>
                <li><a href="index.php?action=writePost">Ecrire</a></li>
                <li><a href="index.php?action=displayEditForm">Editer</a></li>
                <li><a href="index.php?action=listPosts">Commenter</a></li>
                <li><a href="index.php?action=reviewComments">Modérer</a></li>
                <li><a href="index.php?action=displayNotes">Bloc-notes</a></li>
                <li><a href="mailto:contact@skillbook.com">Contacter</a></li>

            </ul>

        </div>


    <?php endif; ?>


</header>
<body>

<?php if (isset($_SESSION['flashmessage'])) : ?>
    <div class="alert alert-info" role="alert"><?= $_SESSION['flashmessage'] ?></div>
    <?php unset($_SESSION['flashmessage']);
    //Attention, ne pas normalement mettre de mutateurs dedonnées dans une vue: penser a faire un objet dédié
    ?>
<?php endif; ?>

<?= $content ?>

</body>
<footer>
    <div class="navbar navbar-fixed-bottom">
        <div class="col-sm-offset-10 col-sm-2">
            <a class="btn btn-info btn-xs" href="index.php?action=accessAdmin">Accès admin</a>
            <?php if (isset($_SESSION['user'])) {
                ?>
                <a class="btn btn-warning btn-xs" href="index.php?action=logOff">Déconnexion</a>
            <?php }
            ?>
        </div>
    </div>

</footer>


<script src="Public/bootstrap/js/jquery-3.3.1.js"></script>
<script src="Public/bootstrap/js/bootstrap.min.js"></script>
<script>
    tinymce.init({
        selector: '.tinymce',
        entity_encoding:"raw"

    });

</script>

</html>

