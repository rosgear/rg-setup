<?php
/**
 * Файл конфигурации установщика веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

/** @var \Ge\Installer\Installer $installer Установщик  */
$installer = $this->getParam('installer');
/** @var bool $applyDemo Применять демонстрационные данные  */
$applyDemo =  $this->getParam('applyDemo');

/** @var array $variables Идентфикаторы */
$variables = require('variables.php');
foreach ($variables as $variable => $value) {
    $$variable = $value;
}

return [
    'variables' => $variables,
    'insert'    => require('tables.php'),
    'run'       => ['install' => ['insert']]
];