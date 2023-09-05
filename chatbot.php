<?php
$responses = [
    "hello" => "Hello! How can I assist you today?",
    "how are you" => "I'm just a bot, but thanks for asking!",
    "bye" => "Goodbye! Have a great day!",
    // Add more responses here
];

function getResponse($input, $responses) {
    $input = strtolower($input); // Convert input to lowercase for case-insensitivity
    foreach ($responses as $key => $value) {
        if (strpos($input, $key) !== false) {
            return $value;
        }
    }
    return "I'm sorry, I don't understand. Please ask another question.";
}

// Chat Loop
while (true) {
    echo "User: ";
    $userInput = readline(); // Read user input from the console
    if (strtolower($userInput) === 'exit') {
        echo "Purushottam: Goodbye!";
        break; // Exit the loop if the user types 'exit'
    }
    $response = getResponse($userInput, $responses);
    echo "Purushottam: " . $response . PHP_EOL;
}
