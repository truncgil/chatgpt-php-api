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

# Demo
Let's learn about Trunçgil Technology.
http://chatgpt.truncgil.com

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
    "id": "cmpl-6NwY2JG6D6ro7FenbjEAqHg6hYMhH",
    "object": "text_completion",
    "created": 1671164622,
    "model": "text-davinci-003",
    "choices": [
        {
            "text": "iz?\n\nTrunçgil Teknoloji, özellikle kablosuz ağlar ve haberleşme alanında çalışan bir teknoloji şirketidir. Şirket, kablosuz ağların tasarımı, geliştirilmesi ve uygulanması için çözümler sun",
            "index": 0,
            "logprobs": null,
            "finish_reason": "length"
        }
    ],
    "usage": {
        "prompt_tokens": 20,
        "completion_tokens": 100,
        "total_tokens": 120
    }
}
```
