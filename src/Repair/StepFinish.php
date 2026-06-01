<?php
/**
 * Этот файл является частью установщика веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Setup\Repair;

use Ge;
use Exception;
use Ge\Helper\Url;
use Rg\Setup\SetupStep;

/**
 * Шаг установки "Завершение установки".
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Setup\Repair
 * @since 1.0
 */
class StepFinish extends SetupStep
{
    /**
     * {@inheritdoc}
     */
    public string $name = 'finish';

    /**
     * {@inheritdoc}
     */
    public string $viewName = 'repair/finish';

    /**
     * {@inheritdoc}
     */
    public function beforeInit(): bool
    {
        return $this->installer->isCompleted('repair:update');
    }

    /**
     * Выполняет действие "gotoPanel" (переход к Панели управления).
     * 
     * @return void
     */
    protected function gotoPanelAction(): void
    {
        // если попытка блокировать установщик не удалась
        if (!$this->installer->makeInaccessible()) {
            $this->addError(
                $this->t('Unable to delete directory "%s" to stop the installer. Do it manually.', [$this->installer->getLockName()])
            );
            return;
        }
        // сброс состояние установки
        $this->state->reset();

        try {
            /** @var \Ge\Mvc\Application $app */
            $app = $this->installer->getApp();

            if (Ge::alias('@backend') === '') {
                throw new Exception('not found');
            }
        } catch (Exception $exception) {
            $this->addError($exception->getMessage());
            return;
        }

        header('Location: ' . Url::home() . '/' . Ge::alias('@backend'));
    }

    /**
     * Выполняет действие "gotoSite" (переход на сайт).
     * 
     * @return void
     */
    protected function gotoSiteAction(): void
    {
        // если попытка блокировать установщик не удалась
        if (!$this->installer->makeInaccessible()) {
            $this->addError(
                $this->t('Unable to delete directory "%s" to stop the installer. Do it manually.', [$this->installer->getLockName()])
            );
            return;
        }
        // сброс состояние установки
        $this->state->reset();

        header('Location: ' . Url::home());
    }
}