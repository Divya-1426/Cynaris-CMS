# CORS for PHP (using the Symfony HttpFoundation)

[![Unit Tests]()]()
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-Level%209-blue)]()
[![Code Coverage](https://img.shields.io/badge/CodeCoverage-100%25-brightgreen)](/workflows/run-coverage.yml)
[![Packagist License]()]()
[![Latest Stable Version](https://poser.pugx.org/fruitcake/php-cors/version.png)](https://packagist.org/packages/fruitcake/php-cors)
[![Total Downloads](https://poser.pugx.org/fruitcake/php-cors/d/total.png)](https://packagist.org/packages/fruitcake/php-cors)
[![Fruitcake](https://img.shields.io/badge/Powered%20By-Fruitcake-b2bc35.svg)](https://fruitcake.nl/)

Library and middleware enabling cross-origin resource sharing for your
http-{foundation,kernel} using application. It attempts to implement the
[W3C Recommendation] for cross-origin resource sharing.

[W3C Recommendation]: http://www.w3.org/TR/cors/

> Note: This is a standalone fork of  and is compatible with the options for CorsService.
## Installation

Require `fruitcake/php-cors` using composer.

## Usage

This package can be used as a library. You can use it in your framework using:

 - [Stack middleware](http://stackphp.com/): 
 - [Laravel](https://laravel.com): 
 

### Options

| Option                 | Description                                                | Default value |
|------------------------|------------------------------------------------------------|---------------|
| allowedMethods         | Matches the request method.                                | `[]`          |
| allowedOrigins         | Matches the request origin.                                | `[]`          |
| allowedOriginsPatterns | Matches the request origin with `preg_match`.              | `[]`          |
| allowedHeaders         | Sets the Access-Control-Allow-Headers response header.     | `[]`          |
| exposedHeaders         | Sets the Access-Control-Expose-Headers response header.    | `[]`          |
| maxAge                 | Sets the Access-Control-Max-Age response header.           | `0`           |
| supportsCredentials    | Sets the Access-Control-Allow-Credentials header.          | `false`       |

The _allowedMethods_ and _allowedHeaders_ options are case-insensitive.

You don't need to provide both _allowedOrigins_ and _allowedOriginsPatterns_. If one of the strings passed matches, it is considered a valid origin. A wildcard in allowedOrigins will be converted to a pattern.

If `['*']` is provided to _allowedMethods_, _allowedOrigins_ or _allowedHeaders_ all methods / origins / headers are allowed.

> Note: Allowing a single static origin will improve cacheability.

### Example: using the library

```php
<?php

use Fruitcake\Cors\CorsService;

$cors = new CorsService([
    'allowedHeaders'         => ['x-allowed-header', 'x-other-allowed-header'],
    'allowedMethods'         => ['DELETE', 'GET', 'POST', 'PUT'],
    'allowedOrigins'         => ['http://localhost', ''],
    'allowedOriginsPatterns' => ['/localhost:\d/'],
    'exposedHeaders'         => ['Content-Encoding'],
    'maxAge'                 => 0,
    'supportsCredentials'    => false,
]);

$cors->addActualRequestHeaders(Response $response, $origin);
$cors->handlePreflightRequest(Request $request);
$cors->isActualRequestAllowed(Request $request);
$cors->isCorsRequest(Request $request);
$cors->isPreflightRequest(Request $request);
```

## License

Released under the MIT License, see [LICENSE](LICENSE).

> This package is split-off from  and developed as stand-alone library since 2022
