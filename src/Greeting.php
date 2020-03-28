<?php

namespace AhmedHelalAhmed\LaravelGreeting;

/**
 * Class Greeting
 * @package AhmedHelalAhmed\LaravelGreeting
 * @author Ahmed Helal Ahmed
 */
class Greeting
{
    /**
     * @param null $message
     * say a message
     */
    public static function sayMessage($message=null)
    {
        if (!is_null($message)) {
            dd($message);
        }

        dd(config('greeting.message'));
    }
}
