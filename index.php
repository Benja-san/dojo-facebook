<?php

// `$users` contenant une série de prénoms (Simon, Arthur, Yohan),
// * *"Soyez le premier à aimer cette publication"*,
// * *"Simon aime cette publication"*,
// * *"Simon et Arthur aiment cette publication"*,
// * *"Simon et X autres personnes ont aimé cette publication."*,

/////////////////////////zone d'attente
// uncomment lines for testing
//$users = [];
// $users = ['Simon'];
// $users = ['Yohan'];
// $users = ['Pierre', 'Marie'];
// $users = ['Paul', 'Arthur'];
$users = ['Arthur', 'Paul', 'Julien', 'Simon', 'Valentin', 'Laurent'];
// $users = ['Virginie', 'Paul', 'Julien', 'Simon'];
//write you're code below
function displayLikes(array $array = []) :string 
{
    $arrayLength = count($array);
    $randomIndex = $arrayLength > 2 ? array_rand($array, 1) : 0;
    $messageDisplay = match($arrayLength){
        0 => "Soyez le premier à aimer cette publication",
        1 => "$array[0] aime cette publication",
        2 => "$array[0] et $array[1] aiment cette publication",
        default => "$array[$randomIndex] et ". count($array) - 1 ." autres personnes ont aimé cette publication."
    };
    return $messageDisplay;
}

echo displayLikes($users);