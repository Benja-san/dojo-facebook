<?php

// `$users` contenant une série de prénoms (Simon, Arthur, Yohan),
// * *"Soyez le premier à aimer cette publication"*,
// * *"Simon aime cette publication"*,
// * *"Simon et Arthur aiment cette publication"*,
// * *"Simon et X autres personnes ont aimé cette publication."*,

/////////////////////////zone d'attente
// uncomment lines for testing

// $users = ['Simon'];
// $users = ['Yohan'];
// $users = ['Pierre', 'Marie'];
// $users = ['Paul', 'Arthur'];

// $users = ['Virginie', 'Paul', 'Julien', 'Simon'];

//write you're code below

$users = ['Arthur', 'Paul', 'Julien', 'Simon', 'Valentin', 'Laurent'];


// 2m fonction de utilisateur aleatoire

$table_long = count($users);
switch ($table_long) {

    case 0:
        echo " $users[0] le dexieme à aimer cette publication";
        break;
    case 1:
        echo " $users[1] le dexieme à aimer cette publication";
        break;
    case 2:
        echo " $users[1]  et $users[2]  aime cette publication";
        break;
    case $table_long > 2:
        echo "$users[1] et " . $table_long - 1 . " a tresaiment cette publication";
        break;
};


// // une fonction qui prend un prenom aleatoire du tablau 
// function prenalea($users){
//     // prend un prenom (key) aleatoire du tableau 
//     $aleatoire=array_rand($users);
//     return $users[$aleatoire];
// };

function sentenceOnUsers(array $userArray = []): string
{
    (int) $arrayLength =  count($userArray);
    (int) $randomUser = $userArray[rand(0, $arrayLength - 1)];
    (string) $answerSentence = match (true) {
        $arrayLength === 0 => "Soyez le premier à aimer cette publication",
        $arrayLength === 1 => "$userArray[0] aime cette publication",
        $arrayLength === 2 => "$userArray[0] et $userArray[1] aiment cette publication",
        $arrayLength > 2 => "$userArray[0] et "  . $arrayLength - 1 . " autres personnes ont aimé cette publication."
    };

    if ($arrayLength === 0) {
        return $answerSentence;
    }

    return "Nom aléatoire : $randomUser<br>$answerSentence";
}

echo sentenceOnUsers($users);
