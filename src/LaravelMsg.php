<?php
namespace DesolatorMagno\LaravelMsg;

class Message
{

    static $typeFieldName    = "message_type";
    static $messageFieldName = "message";
    static $titleFieldName   = "title";

    /**
     * Envia un mensaje de exito al front.
     *
     * @param string $message
     * @param string $title
     * @return void
     */
    public static function success(string $message = null, string $title = null)
    {
        return self::message($message, $title, 'success');
    }

    /**
     * Envia un mensaje informativo al front
     *
     * @param string $message
     * @param string $title
     * @return void
     */
    public static function info(string $message = null, string $title = null)
    {
        return self::message($message, $title, 'info');
    }

    /**
     * Envia un mensaje de Advertencia al front
     *
     * @param string $message
     * @param string $title
     * @return void
     */
    public static function warning(string $message = null, string $title = null)
    {
        return self::message($message, $title, 'warning');
    }

    /**
     * Envia un mensaje de error al front.
     *
     * @param string $message
     * @param string $title
     * @return void
     */
    public static function error(string $message = null, string $title = null)
    {
        return self::message($message, $title, 'error');
    }

    /**
     * Envia una pregunta al front (sin opcion de respuesta)
     *
     * @param string $message
     * @param string $title
     * @return void
     */
    public static function question(string $message = null, string $title = null)
    {
        return self::message($message, $title, 'question');
    }

    /**
     * Funcion utilizada principalmente por las demas funciones.
     *
     * A pesar de que la utilizacion principal es para servir de ayuda a las demas funciones y no de utilizarse
     * sola, es posible utilizarla como esta para pasar algun tipo distinto de mensaje.
     *
     * @param string $message
     * @param string $title
     * @param string $type
     * @return void
     */
    public static function message(string $message = null, string $title = null, string $type = 'success')
    {
        \Session::flash(self::$typeFieldName, $type);
        if (isset($title)) {
            \Session::flash(self::$titleFieldName, $title);
            \Session::flash(self::$messageFieldName, $message);
        } else {
            \Session::flash(self::$titleFieldName, $message);
        }
    }
}
