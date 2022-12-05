<?php
namespace DesolatorMagno\LaravelMsg;

use Session;

class LaravelMsg
{

    static $typeFieldName    = "message_type";
    static $messageFieldName = "message";
    static $titleFieldName   = "title";

    /**
     * Send a successful msg to the front.
     *
     * @param string|null $message
     * @param string|null $title
     * @return void
     */
    public static function success(string $message = null, string $title = null)
    {
        self::message($message, $title);
    }

    /**
     * Send an info msg to the front
     *
     * @param string|null $message
     * @param string|null $title
     * @return void
     */
    public static function info(string $message = null, string $title = null)
    {
        self::message($message, $title, 'info');
    }

    /**
     * Send a warning message to the front.
     *
     * @param string|null $message
     * @param string|null $title
     * @return void
     */
    public static function warning(string $message = null, string $title = null)
    {
        self::message($message, $title, 'warning');
    }

    /**
     * Send an error msg to the front.
     *
     * @param string|null $message
     * @param string|null $title
     * @return void
     */
    public static function error(string $message = null, string $title = null)
    {
        self::message($message, $title, 'error');
    }

    /**
     * Send a question type msg to the front (with no option for answer)
     *
     * @param string|null $message
     * @param string|null $title
     * @return void
     */
    public static function question(string $message = null, string $title = null)
    {
        self::message($message, $title, 'question');
    }

    /**
     * Main method that do the hard work.
     *
     * Even if the main purpose for these method is to help the other (and simplify) it can also be uses as it is
     * to send some kind of personalized type of message.
     *
     * @param string|null $message
     * @param string|null $title
     * @param string $type
     * @return void
     */
    public static function message(string $message = null, string $title = null, string $type = 'success')
    {
        Session::flash(self::$typeFieldName, $type);
        if (isset($title)) {
            Session::flash(self::$titleFieldName, $title);
            Session::flash(self::$messageFieldName, $message);
        } else {
            Session::flash(self::$titleFieldName, $message);
        }
    }
}