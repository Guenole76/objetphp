<?php


require('model/QuizDataManager.php');
require('model/QuizDisplayManager.php');
require('model/QuizResultManager.php');

$Question1 = new Question();
$Question2 = new Question();
$Question3 = new Question();

$Response1 = new Responce();
$Response2 = new Responce();
$Response3 = new Responce();
$Response4 = new Responce();

$Response1->Reponse1('New York Bulls');
$Response1->Reponse2('Los Angeles Kings');
$Response1->Reponse3('Golden State Warriros');
$Response1->Reponse4('Huston Rocket');

$Response2->Reponse1(10);
$Response2->Reponse2(11);
$Response2->Reponse3(12);
$Response2->Reponse4(13);

$Response3->Reponse1(1);
$Response3->Reponse2(2);
$Response3->Reponse3(3);
$Response3->Reponse4(4);

function quiz()
{
    //On appelle la fonction de récupération qui est dans le model et on met le résultat renvoyé dans la variable quizData
    $quizData = QuizDataManager::getQuizData();
    //On appelle la vue
    require('view/quizView.php');
}