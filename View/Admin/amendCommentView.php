<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 27/02/2018
 * Time: 08:56
 */<?php $title = 'modification de commentaire' ?>

<?php ob_start(); ?>
		<h1> Modification du commentaire </h1>


		<h2> Commentaire à modifier </h2>

				<p><strong><?= htmlspecialchars($selectedComment['author']) ?></strong> le <?= $selectedComment['comment_date_fr'] ?></p>
				<p><?= nl2br(htmlspecialchars($selectedComment['comment']))?></p>


		<h2> Nouvelle Version du Commentaire</h2>
		<form action="index.php?action=amendComment&amp;id=<?= $selectedComment['id'] ?>" method="post">
			<div>
				<label ><?= htmlspecialchars($selectedComment['author']) ?></label><br/>
			</div>
			<div>
				<label for="changedcomment">Commentaire après changement</label><br>
				<textarea id="changedcomment" name="changedcomment"></textarea>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>

		<p><a href="index.php"> Retour à la liste des billets</a></p>
	}
		?>
	<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>

