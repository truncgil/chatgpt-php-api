# Chat GPT PHP API 
A script that you can easily work on PHP using the ChatGPT API.

# Usage
First, get an API key from:
https://beta.openai.com/account/api-keys
Then update this line
```php
$apiKey = 'YOUR_API_KEY';
```

You can write the prompt text with the text parameter in the url line.
You can set how much the return value should be with ```max_token```.

# Our Restful API application that you can use quickly
Let's learn about Trunçgil Technology.
http://chatgpt.truncgil.com

Postman Sandbox
https://www.postman.com/truncgil/workspace/b8c54fde-a93a-4d82-9f90-7dab10babde4/request/18648149-6f487c13-9cf1-40cc-ad7b-2a0f2d9f7222

```
api_key:YOUR_API_KEY | required
prompt:Can you give information about Trunçgil technology? | required
```

```
  ["model"]=>
  string(16) "text-davinci-003"
  ["prompt"]=>
  string(52) "Can you give information about Trunçgil technology?"
  ["max_tokens"]=>
  int(100)
  ["temperature"]=>
  int(0)
  ["top_p"]=>
  int(1)
  ["n"]=>
  int(1)
  ["presence_penalty"]=>
  float(0.6)
  ["frequency_penalty"]=>
  int(0)
  ["stream"]=>
  bool(false)
  ["logprobs"]=>
  NULL
  ["stop"]=>
  string(4) "null"
```
```json
{
    "id": "cmpl-6Nwh4Ucez4CcFsRZ2vEEymDD7wghs",
    "object": "text_completion",
    "created": 1671165182,
    "model": "text-davinci-003",
    "choices": [
        {
            "text": "\n\nTrunçgil technology is a patented, proprietary technology developed by Trunçgil Technologies, Inc. It is a system of advanced algorithms and software that enables the analysis of large amounts of data in real-time. The technology is used to identify patterns and trends in data, allowing for more accurate predictions and decisions. It can be used in a variety of industries, including finance, healthcare, retail, and manufacturing. Trunçgil technology is designed to help organizations make better decisions faster",
            "index": 0,
            "logprobs": null,
            "finish_reason": "length"
        }
    ],
    "usage": {
        "prompt_tokens": 11,
        "completion_tokens": 100,
        "total_tokens": 111
    }
}
```
