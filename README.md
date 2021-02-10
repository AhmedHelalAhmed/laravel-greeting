# Laravel Greeting

This package allows die and dump in one input. If there is no input, it will die and dump a default greeting message which is "Hello world".
You can change the default message by setting HELLO_WORLD_MESSAGE in .env file also you can log messages to log and clear log file.

## Basic usage

### Dump simple message:

```php
use AhmedHelalAhmed\LaravelGreeting\Greeting;

// It will dump hello world as no input given and default message not changed
Greeting::sayMessage();
```

### Dump and die simple message:

```php
use AhmedHelalAhmed\LaravelGreeting\Greeting;

// It will dump hello world and stop execution as continue set with false
Greeting::sayMessage('hello world',false);
```

### Stop and start sending messages:

```php
use AhmedHelalAhmed\LaravelGreeting\Greeting;

$x = 10;

Greeting::sayMessage([
                         'message1' => 'test',
                         'x' => $x,
                         'request' => request()
                     ]);
// it will show input array like that
/*
    array:3 [▼
        "message1" => "test"
        "x" => 10
        "request" => Illuminate\Http\Request {
        }
    ]
*/

// stop sending messages
Greeting::stop();

// this has no effect at all
Greeting::sayMessage();

// this has no effect as Greeting messages stopped
Greeting::sayMessage("Welcome",false);

// continue sending messages
Greeting::start();

// this will dump the message and die
Greeting::sayMessage("Hello world",false);
```

### Sending messages and log into storage file:

```php
use AhmedHelalAhmed\LaravelGreeting\Greeting;

// this will dump welcome message and log it to storage file
Greeting::sayAndLog('welcome');

// this will log welcome to storage file and dump welcome message then stop execution
Greeting::sayAndLog('welcome',false);
```

### Clear log file:

```php
use AhmedHelalAhmed\LaravelGreeting\Greeting;

// this will clear the content of log file
Greeting::resetLog();

// you can install
// https://github.com/rap2hpoutre/laravel-log-viewer
// to view logs
```

## Installation

You can install the package via composer:

```bash
composer require --dev ahmedhelalahmed/laravel-greeting
```

Then publish the configurations:

```bash
php artisan vendor:publish --provider="AhmedHelalAhmed\LaravelGreeting\LaravelGreetingServiceProvider"
```

## Contributing

Thank you for considering contributing to ahmedhelalahmed/laravel-greeting .

### Security

If you discover a security vulnerability within ahmedhelalahmed/laravel-greeting , please send an e-mail to Ahmed Helal via ahmed.helal.online@gmail.com. All security vulnerabilities will be promptly addressed.

## Credits

- [Ahmed Helal Ahmed](https://github.com/ahmedhelalahmed)

## License

ahmedhelalahmed/laravel-greeting is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
