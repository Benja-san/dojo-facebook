<?php



// * *"Simon aime cette publication"*,
// * *"Simon et Arthur aiment cette publication"*,
// * *"Simon et X autres personnes ont aimé cette publication."*,

/////////////////////////zone d'attente
// uncomment lines for testing




// $users = ['Simon'];
// $users = ['Yohan'];
// $users = ['Pierre', 'Marie'];
// $users = ['Paul', 'Arthur'];
// $users = ['Arthur', 'Paul', 'Julien', 'Simon', 'Valentin', 'Laurent'];
// $users = ['Virginie', 'Paul', 'Julien', 'Simon'];

//write you're code below

// `$users` contenant une série de prénoms (Simon, Arthur, Yohan),
$users = ["Simon","Yohan","Arthur","Paul","Pierre","Marie","Virginie","Valentin","Laurent","Julien"];
print_r($users);

// Randomly select a nunmber of first name for testing

$userCount = rand(0, 4);

// * *"Soyez le premier à aimer cette publication"*,
$like = 1;
$post = 0+$like;

echo $post;

foreach ($users as $haveLiked => $post) {
    echo $haveLiked . " - " . $post . PHP_EOL;
}

//#Retourne le nombre de personnes qui ont aimés la publication
echo "Il y'a ". count($users). " " . "qui ont aimés la publication.";


// Function gernerate Sentence

function generateSentence($userCount, $users) {
    switch ($userCount) {
        
    }
}