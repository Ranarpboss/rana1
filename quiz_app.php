<?php

$questions = [

    ['question' => 'What is 2 + 2?', 'correct' =>'4'],

    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

    ['question' => 'Who wrote "Hamlet"?',
    'correct' => 'Shakespeare'],

];

$answers = [];
foreach($questions as $index=>$question){
    echo ($index+1) . ". " . $question['question'] . "\n";
    $answers[]= trim(readline("Your answer:"));
} 

//Evaluate Function
function eveluateQuiz(array $questions, array $answers): int{
    $score = 0;
    foreach($questions as $index => $question){
        if($answers[$index] === $question['correct']){
            $score++;
        }
    }
    return $score;
}

// Calculate Score
$score = eveluateQuiz($questions, $answers);

echo "\n You scored $score out of " . count($questions) . ".\n";

if($score === count($questions)){
    echo "Excellent job! \n";
}elseif($score >1){
    echo "Good Effort! \n";
}else{
    echo "Better luck next time! \n";
}

//second project

$contacts = [];

//Add Contact

function addContact(array & $contacts, string $name, string $email, string $phone): void
{
    $contacts[]= ['name' => $name, 'email' => $email, 'phone' => $phone];
}

//Display Contact

function displayContacts(array $contacts): void {
    if(empty($contacts)){
        echo "No contacts available. \n";
    }else{
        foreach($contacts as $contact){
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
        }
    }
} 

while(true){
    echo "\n Contact Management Menu\n";
    echo "1. Add Contact\n 2.View Contact\n 3. Exits\n";

    $choice = (int)readline("Choose an option: ");

    if($choice === 1){
        $name = readline ("Enter name: ");
        $email = readline ("Enter email: ");
        $phone = readline ("Enter phone: ");
        addContact($contact, $name, $email, $phone);
        echo "$name added successfuiil.\n";
    }elseif($choice === 2){
        displayContacts($contact);
    }elseif($choice === 3){
        echo "Exiting...\n";
    }else{
        echo "Invalid choice. Please try again.\n";
    }
}

