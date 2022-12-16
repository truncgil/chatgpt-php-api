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
api_key:YOUR_API_KEY
prompt:Can you give information about Trunçgil technology?
model:text-davinci-003
max_tokens:100
stream:0
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
