<?php

class QuizDataManager
{
	// Récupère un élément des données du quiz
	public static function getQuizDataElement($element)
	{
		$quizData = $this->getQuizData();

		$quizDataElements = array();

		foreach($quizData as $themeName => $themeData)
		{
			foreach($themeData as $questionNumber => $questionData)
			{
				$quizDataElements[$themeName.'_'.$questionNumber] = $questionData[$element];
			}
		}

		return $quizDataElements;
	}

	public static function getQuizData()
	{
		$fileData = file_get_contents('public/quizData.json');
		$quizData = json_decode($fileData,true);

		$quizData = $quizData['quiz'];

		return $quizData;
	}
}