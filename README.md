Taller SOLID - Kata String Calculator
====================================

http://www.cyliconvalley.es/2012/10/22/taller-de-solid/

El enfoque del taller es sencillo pero a la vez complejo:

* Explicar los principios SOLID
* Aplicar estos principios a una Kata de programamción
* La kata elegida es String Calculator, un clásico con mucha miga.

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

$ composer(.phar) create-project isidromerayo/taller-solid my_project_name

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

Es necesario instalar una gema de ruby, guard-phpunit
Por ahora solo funciona con instalación de sistema de phpunit :( aunque hay un PR para poder personalizar.
 https://github.com/Maher4Ever/guard-phpunit/pull/7

$ gem install guard guard-phpunit

$ gem install --version '~> 0.8.8' rb-inotify

Para lanzar desde el directorio raiz del proyecto

$ guard

Recomiendo leer el siguiente artículo para más detalles http://erichogue.ca/2012/09/php/continuous-testing-in-php-with-guard/

