<?php

namespace app\modules\app;

use Yii;
use yii\base\Module;
use yii\console\Application;

class AppModule extends Module
{
    public function init()
    {
        parent::init();

        if (Yii::$app instanceof Application) {
            $this->controllerNamespace = 'app\modules\app\commands';
        }
    }
}