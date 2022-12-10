# Chat GPT PHP API 
A script that you can easily work on PHP using the ChatGPT API.

#Usage
First, get an API key from:
https://beta.openai.com/account/api-keys
Then update this line
```php
$apiKey = 'YOUR_API_KEY';
```

You can write the prompt text with the text parameter in the url line.
You can set how much the return value should be with ```max_token```.

#Demo

http://chatgpt.truncgil.com/?api_key=YOUR_API_KEY&text=Trun%C3%A7gil%20Teknoloji%20hakk%C4%B1nda%20bilgi

```json
{
  "id": "cmpl-6Loi2UDUvwDaNOhTko714twyWtFyM",
  "object": "text_completion",
  "created": 1670657834,
  "model": "text-davinci-003",
  "choices": [
    {
      "text": "\n\nTrunçgil Teknoloji, sayısal çözümler sağlayan bir teknoloji şirketidir. Şirket, sahip olduğu deneyim ve uzmanlıkla ürün ve hizmetler geliştirmektedir. Trunçgil Teknoloji, bulut bilişim, veri yönetimi, mobil çözümler, robotik, görüntü işleme, ölçeklenebilir kurumsal yazılımlar, ticari uygulamalar ve çoklu platformlar arasındaki her türlü alana hizmet sağlamaktadır. Bunların yanı sıra, Trunçgil Teknoloji, web sitesi ve uygulama geliştirme, makine öğrenimi ve tahmin modelleri, kurumsal ağ güvenliği, sanal gerçeklik, Artırılmış Gerçeklik ve nesnelerin interneti çözümleri sunmaktadır.",
      "index": 0,
      "logprobs": null,
      "finish_reason": "stop"
    }
  ],
  "usage": {
    "prompt_tokens": 14,
    "completion_tokens": 290,
    "total_tokens": 304
  }
}
```
