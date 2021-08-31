## HttpfulWrapper

[![Latest Version](https://img.shields.io/github/v/release/ryodevz/httpfulwrapper.svg?style=flat-square)](https://github.com/ryodevz/httpfulwrapper/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/ryodevz/httpfulwrapper.svg?style=flat-square)](https://packagist.org/packages/ryodevz/httpfulwrapper)

## Features

Get request
Post request
Put request

## Installing Httpfulwrapper

The recommended way to install httpfulwrapper is through [Composer](https://getcomposer.org/).

```bash
composer require ryodevz/httpfulwrapper
```

### Get

```php
use Ryodevz\HttpfulWrapper\Http;

require_once 'vendor/autoload.php';

// Make a request
$request = Http::get('https://ytryo.my.id/api/animeku/search?q=naruto');

// Send
$response = $request->send();

// Body
var_dump($response->body);
```

### Post

```php
use Ryodevz\HttpfulWrapper\Http;
use Ryodevz\HttpfulWrapper\Mime;

require_once 'vendor/autoload.php';

$response = Http::post('https://example.com/login', [
    'email' => 'zulzariozairi@gmail.com',
    'password' => 'secret'
], Mime::FORM)->send();

var_dump($response->body);
```

### Mimes

| Mime class     | Type                              |
| -------------- | --------------------------------- |
| `Mime::JSON`   | application/json                  |
| `Mime::XML`    | application/xml                   |
| `Mime::XHTML`  | application/html+xml              |
| `Mime::FORM`   | application/x-www-form-urlencoded |
| `Mime::UPLOAD` | multipart/form-data               |
| `Mime::PLAIN`  | text/plain                        |
| `Mime::JS`     | text/javascript                   |
| `Mime::HTML`   | text/html                         |
| `Mime::YAML`   | application/x-yaml                |
| `Mime::CSV`    | text/csv                          |
