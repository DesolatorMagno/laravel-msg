# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).


## [2.0.0] - 2020-02-25
### Added
- Changelog, para llevar un registro mas ordenador.
- Nueva vista **msg.blade.php**, igual en logica que la anterior pero sin push a script y que sirve para simplificar el proceso de utilización del paquete.
-
### Changed
- Invertido el orden de los parámetros, ahora es **$mensaje**, **$titulo**.
- El service provider ahora carga vistas desde la carpeta **view** del paquete, lo que permiter trabajar con las vistas mas fácilmente con este tipo de nomenclatura **laravel-msg::{nombreVista}**.
- Readme actualizado.

## [1.0.0] - 2019-07-05
