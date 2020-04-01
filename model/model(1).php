<?php

function getQuizData()
{
	//On récupère le contenu du json
	$fileData = file_get_contents('public/quizData.json');
	//On décode le json
	$quizData = json_decode($fileData,true);
	//On passe la partie quiz qui ne nous sert pas dans le json
	$quizData = $quizData['quiz'];

	//On appelle la fonction du dessous qui va formater le résultat que l'on attend
	//On la met dans une autre fonction car c'est plus propre ;) 
	$quizData = private_formatQuizData($quizData);

	return $quizData;
}

function private_formatQuizData($quizData)
{
	//On boucle sur les thèmes dans quiz
	foreach($quizData as $themeName => $themeData)
	{
        //On boucle sur les numéros de questions des thèmes
		foreach($themeData as $questionNumber => $questionData)
		{
			//Vous insérez dans un tableau
			$quizData[$themeName][$questionNumber]['label'] = $themeName.'_'.$questionNumber;
		}
	}
    //Vous envoyez le tableau quizData au front
	return $quizData;
}