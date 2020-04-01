<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<meta charset="utf-8" />
		<meta name="robots" content="noindex" />
		<style>
			*
			{
				text-align: center;
			}

			h1
			{
				font-size: 24px;
			}

			h2
			{
				margin: 0;
				font-size: 18px;
			}

			fieldset
			{
				margin: 20px 30%;
			}

			fieldset legend
			{
				text-align: left;
				text-transform: capitalize;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
		<h1>Quiz</h1>
		<p>Répondez correctement aux questions suivantes :</p>
		<?php //On créé notre formulaire  ?>
		<form action="#" method="post" id="quiz">
			<?php
			//Première boucle qui parcours nos thèmes (math et sport)
			foreach($quizData as $themeName => $themeData) { ?>
			<fieldset>
			<?php //On affiche les thèmes recueilli dans une légende (c'est ce qui fait les cadres autour des thèmes)  ?>
				<legend><?= $themeName ?></legend>
				<?php
				// Maintenant qu'on est entré dans un thème on parcours ses questions (q1  et q1/q2)
				foreach($themeData as $questionNumber => $questionData) { ?>
					<p>
						<h2>
						<?php //On affiche le label de la question qui correspond à l'endroit ou nous sommes dans la boucle?>
						<?=$questionData['question']."<br><br>\n"?></h2>
						
						<?php
						//On fait uen boucle pour afficher les options correspondant à la question ou nous sommes
						foreach($questionData['options'] as $index => $option)
						{ ?>

						<?php //On affiche le label de chaque option dans une checkbox ?>
							<input type="radio" name="<?=$questionData['label']?>" value="<?=$index?>" id="<?=$questionData['label'].'_'.$index?>" /> <label for="<?=$questionData['label']?>"><?=$option?></label><br />
						<?php } ?>
					</p>
				<?php } ?>
			</fieldset>
			<?php } ?>

			<input type="submit" value="Valider" />
		</form>
	</body>
</html>