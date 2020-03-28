# Laravel Greeting

This package allows die and dump in one input. If there is no input, it will die and dump a default greeting message which is "Hello world". You can change the default message by setting HELLO_WORLD_MESSAGE in .env file.

## Basic usage

### Die and dump simple message:

```php
use AhmedHelalAhmed\LaravelGreeting\Greeting;

Greeting::sayMessage();
// It will die and dump hello world
```

### Die and dump advanced message:

```php
use AhmedHelalAhmed\LaravelGreeting\Greeting;

$x = 10;

$input = [
    'message1' => 'test',
    'x' => $x,
    'request' => request()
];

Greeting::sayMessage($input);

// it will show input array like that
/*
    array:3 [▼
        "message1" => "test"
        "x" => 10
        "request" => Illuminate\Http\Request {
        }
    ]
*/
```



## Installation

You can install the package via composer:

```bash
composer require ahmedhelalahmed/laravel-greeting
```


## Contributing

Thank you for considering contributing to ahmedhelalahmed/laravel-greeting .



### Security

If you discover a security vulnerability within ahmedhelalahmed/laravel-greeting , please send an e-mail to Taylor Otwell via ahmed.helal.online@gmail.com. All security vulnerabilities will be promptly addressed.

## Credits

- [Ahmed Helal Ahmed](https://github.com/ahmedhelalahmed)

## License

ahmedhelalahmed/laravel-greeting is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

