# RG Setup

Установщик для всех редакций веб-приложения RosGear. Выполняет пошаговую установку всех компонентов веб-приложения.

[![Latest Stable Version](https://img.shields.io/packagist/v/rosgear/rg-setup.svg)](https://packagist.org/packages/rosgear/rg-setup)
[![Total Downloads](https://img.shields.io/packagist/dt/rosgear/rg-setup.svg)](https://packagist.org/packages/rosgear/rg-setup)
[![Author](https://img.shields.io/badge/author-anton.tivonenko@gmail.com-blue.svg)](mailto:anton.tivonenko@gmail)
[![Source Code](https://img.shields.io/badge/source-rosgear/rg--setup-blue.svg)](https://github.com/rosgear/rg-setup)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/rosgear/rg-setup/blob/master/LICENSE)
![Component type: module](https://img.shields.io/badge/framework%20component-installer-green.svg)
![php 8.2+](https://img.shields.io/badge/php-min%208.2-red.svg)

## Установка

В проект каждой редакции веб-приложения RosGear добавлен установщик со своими настройками. 
Если ваш проект не имеет установщика, вы можете просто выполнить команду ниже:

```
$ composer require rosgear/rg-setup
```

или добавить в файл composer.json вашего проекта:
```
"require": {
	"rosgear/rg-setup": "*"
}
```

После установки, вам необходимо будет добавить следующие файлы:
- `/queries/tables.php`, таблицы используемые картой SQL запросов;
- `/queries/variables.php`, идентификаторы (переменные) запроса.

Эти файлы присутствуют в репозитории в качестве шаблонов, но не экспортируются.
