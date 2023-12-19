<?php

// À partir d'un tableau `$users` contenant une série de prénoms (Simon, Arthur, Yohan, etc.),
// * *"Soyez le premier à aimer cette publication"*,
// * *"Simon aime cette publication"*,
// * *"Simon et Arthur aiment cette publication"*,
// * *"Simon et X autres personnes ont aimé cette publication."*,

/////////////////////////zone d'attente
// uncomment lines for testing
//  $users = [];
//  $users = ['Simon'];
//  $users = ['Yohan'];
//  $users = ['Pierre', 'Marie'];
//  $users = ['Paul', 'Arthur'];
//  $users = ['Arthur', 'Paul', 'Julien', 'Simon', 'Valentin', 'Laurent'];
//  $users = ['Virginie', 'Paul', 'Julien', 'Simon'];

//write you're code below

 $users = ['Pierre', 'Marie'];
function prenom($users) {
    global $users;
    $nbuser = count($users);

    if ($nbuser === 0) {
        echo "Soyez le premier à aimer cette publication";
    } elseif ($nbuser === 1) {
        echo $users[0] ." aime cette publication";
    } elseif ($nbuser === 2) {
        echo $users[0] . " et " . $users[1] . " aiment cette publication";
    } else {
        echo $users[0] ." et ". $nbuser-1 ." personnes ont aimé cette publication.";
    }
}
prenom($users);


//  foreach ($users as $user) {
//      echo "$user";
     
//      if ($user === null) {
//         echo "Soyez le premier à aimer cette publication";
//     } elseif ($user === [0] && $users[1]) {
//         echo "Simon aime cette publication";
//     } 
//  }