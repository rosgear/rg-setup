<?php
/**
 * Файл конфигурации установщика веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'language' => 'en',
    'languages' => [
        /*
        * Русская локализация.
        */
        'ru' => [
            'tag'       => 'ru-RU',
            'code'      => 570643,
            'common'    => 'Russian',
            'name'      => 'Русский язык',
            'shortName' => 'Русский',
            'slug'      => 'ru',
            'locale'    => 'ru_RU',
            'timeZone'  => 'Europe/Moscow'
        ],

        /*
        * Английская (британская) локализация.
        */
        'en' => [
            'tag'       => 'en-GB',
            'code'      => 45826,
            'common'    => 'English',
            'name'      => 'English language',
            'shortName' => 'English',
            'slug'      => 'en',
            'locale'    => 'en_GB',
            'timeZone'  => 'Europe/London'
        ]
    ],
    // папки в которых находятся компоненты для установки
    'searchFolders' => ['rg'],
    // возможноть перехода на сайт после установки
    'canGotoSite' => false
];
