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
     * @param string $title
     * @param string $message
     * @return void
     */
    public static function success(string $title = null, string $message = null)
    {
        return self::message($title, $message, 'success');
    }

    /**
     * Envia un mensaje informativo al front
     *
     * @param string $title
     * @param string $message
     * @return void
     */
    public static function info(string $title = null, string $message = null)
    {
        return self::message($title, $message, 'info');
    }

    /**
     * Envia un mensaje de Advertencia al front
     *
     * @param string $title
     * @param string $message
     * @return void
     */
    public static function warning(string $title = null, string $message = null)
    {
        return self::message($title, $message, 'warning');
    }

    /**
     * Envia un mensaje de error al front.
     *
     * @param string $title
     * @param string $message
     * @return void
     */
    public static function error(string $title = null, string $message = null)
    {
        return self::message($title, $message, 'error');
    }

    /**
     * Envia una pregunta al front (sin opcion de respuesta)
     *
     * @param string $title
     * @param string $message
     * @return void
     */
    public static function question(string $title = null, string $message = null)
    {
        return self::message($title, $message, 'question');
    }

    /**
     * Funcion utilizada principalmente por las demas funciones.
     *
     * A pesar de que la utilizacion principal es para servir de ayuda a las demas funciones y no de utilizarse
     * sola, es posible utilizarla como esta para pasar algun tipo distinto de mensaje.
     *
     * @param string $title
     * @param string $message
     * @param string $type
     * @return void
     */
    public static function message(string $title = null, string $message = null, string $type = 'success')
    {
        \Session::flash(self::$typeFieldName, $type);
        if (isset($message)) {
            \Session::flash(self::$titleFieldName, $title);
            \Session::flash(self::$messageFieldName, $message);
        } else {
            \Session::flash(self::$titleFieldName, $title);
        }
    }
}
