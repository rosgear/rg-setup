<?php
/**
 * Файл конфигурации установщика веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

// code: <language(gost7_75),country(gost7_67)>
return [
    'language' => 'en',
    'languages' => [
       /** 
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

       /**
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
        ],

       /**
        * Белорусская локализация.
        */
        'be' => [
            'tag'       => 'be-BY',
            'code'      => 90112,
            'common'    => 'Belarusian',
            'name'      => 'Беларуская мова',
            'shortName' => 'Беларускі',
            'slug'      => 'be',
            'locale'    => 'be_By',
            'timeZone'  => 'Europe/Minsk'
        ],

       /**
        * Казахская локализация.
        */
        'kk' => [
            'tag'       => 'kk-KZ',
            'code'      => 255398,
            'common'    => 'Kazakh',
            'name'      => 'Қазақ тілі',
            'shortName' => 'Қазақ',
            'slug'      => 'kk',
            'locale'    => 'kk_KZ',
            'timeZone'  => 'Asia/Almaty'
        ],

       /**
        * Испанская локализация.
        */
        'es' => [
            'tag'       => 'es-ES',
            'code'      => 230724,
            'common'    => 'Spanish',
            'name'      => 'Español',
            'shortName' => 'Español',
            'slug'      => 'es',
            'locale'    => 'es_ES',
            'timeZone'  => 'Europe/Madrid'
        ],

       /**
        * Французская локализация.
        */
        'fr' => [
            'tag'       => 'fr-FR',
            'code'      => 745250,
            'common'    => 'French',
            'name'      => 'Langue française',
            'shortName' => 'Français',
            'slug'      => 'fr',
            'locale'    => 'fr_FR',
            'timeZone'  => 'Europe/Paris'
        ],

       /**
        * Немецкая локализация.
        */
        'de' => [
            'tag'       => 'de-DE',
            'code'      => 481276,
            'common'    => 'German',
            'name'      => 'Deutsche sprache',
            'shortName' => 'Deutsch',
            'slug'      => 'de',
            'locale'    => 'de_DE',
            'timeZone'  => 'Europe/Berlin'
        ],

       /**
        * Китайская (традиционная) локализация.
        */
        'zh' => [
            'tag'       => 'zh-CN',
            'code'      => 315156,
            'common'    => 'Chinese',
            'name'      => '中國人',
            'shortName' => '中國人',
            'slug'      => 'zh',
            'locale'    => 'zh_CN',
            'timeZone'  => 'Asia/Shanghai'
        ],

       /**
        * Индийская (хинди) локализация.
        */
        'hi' => [
            'tag'       => 'hi-IN',
            'code'      => 770356,
            'common'    => 'Hindi',
            'name'      => 'हिंदी',
            'shortName' => 'हिंदी',
            'slug'      => 'hi',
            'locale'    => 'hi_IN',
            'timeZone'  => 'Asia/Kolkata'
        ],

       /**
        * Итальянская локализация.
        */
        'it' => [
            'tag'       => 'it-IT',
            'code'      => 235380,
            'common'    => 'Italian',
            'name'      => 'Italiano',
            'shortName' => 'Italiano',
            'slug'      => 'it',
            'locale'    => 'it_IT',
            'timeZone'  => 'Europe/Rome'
        ],

       /**
        * Турецкая локализация.
        */
        'tr' => [
            'tag'       => 'tr-TR',
            'code'      => 693792,
            'common'    => 'Turkish',
            'name'      => 'Türkçe',
            'shortName' => 'Türkçe',
            'slug'      => 'tr',
            'locale'    => 'tr_TR',
            'timeZone'  => 'Europe/Istanbul'
        ],

       /**
        * Польская локализация.
        */
        'pl' => [
            'tag'       => 'pl-PL',
            'code'      => 540616, 
            'common'    => 'Polish',
            'name'      => 'Polski',
            'shortName' => 'Polski',
            'slug'      => 'pl',
            'locale'    => 'pl_PL',
            'timeZone'  => 'Europe/Warsaw'
        ],
    ],
    // папки в которых находятся компоненты для установки
    'searchFolders' => ['rg'],
    // возможноть перехода на сайт после установки
    'canGotoSite' => false
];
