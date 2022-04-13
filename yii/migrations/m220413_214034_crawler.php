<?php

use yii\db\Migration;

/**
 * Class m220413_214034_crawler
 */
class m220413_214034_crawler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('crawler', [
            'id' => $this->bigInteger(),
            'url' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220413_214034_crawler cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220413_214034_crawler cannot be reverted.\n";

        return false;
    }
    */
}
