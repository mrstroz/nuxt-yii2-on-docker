<?php

namespace app\modules\crawler\models\query;

use app\modules\crawler\models\Crawler;
use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[\app\modules\crawler\models\Crawler]].
 *
 * @see \app\modules\crawler\models\Crawler
 */
class CrawlerQuery extends ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return Crawler[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Crawler|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
