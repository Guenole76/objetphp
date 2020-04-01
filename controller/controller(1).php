<?php
require('model/model.php');

function quiz()
{
	//On appelle la fonction de récupération qui est dans le model et on met le résultat renvoyé dans la variable quizData
	$quizData = getQuizData();
	//On appelle la vue
	require('view/quizView.php');
}