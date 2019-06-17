# Instalación

Instalar

`composer require desolatormagno/laravel-msg`

Publicar

`php artisan vendor:publish --tag=laravel-msg`

# Utilización

## Back

Incluir el archivo de mensaje al inicio del cotrolador o archivo en el que se desea utilizar de la siguiente manera.

`use DesolatorMagno\LaravelMsg\Message as Msg;`

Luego utilizar la clase para llamar dinamicamente a una de las funciones que provee el paquete segun el estilo visual que se desee mostrar, pasando por parametro el mensaje a mostrar.

`Msg::success('Bienvenido usuario');`

### Funciones

- success
- info
- question
- warning
- error

## Front

Desde el front solo es necesario incluir el archivo **message.php** el cual esta ubicado en **views/laravel-msg**, para que se muestre el mensaje satisfasctoriamente.