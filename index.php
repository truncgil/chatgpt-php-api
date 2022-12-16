<?php
include("vendor/autoload.php");
// Replace with your own API key
$apiKey = $_GET['api_key'];
$model = $_GET['model'];

// Function to generate a response from GPT-3
function generateResponse($prompt) {
    global $apiKey;
  // Use the completions endpoint to generate a response
  $response = \Httpful\Request::post('https://api.openai.com/v1/completions')
    ->body(json_encode(array(
        'model' => $model, // Use the Davinci model
        'prompt' => $prompt,
        'max_tokens' => 1500,
        'temperature' => 0.9,
        'top_p' => 1,
        'n' => 1,
        'presence_penalty' => 0.6,
        'frequency_penalty' => 0,
        'stream' => false,
        'logprobs' => null,
        'stop' => '\n'
      )))
    ->addHeader('Content-Type', 'application/json')
    ->addHeader('Authorization', 'Bearer ' . $apiKey)
    ->send();
  // print_r($response);
  return $response->body->choices[0]->text;
}

// Function to handle user input and generate a response
function handleInput($input) {
  // Generate a response from GPT-3
  $response = generateResponse($input);

  // Log the response to the console
  echo $response . "\n";
}

handleInput($_GET['text']);

