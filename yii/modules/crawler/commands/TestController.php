<?php

namespace app\modules\crawler\commands;

use yii\console\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $producer = \Yii::$app->rabbitmq->getProducer('CrawlerProducer');
        $msg = serialize(['dataset_id' => 657, 'linked_datasets' => []]);
        $producer->publish($msg, 'CrawlerExchange', 'CrawlerKey');
    }
}