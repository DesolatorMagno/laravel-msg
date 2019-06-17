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

### Funciones

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