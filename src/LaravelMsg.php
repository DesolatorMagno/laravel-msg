<?php
namespace DesolatorMagno\LaravelMsg;

class Message
{

    static $typeFieldName    = "message_type";
    static $messageFieldName = "message";

    /**
     * Envia un mensaje de exito al front.
     *
     * @param string $message
     * @return void
     */
    public static function success(string $message = null)
    {
        return self::message($message, 'success');
    }

    /**
     * Envia un mensaje informativo al front
     *
     * @param string $message
     * @return void
     */
    public static function info(string $message = null)
    {
        return self::message($message, 'info');
    }

    /**
     * Envia un mensaje de Advertencia al front
     *
     * @param string $message
     * @return void
     */
    public static function warning(string $message = null)
    {
        return self::message($message, 'warning');
    }

    /**
     * Envia un mensaje de error al front.
     *
     * @param string $message
     * @return void
     */
    public static function error(string $message = null)
    {
        return self::message($message, 'error');
    }

    /**
     * Envia una pregunta al front (sin opcion de respuesta)
     *
     * @param string $message
     * @return void
     */
    public static function question(string $message = null)
    {
        return self::message($message, 'question');
    }

    /**
     * Funcion utilizada principalmente por las demas funciones.
     *
     * A pesar de que la utilizacion principal es para servir de ayuda a las demas funciones y no de utilizarse
     * sola, es posible utilizarla como esta para pasar algun tipo distinto de mensaje.
     *
     * @param string $message
     * @param [type] $type
     * @return void
     */
    public static function message(string $message = null, $type = null)
    {
        if ($message && $type) {
            \Session::flash(self::$typeFieldName, $type);
            \Session::flash(self::$messageFieldName, $message);
        }
    }
}
