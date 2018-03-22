
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="Public/bootstrap/css/bootstrap.min.css">
    <!--Optimal theme -->
    <link rel="stylesheet" href="Public/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="Public/customcss.css">
</head>

<body>
<?= $content ?>
</body>
<footer>
    <div class="navbar navbar-fixed-bottom">
            <div class="col-sm-offset-10 col-sm-2">
                <a class="btn btn-info btn-xs" href="index.php?action=accessAdmin">Accès admin</a>
                <? if (isset($_SESSION['user'])) {
                    ?>
                <a class="btn btn-warning btn-xs" href="index.php?action=logOff">Déconnexion</a>
               <? }
               ?>
            </div>
    </div>

</footer>


<script src="Public/bootstrap/js/jquery-3.3.1.js"></script>
<script src="Public/bootstrap/js/bootstrap.min.js"></script>

</html>