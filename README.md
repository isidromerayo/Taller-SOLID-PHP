Katayuno Octubre 2012 - Kata Tennis
==================================

http://agilecyl.org/2012/10/11/katayuno-27-de-octubre-valladolid/
http://www.solveet.com/exercises/Kata-Tennis/13
http://codingdojo.org/cgi-bin/wiki.pl?KataTennis

Instalación
===========

composer
--------

Esta configurado para utilizar composer, si no lo tienes instalado sigue
las instrucciones de la web (http://getcomposer.org/doc/00-intro.md#installation).

Si vas a utilizar composer en tús sistemas, recomiendo la instalación global,
http://getcomposer.org/doc/00-intro.md#globally).

Usa packagist para distribuir tus fuentes PHP http://packagist.org/, así simplemente
necesitas un comando :)

$ composer(.phar) create-project isidromerayo/kata-tennis my_project_name

Git
---

Antes de empezar, es recomendable borrar el directorio ".git" así son tendrás tus commits.

$ rm -rf .git

Actualizar paquetes
===================

$ composer(.phar) update

¿Fácil no?

Uso
===

Crear los ejemplos o test en el directorio "tests".
Crear tú código fuente en el directorio  "src".

$ vendor/bin/phpunit tests/

Si quiere generar la cobertura de código (needs install xdebug extension)

$ vendor/bin/phpunit

Si quieres utilizar ant (and only phpunit task)

$ ant phpunit

Si utilizas Netbeans PHP, necesitas configurar:

* Project properties -> sources -> Test Folder: tests (Alt + F6 to run)
* Project properties -> PHPUnit -> use bootstrap: XXX/tests/TestHelper.php

Autotest
========

Es necesario instalar una gema de ruby, watchr

$ sudo gem install watchr

Para lanzar 

$ watchr ./autotest_watchr.rb

Travis-CI
=========

Status build: [![Build Status](https://secure.travis-ci.org/isidromerayo/kata-tennis.png)](http://travis-ci.org/isidromerayo/kata-tennis)
