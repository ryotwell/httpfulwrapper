## HttpfulWrapper
[![Latest Version](https://img.shields.io/github/v/release/ryodevz/httpfulwrapper.svg?style=flat-square)](https://github.com/ryodevz/httpfulwrapper/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/ryodevz/httpfulwrapper.svg?style=flat-square)](https://packagist.org/packages/ryodevz/httpfulwrapper)

## Features

- Get request
- Post request
- Put request

## Installing httpfulwrapper

The recommended way to install httpfulwrapper is through [Composer](https://getcomposer.org/).
```bash
> composer require ryodevz/httpfulwrapper
```

### Example usage

```php
$Http = new HttpfulWrapper;

$res = $Http->get('https://ytryo.my.id/api/animeku/search?q=naruto')->send();

var_dump($res->body);
```