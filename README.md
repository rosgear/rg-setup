[Русский](#русский) | [English](#english)

---

[![Latest Stable Version](https://img.shields.io/packagist/v/rosgear/rg-setup.svg)](https://packagist.org/packages/rosgear/rg-setup)
[![Total Downloads](https://img.shields.io/packagist/dt/rosgear/rg-setup.svg)](https://packagist.org/packages/rosgear/rg-setup)
[![Author](https://img.shields.io/badge/author-anton.tivonenko@gmail.com-blue.svg)](mailto:anton.tivonenko@gmail)
[![Source Code](https://img.shields.io/badge/source-rosgear/rg--setup-blue.svg)](https://github.com/rosgear/rg-setup)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/rosgear/rg-setup/blob/main/LICENSE.md)
![php 8.2+](https://img.shields.io/badge/php-min%208.2-red.svg)

<a name="русский"></a>
## Установщик для всех редакций веб-приложения RosGear

Установщик выполняет пошаговую установку всех компонентов веб‑приложения RosGear — он автоматически проверяет системные требования, последовательно разворачивает необходимые модули (включая серверную часть, базу данных и клиентский интерфейс).

### Установка

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

<a name="english"></a>
## Installer for all editions of the RosGear web application 

The installer performs a step-by-step installation of all components of the RosGear web application—it automatically checks system requirements and sequentially deploys the necessary modules (including the server part, database, and client interface).

### Installation

Each edition of the RosGear web application includes an installer with its own settings.
If your project doesn't have an installer, you can simply run the command below:

```
$ composer require rosgear/rg-setup
```

or add to your project's composer.json file:
```
"require": {
	"rosgear/rg-setup": "*"
}
```

After installation, you will need to add the following files:
- `/queries/tables.php`, tables used by the SQL query map;
- `/queries/variables.php`, query identifiers (variables).

These files are present in the repository as templates, but are not exported.