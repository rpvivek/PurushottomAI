<?php
$user_input = $_POST['user_input'];
$openai_api_key = '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';

$data = [
    'messages' => [
        ['role' => 'system', 'content' => 'You are a helpful assistant.'],
        ['role' => 'user', 'content' => $user_input],
    ],
];

$headers = [
    'Authorization: Bearer ' . $openai_api_key,
    'Content-Type: application/json',
];

$ch = curl_init('https://api.openai.com/v1/engines/davinci-codex/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

echo $result['choices'][0]['message']['content'];
?>
