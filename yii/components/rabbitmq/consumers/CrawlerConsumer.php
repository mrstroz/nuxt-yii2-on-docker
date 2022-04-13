<?php

namespace app\components\rabbitmq\consumers;

use mikemadisonweb\rabbitmq\components\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use yii\helpers\VarDumper;

class CrawlerConsumer implements ConsumerInterface
{
    /**
     * @param AMQPMessage $msg
     * @return bool
     */
    public function execute(AMQPMessage $msg)
    {
        $data = $msg->body;
        VarDumper::dump($data);

        return ConsumerInterface::MSG_ACK;
    }
}