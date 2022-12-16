<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json; charset=utf-8');

include("vendor/autoload.php");
if(!isset($_POST['api_key'])) die('Please send secret api with api_key.');

//if(!isset($_POST['model'])) die('Please provide the model information you will use, for example text-davinci-003');

if(!isset($_POST['prompt'])) die('Please send the prompt text.');

// Function to generate a response from GPT-3
function generateResponse($params) {
  // Use the completions endpoint to generate a response

  $sendParams = [
    'model' => $params['model'] ?? 'text-davinci-003', // Use the Davinci model
    'prompt' => $params['prompt'],
    'max_tokens' => (int) $params['max_tokens'] ?? 1500,
    'temperature' => (int) $params['temperature'] ?? 0.9,
    'top_p' => (isset($params['top_p'])) ? (int) $params['top_p'] : 1,
    'n' => (isset($params['n'])) ? (int) $params['n'] : 1,
    'presence_penalty' => (isset($params['presence_penalty'])) ? (float) $params['presence_penalty'] :  0.6,
    'frequency_penalty' => (isset($params['frequency_penalty'])) ? (float) $params['frequency_penalty'] :  0,
    'stream' => (isset($params['stream'])) ? (bool) $params['stream'] :  false,
    'logprobs' => (isset($params['logprobs'])) ? $params['logprobs'] : null,
    'stop' => (isset($params['stop'])) ? $params['stop'] : '\n'
  ];

  //var_dump($sendParams);
  
  $response = \Httpful\Request::post('https://api.openai.com/v1/completions')
    ->body(json_encode($sendParams))
    ->addHeader('Content-Type', 'application/json')
    ->addHeader('Authorization', 'Bearer ' . $params['api_key'])
    ->send();
    
  if(isset($response->body->error->message)) {
    $return = json_encode(['error'=>$response->body->error->message]);
  } else {
    $return = json_encode($response->body);

    if(isset($params['stream'])) {

      if($params['stream']) {
        $return = $response->body;
      }

    }
    
  }
    
  return $return;
}

// Function to handle user input and generate a response
function handleInput($input) {
  // Generate a response from GPT-3
  $response = generateResponse($input);

  // Log the response to the console
  echo $response . "\n";
}

handleInput($_POST);

