# Instalación

Via Composer

``` bash
$ composer require desolatormagno/laravel-msg
```

Publicar

``` bash
$ php artisan vendor:publish --tag=laravel-msg
```

# Utilización

## Back

``` php
use DesolatorMagno\LaravelMsg\Message as Msg;
.
.
.
Msg::success('Bienvenido usuario');
```

Incluir el archivo de mensaje al inicio del cotrolador o archivo en el que se desea utilizar luego utilizar la clase para llamar dinamicamente a una de las funciones que provee el paquete segun el estilo visual que se desee mostrar, pasando por parametro el mensaje a mostrar.

### Metodos

- success
- info
- question
- warning
- error

## Front

``` php
@include('laravel-msg.message')
```
Desde el front solo es necesario incluir el archivo **message.php** el cual esta ubicado en **views/laravel-msg**, para que se muestre el mensaje satisfasctoriamente.

## Que hace?

Paquete muy sencillo el cual utiliza la libreria de SweetAlert2 mas una clase de php para mostrar mensajes informativos al usuario de diferentes status, tanto el mensaje como el estilo del mensaje es configurable, pero todas las demas configuraciones son hardcoded para todos los mensajes.


Como se ve en una web real.

![Ejemplo 01](ejemplo-01-min.png)

Ejemplo de un mensaje de accion satisfactoria

![Ejemplo success](ejemplo-success-min.png)

Ejemplo de un mensaje de error o mensaje de accion destructiva.

![Ejemplo error](ejemplo-error-min.png)
