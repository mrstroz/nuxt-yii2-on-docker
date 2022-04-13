<?php

namespace app\modules\crawler;

use Yii;
use yii\base\Module;
use yii\console\Application;

class CrawlerModule extends Module
{
    public function init()
    {
        parent::init();

        if (Yii::$app instanceof Application) {
            $this->controllerNamespace = 'app\modules\crawler\commands';
        }
    }
}