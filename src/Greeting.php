<?php

namespace AhmedHelalAhmed\LaravelGreeting;

use Illuminate\Support\Facades\Log;

/**
 * Class Greeting
 * @package AhmedHelalAhmed\LaravelGreeting
 * @author Ahmed Helal Ahmed
 */
class Greeting
{
    /**
     * @var bool
     * true => send the messages
     * false => stop sending messages
     */
    public static $status=true;

    /**
     * @var
     * to deal with input
     */
    public static $input;

    /**
     * @param null $input
     * @param bool $continue
     */
    public static function sayMessage($input=null, $continue=true)
    {
        if (self::$status) {
            self::setInput($input, $continue);
            self::handle();
        }
    }

    /**
     * used to write message to log file
     * and send it
     * @param null $input
     * @param bool $continue
     */
    public static function sayAndLog($input=null, $continue=true)
    {
        if (self::$status) {
            Log::debug($input);
            self::sayMessage($input, $continue);
        }
    }

    /**
     *
     * used to remove log content
     */
    public static function resetLog()
    {
        if (self::$status) {
            file_put_contents(storage_path('logs/laravel.log'), "\n\n\n");
        }
    }

    /**
     * used to stop functionality
     * and messages at certain points
     */
    public static function stop()
    {
        self::$status=false;
        return;
    }

    /**
     * used to continue functionality
     * and messages at certain points
     * after stop is called
     */
    public static function start()
    {
        self::$status=true;
        return;
    }

    /**
     * @param $message
     * @param $continue
     * Deal with empty messages
     * show the default message
     */
    private static function handleEmptyMessage($message, $continue)
    {
        if (!$continue) {
            dd($message);
            return;
        }
        dump($message);
        return;
    }

    /**
     * handle incoming messages
     */
    private static function handle()
    {
        // continue
        // true if continue means dump
        // false if dd means die and dump
        if (!is_null(self::$input['message'])) {
            self::handleEmptyMessage(self::$input['message'], self::$input['isContinue']);
            return ;
        }

        if (!self::$input['isContinue']) {
            dd(config('greeting.message'));
            return;
        }

        dump(config('greeting.message'));
        return;
    }

    /**
     * @param $input
     * @param $continue
     * set input values
     */
    private static function setInput($input, $continue)
    {
        self::$input=[
            'message'=>$input,
            'isContinue'=>$continue
        ];
        return;
    }
}
