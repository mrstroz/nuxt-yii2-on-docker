<?php

namespace app\modules\crawler\models;

use app\modules\crawler\models\query\CrawlerQuery;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "crawler".
 *
 * @property int|null $id
 * @property string|null $url
 */
class Crawler extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crawler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CrawlerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CrawlerQuery(get_called_class());
    }
}
